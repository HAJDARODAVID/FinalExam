<?php

use App\Models\admModuleItemsModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdmPostController;
use App\Http\Controllers\admItemsController;
use App\Http\Controllers\UserProfilController;
use App\Http\Controllers\UserProfileController;
use App\Models\User;

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

Route::get('/test', function () {
    dd(User::where('id', 1)->first()->roles());
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('isAdmin')
    ->prefix('admin')
    ->group(function(){
        /**Admin main page */
        Route::get('/', function(){
            $route = admModuleItemsModel::where('active', '1')->orderBy('order', 'asc')->first();
            if ($route->route == 'mainAdminModule') {
                return view('layouts.adminmodule');
            }
            return redirect()->route($route->route);   
        })->name('mainAdminModule'); 
        
        /**User module */
        Route::get('/users', [UserController::class, 'index'])->name('userAdminModule');
        Route::get('/users/{id}', [UserController::class, 'edit'])->name('userEditAdmModule'); 
        Route::put('/users/{id}', [UserController::class, 'put'])->name('userSaveEditAdmModule'); 
        Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('userDestroyAdmModule'); 

         /**Adm Menu Items */
        Route::get('/admItems', [admItemsController::class, 'index'])->name('admItemsModule');
        Route::put('/admItems/{id}/{type}', [admItemsController::class, 'changeStatus'])->name('changeAdmItemStatus');
        Route::put('/admItems/{id}', [admItemsController::class, 'edit'])->name('editAdmMenuItem');
        Route::delete('/admItems/{id}', [admItemsController::class, 'delete'])->name('deleteAdmMenuItem');
        Route::post('/admItems', [admItemsController::class, 'store'])->name('newAdmMenuItem');

        /**Adm Menu Items */
        Route::get('/admPosts', [AdmPostController::class, 'index'])->name('admPostModule');
        Route::delete('/admPosts/{id}', [AdmPostController::class, 'delete'])->name('deleteAdmPostModule');
});

Route::get('/post/{id}', [PostController::class, 'show'])->name('showPost');

Route::middleware('auth')
    ->group(function(){
        /**Posts */
        Route::get('/post', [PostController::class, 'index'])->name('newPostForm');
        Route::get('/my_posts', function(){return view('postList');})->name('postsList');
        Route::post('/post', [PostController::class, 'store'])->name('saveNewPost');
        Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('editPost');
        Route::put('/post/{id}', [PostController::class, 'put'])->name('storeEditPost');
        Route::delete('/post/{id}', [PostController::class, 'delete'])->name('deletePost');

        /**Profil */
        Route::get('/profile', [UserProfileController::class, 'index'])->name('userProfile');
        Route::put('/profile', [UserProfileController::class, 'changePassword'])->name('changePassUserProfile');
});








