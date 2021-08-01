<?php

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

use App\Http\Controllers\ContactForm;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TipsController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlacesController;

Route::resource('forms', 'App\Http\Controllers\FormController');

// Static pages
Route::view('/', 'home');
Route::view('/services', 'services');
Route::view('/about', 'about');

Route::view('/admin_dashboard', 'admin_dashboard');
Route::view('/dashboard', 'dashboard');
Route::resource("continents",\App\Http\Controllers\ContinentController::class);
Route::resource("schools",\App\Http\Controllers\SchoolController::class);
//Route::resource("users",\App\Http\Controllers\UsersController::class);
Route::resource("countries",\App\Http\Controllers\CountryController::class);
Route::resource("visits",\App\Http\Controllers\VisitController::class);
Route::resource("hospitals",\App\Http\Controllers\HospitalController::class);


Route::post('/continents-form', function () {
    return view('continents-form');
});
Route::post('/countries-form', function () {
    return view('continents-form');
});
// Login - Register

Route::get('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'submit']);
Route::get('/logout', [LoginController::class, 'destroy']);

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'submit']);

//From slides
// Route::get('/login',function(){
//     return View::make('login');
// });
// Route::post('login', function(){
//     return Redirected::intended();
// });

// Controllers
Route::get('/contact', [ContactForm::class, 'view']);
Route::post('/contact', [ContactForm::class, 'submit']);

Route::get('/users', [UsersController::class, 'view']);

Route::get('/users/tips', [TipsController::class, 'view']);
Route::post('/users/tips', [TipsController::class, 'submit']);

Route::get('/users/media', [MediaController::class, 'view']);
Route::post('/users/media', [MediaController::class, 'submit']);

Route::get('/users/places', [PlacesController::class, 'view']);
Route::post('/users/places', [PlacesController::class, 'submit']);

Route::get('/users/chat', [UsersController::class, 'chat']);

