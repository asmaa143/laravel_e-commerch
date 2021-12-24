<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestController;

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


Route::group(['prefix'=>'login'],function (){

    Route::get('/',[AuthController::class,"getLoginView"])->name('login');
    Route::post('/',[AuthController::class,"doLogin"]);
});

Route::group(['prefix'=>'register'],function (){

    Route::get('/',[AuthController::class,"getRegisterView"]);
    Route::post('/',[AuthController::class,"doRegister"]);
});

Route::get('/logout',[AuthController::class,"doLogout"]);

Route::group(['prefix'=>'contact-us'],function (){
    Route::get('/',[ContactController::class,"getContactView"]);
    Route::post('/',[ContactController::class,"saveFeedback"]);
});

Route::group(['prefix'=>'/'],function (){
    Route::get('/home',[\App\Http\Controllers\HomeController::class,"index"]);
    Route::post('/home',[\App\Http\Controllers\HomeController::class,"addToCaret"]);

});


Route::group(['prefix'=>'tests'],function (){
    Route::get('/upload-file',[TestController::class,"getUploadView"]);
    Route::post('/upload-file',[TestController::class,"doUpload"]);

});


//middleware  //ok

// controller(update,delete)

//route naming //ok

//Api , dashboard


