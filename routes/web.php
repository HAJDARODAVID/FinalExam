<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('isAdmin')
    ->prefix('admin')
    ->group(function(){
        /**Dashboard */
        Route::get('/', function(){
            return view('layouts.adminmodule');
        })->name('mainAdminModule'); 
        
        /**User module */
        Route::get('/users', function(){
            return view('userModule');
        })->name('userAdminModule');

        Route::get('/users/{id}', [UserController::class, 'edit'])
        ->name('userEditAdmModule'); 
        Route::put('/users/{id}', [UserController::class, 'put'])
        ->name('userSaveEditAdmModule'); 
        Route::delete('/users/{id}', [UserController::class, 'destroy'])
        ->name('userDestroyAdmModule'); 
});
