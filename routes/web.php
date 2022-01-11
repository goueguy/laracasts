<?php

use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('profile', [UserController::class, 'show'])->middleware('auth');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


//Route::get('/users/{name?}', [UserController::class, 'show'])->name('users.detail');


// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     dd($postId, $commentId);
// });

// Route::middleware(['auth'])->group(function () {
//     Route::get('/test', function () {
//         dd("ok");
//     });
// });

// Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/users/list', function () {
//         // Matches The "/admin/users" URL
//     });
// });


// Route::get('/photos/popular', [PhotoController::class, 'popular']);
// Route::resource('photos', PhotoController::class);
Route::resource('users', UserController::class);
Route::post('users/verify/ipaddress', [UserController::class, 'verifyUserIpAddress'])->name('verify.useripadress');


Route::get('/greeting', function () {
    $data = ['name' => 'James'];
    return View::make('greeting', $data);
});
