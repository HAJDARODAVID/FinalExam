<?php

use App\Models\User;
use App\Models\admModuleItemsModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\AdmPostController;
use App\Http\Controllers\admItemsController;
use App\Http\Controllers\UserProfilController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\MainMenuItemsController;

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

Route::get('/test', [App\Http\Controllers\HomeController::class, 'test']);

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

        /**Main Menu Items */
        Route::get('/mainItems', [MainMenuItemsController::class, 'index'])->name('mainItemsModule');
        Route::put('/mainItems/{id}/{type}', [MainMenuItemsController::class, 'changeStatus'])->name('changeMenuItemStatus');
        Route::delete('/mainItems/{id}', [MainMenuItemsController::class, 'delete'])->name('deleteMenuItem');
        Route::put('/mainItems/{id}', [MainMenuItemsController::class, 'edit'])->name('editMenuItem');
        Route::post('/mainItems', [MainMenuItemsController::class, 'store'])->name('newMainMenuItem');

        /**Roles Module */
        Route::get('/admPosts', [AdmPostController::class, 'index'])->name('admPostModule');
        Route::delete('/admPosts/{id}', [AdmPostController::class, 'delete'])->name('deleteAdmPostModule');

        Route::get('/roles', [RolesController::class, 'index'])->name('rolesModule');
        Route::put('/roles/{id}', [RolesController::class, 'edit'])->name('editRolesModule');
        Route::delete('/roles/{id}', [RolesController::class, 'delete'])->name('deleteRolesModule');
        Route::post('/roles', [RolesController::class, 'store'])->name('newRolesModule');
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
        Route::put('/profile/{id}', [UserProfileController::class, 'editUser'])->name('editUserProfile');
        Route::post('/profile', [UserProfileController::class, 'uploadImage'])->name('uploadImageUserProfile');
});








