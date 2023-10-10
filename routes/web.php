<?php

use App\Http\Controllers\FooterController;
use App\Http\Controllers\LoginImageController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NormalUsersController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhoneEmail;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UploadController;
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
Route::get('postDetails/{id}',[PostController::class,'postDetails']);

//Page routes

Route::get('/page',[PageController::class,'index']);
Route::post('/page_create',[PageController::class,'create']);
Route::get('/pages',[PageController::class,'pages']);
Route::get('page_delete/{id}',[PageController::class,'delete']);
Route::get('page_update/{id}',[PageController::class,'update']);
Route::post('page_edit/{id}',[PageController::class,'edit']);
Route::get('page_view/{id}',[PageController::class,'view']);

//Phone Email route

Route::get('/createPhoneEmail',[PhoneEmail::class,"index"]);
Route::post('/phone_email_create',[PhoneEmail::class,"create"]);
Route::get('/updatePhoneEmail/{id}',[PhoneEmail::class,"update"]);
Route::post('/edit/{id}',[PhoneEmail::class,"edit"]);

// footer routes 
Route::get('/create_footer',[FooterController::class,"index"]);
Route::post('/footer_create',[FooterController::class,"create"]);
Route::get('/updateFooter/{id}',[FooterController::class,"update"]);
Route::post('/footer_edit/{id}',[FooterController::class,"edit"]);

//Normal Users Routes

Route::get('/createnewUser',[NormalUsersController::class,'index']);
Route::post('/user_create',[NormalUsersController::class,'create']);
Route::get('/users',[NormalUsersController::class,'users']);
Route::get('/user_update/{id}',[NormalUsersController::class,'update']);
Route::post('/user_edit/{id}',[NormalUsersController::class,'edit']);
Route::get('/user_delete/{id}',[NormalUsersController::class,'delete']);


//Ckeditor routes
Route::post('/upload',[UploadController::class,'upload'])->name('ckeditor.upload');

//Privacy Policy routes
Route::get('/createPrivacyPolicy',[PrivacyController::class,'index']);
Route::post('/privacy_create',[PrivacyController::class,'create']);
Route::get('/privacyPolicy',[PrivacyController::class,'view']);
Route::get('/updatePrivacyPolicy/{id}',[PrivacyController::class,'update']);
Route::post('/privacy_edit/{id}',[PrivacyController::class,'edit']);

//Slider routes

Route::get('/createSlider',[SliderController::class,'index']);
Route::post('/slider_create',[SliderController::class,'create']);
Route::get('/sliders',[SliderController::class,'view']);
Route::get('/slider_update/{id}',[SliderController::class,'update']);
Route::post('/slider_edit/{id}',[SliderController::class,'edit']);


//Role Routes
Route::get('/role',[RoleController::class,'index']);
Route::post('/role_create',[RoleController::class,'create']);
Route::get('/roles',[RoleController::class,'view']);
Route::get('/role_view/{id}',[RoleController::class,'details']);
Route::get('/role_update/{id}',[RoleController::class,'update']);
Route::post('/role_edit/{id}',[RoleController::class,'edit']);
Route::get('/role_delete/{id}',[RoleController::class,'delete']);


//Logout
Route::get('/logout',[RoleController::class,'logout']);

//Logo routes
Route::get('/logo',[LogoController::class,'index']);
Route::post('/logo_create',[LogoController::class,'create']);
Route::get('/updateLogo/{id}',[LogoController::class,'update']);
Route::post('/edit_logo/{id}',[LogoController::class,'edit']);

//Shop routes
Route::get('/createShop',[ShopController::class,'index']);
Route::post('/shop_create',[ShopController::class,'create']);
Route::get('/shop',[ShopController::class,'view']);
Route::get('/updateShop/{id}',[ShopController::class,'update']);
Route::post('/shop_edit/{id}',[ShopController::class,'edit']);

//Login image routes
Route::get('/createLoginImage',[LoginImageController::class,'index']);
Route::post('/login_image_create',[LoginImageController::class,'create']);
Route::get('/updateLoginImage/{id}',[LoginImageController::class,'update']);
Route::post('/login_image_edit/{id}',[LoginImageController::class,'edit']);
