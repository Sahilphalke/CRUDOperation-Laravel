<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/form', 'userform');
Route::post('/form', [UserController::class, 'userdata']);

Route::view('/list', 'userlist');
Route::get('/list', [UserController::class, 'userlist'])->name('userlist');
Route::get('/list/{id}', [UserController::class, 'userdelete'])->name('userdelete');
Route::get('/find/{id}', [UserController::class, 'userfind'])->name('userfind');

Route::put('/userupdate/{id}', [UserController::class, 'userupdate'])->name('userupdate');


// Route::view('/update', 'userupdate');

