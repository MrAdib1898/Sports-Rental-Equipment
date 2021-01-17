<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CalculationController;
use App\Http\Controllers\CommentController;


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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('students','App\Http\Controllers\StudentController');
Route::resource('comments','App\Http\Controllers\CommentController');
Route::get('/aboutus',[AboutusController::class,'index']);
Route::get('/products',[ProductsController::class,'index']);

Route::get('/calculate/form',function(){
    return view('/calculate/form');
});
Route::post('/calculate/contol','App\Http\Controllers\CalculationController@calculate');

