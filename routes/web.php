<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/welcome', function () {
    return  'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM: 2341760029 - Nama: Aidatul Rosida';
});

Route::get('/user/{name}', function ($name) {
    return  'Nama Saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID $id";
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='aida') {
    return 'Nama saya '.$name;
});

Route::get('/hello', [WelcomeController::class,'hello']);

use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);

Route::get('/greeting', function () {
	return view('blog.hello', ['name' => 'Aida']);
});

Route::get('/greeting', [WelcomeController::class, 'greeting']);