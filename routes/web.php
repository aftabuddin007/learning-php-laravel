<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

// Route::get('/user',[UserControler::class,'index']);
// Route::get('/add-user',[UserControler::class,'addUser']);
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/about/{name}', function ($name) {
//     return view("about",["name"=>$name]);
// });
Route::view("/","add-user");
Route::get("/add-user",[userController::class,'addUser']);


