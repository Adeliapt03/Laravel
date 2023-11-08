<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdellController;

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
Route::get('/',function (){
    return view('home');
});

Route::get('/about', [MyController::class, 'show']);

Route::resource('/student', StudentController::class);

//Route::get('/', [AdellController::class, 'home']);
//Route::post('/hasil', [AdellController::class, 'show']);

