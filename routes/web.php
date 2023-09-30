<?php

use App\Http\Controllers\FooterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhoneEmail;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

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

Route::get('/',[PhoneEmail::class,'welcome']);

Route::get('/admin', function () {
    return view('admin.home');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// post routes 

Route::get('/post',[PostController::class,'index']);
Route::post('/create',[PostController::class,'create']);
Route::get('/posts',[PostController::class,'posts']);
Route::get('post_delete/{id}',[PostController::class,'delete']);
Route::get('post_update/{id}',[PostController::class,'update']);
Route::post('update/{id}',[PostController::class,'edit']);
Route::get('post_view/{id}',[PostController::class,'view']);

//Page routes

Route::get('/page',[PageController::class,'index']);
Route::post('/page_create',[PageController::class,'create']);
Route::get('/pages',[PageController::class,'pages']);
Route::get('page_delete/{id}',[PageController::class,'delete']);
Route::get('page_update/{id}',[PageController::class,'update']);
Route::post('edit/{id}',[PageController::class,'edit']);
Route::get('page_view/{id}',[PageController::class,'view']);

//Phone Email route

Route::get('/createPhoneEmail',[PhoneEmail::class,"index"]);
Route::post('/phone_email_create',[PhoneEmail::class,"create"]);
Route::get('/updatePhoneEmail/{id}',[PhoneEmail::class,"update"]);
Route::post('/edit/{id}',[PhoneEmail::class,"edit"]);

// footer route 
Route::get('/create_footer',[FooterController::class,"index"]);
Route::post('/footer_create',[FooterController::class,"create"]);
Route::get('/updateFooter/{id}',[FooterController::class,"update"]);
Route::post('/footer_edit/{id}',[FooterController::class,"edit"]);




