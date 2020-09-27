<?php

use App\Http\Controllers\Api\Users;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SpaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('auth/logout', [ 'as' => 'auth/logout', 'uses' => [LoginController::class, 'logout']]);

Route::get('app/{any}', [SpaController::class, 'index'])->where('any', '.*');

Route::get('auth/logout', [LoginController::class, 'logout']);
Route::get('api/users/getAuthUser', [Users::class, 'getAuthUser']);

Route::get('auth/google', [LoginController::class, 'redirectToGoogleProvider']);
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleProviderCallback']);

Route::get('auth/facebook', [LoginController::class, 'redirectToFacebookProvider']);
Route::get('auth/facebook/callback', [LoginController::class, 'handleFacebookProviderCallback']);
