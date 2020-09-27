<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use function auth;
use function json_encode;
use function redirect;

class LoginController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Login Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles authenticating users for the application and
  | redirecting them to your home screen. The controller uses a trait
  | to conveniently provide its functionality to your applications.
  |
  */

  protected $redirectTo = RouteServiceProvider::HOME;

  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }

  public function logout()
  {
    auth()->logout();
    return redirect()->to('/app/login');
  }

  public function redirectToGoogleProvider()
  {
    return Socialite::driver('google')->redirect();
  }

  public function redirectToFacebookProvider()
  {
    return Socialite::driver('facebook')->redirect();
  }

  public function handleGoogleProviderCallback()
  {
    return $this->handleProviderCallback('google');
  }

  public function handleFacebookProviderCallback()
  {
    return $this->handleProviderCallback('facebook');
  }

  private function handleProviderCallback($socialDriver)
  {
    try {
      $user = Socialite::driver($socialDriver)->user();
    } catch (\Exception $e) {
      return redirect('/app/login');
    }

    $existingUser = User::where('social_id', $user->id)->first();
    if ($existingUser) {
      // log them in
      auth()->login($existingUser, true);
    } else {
      // create a new user
      $newUser = new User;
      $newUser->name = $user->name;
      $newUser->email = $user->email;
      $newUser->avatar = $user->avatar;
      $newUser->avatar_original = $user->avatar_original;
      $newUser->social_id = $user->id;
      $newUser->username = $user->name;
      $newUser->save();
      auth()->login($newUser, true);
    }
    return redirect()->to('/app/home');
  }
}
