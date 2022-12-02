<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyMessageController;
use App\Http\Controllers\UserEditController;
use App\Http\Controllers\UserPanelController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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


Route::get('/', [MyMessageController::class, 'index'])->name('welcome');

Route::post('/edit-profile', [UserEditController::class, 'save']);
Route::post('/add-video', [VideoController::class, 'save']);
Route::get('/delete-video/{id}', [VideoController::class, 'delete']);

Route::get('/my-projects', [UserPanelController::class, 'my_projects'])->name('my-projects');
Route::get('/all-projects', [UserPanelController::class, 'all_projects'])->name('all-projects');
Route::get('/collaborators', [UserPanelController::class, 'all_collaborators'])->name('collaborators');
Route::get('/profile/{id}', [UserPanelController::class, 'profile'])->name('profile');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
