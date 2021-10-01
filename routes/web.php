<?php

use Facade\Ignition\ErrorPage\Renderer;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registationcontroller;
use App\Http\Controllers\dbcontroller;
use App\Http\Controllers\contentcontroller;
use App\Http\Controllers\routine;


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
    return view('index');
});

//E-clinic index page
Route::get('/index', function () {
    return view('index');
});

//registraation page
Route::view('regi','/registration');

//form validations
Route::POST('users',[registationcontroller::class,'getData']);

//db connections file using controller
Route::get('url',[dbcontroller::class,'db']);

//to visit the home page using content layout files
// Route::get('home',[contentcontroller::class,'index']);

Route::view('home','/index');

//Routine checkup page 
Route::view('routine','/routine');

// routine controller
// Route::get('routine',[routine::class,'testPythonScript']);