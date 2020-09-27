<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use function auth;

class Users extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function getAuthUser()
  {
    $user = Auth()->user();
    if ($user) {
      return [
        'id' => $user->id,
        'name' => $user->name,
        'email' => $user->email,
        'username' => $user->username,
      ];
    }

    return redirect('app/login');
  }
}
