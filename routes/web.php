<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;







Route::get('/', function () {
    return view('welcome');
});


// Route::group(['middleware'=>"web"],function(){});

route::get('home',[UserController::class,'home'])->name('home');

route::view('add','add');


route::view('search','search');

route::view('login','login');

route::view('register','register');


// route::get('users',[Controller::class,'list']);


route::get('list',[UserController::class,'list']);






route::post('add',[UserController::class,'add']);
route::view("add","add");


route::get('delete/{id}',[UserController::class,'delete']);
route::get('edit/{id}',[UserController::class,'edit']);
route::post('update',[UserController::class,'update']);


    route::post('Register',[UserController::class,'Register']);
    route::view("Register","Register");

route::get('registerlist',[UserController::class,'registerlist']);
route::get('deleteregister/{id}',[UserController::class,'deleteregister']);
route::get('editregister/{id}',[UserController::class,'editregister']);
route::post('updateregister',[UserController::class,'updateregister']);


route::post('login',[UserController::class,'login']);
route::view("login","login");


