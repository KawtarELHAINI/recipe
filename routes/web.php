<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\RecipeController;


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

Route::get('/add', function () {
    return view('add');
});  

Route::get('/register', function () {
    return view('register');
});     

Route::post('/register' ,[Usercontroller::class,'register']);
Route::post('/logout',[Usercontroller::class,'logout']);
Route::post('/login',[Usercontroller::class,'login']);


Route::post('/add', [RecipeController::class, 'add'])->name('add');
Route::post('/', [RecipeController::class, 'store'])->name('store');
