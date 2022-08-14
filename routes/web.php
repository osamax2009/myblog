<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
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

Route::get('/', function(){
    return view('welcome');
});

Route::view('homepage','welcome');

Route::get('/products',[ProductController::class,'index']);
Route::get('/createp',[ProductController::class,'create']);
Route::post('/createproduct',[ProductController::class,'store']);





Route::view('pageone', 'testpages.pageone');
Route::view('pagetwo', 'testpages.pagetwo');


Route::group(['middleware'=>['guest']],function(){
        Route::get('/register',[AuthController::class,'show']);
        Route::post('/register',[AuthController::class,'register']);
});
