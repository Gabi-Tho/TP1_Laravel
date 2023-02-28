<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
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


//====================================== Etudiant Controller =====================================\\

Route::get('/', function () {
    return view('etudiant');
});

            //URL    //Controller              //Method         //folder.file of view
Route::get('index',  [EtudiantController::class,'index'])->name('etudiant.index'); //this is the alias(prince)
// Route::get('',  [EtudiantController::class,'index']);
// Route::get('/',  [EtudiantController::class,'index']);
Route::get('create', [EtudiantController::class,'create'])->name('etudiant.create'); 
Route::post('create', [EtudiantController::class,'store'])->name('etudiant.store');


//affiche etudiant
Route::get('show/{etudiant}',   [EtudiantController::class,'show'])->name('etudiant.show');

//affiche formulaire
Route::get('edit/{etudiant}',   [EtudiantController::class,'edit'])->name('etudiant.edit'); 
//submit button
Route::put('edit/{etudiant}',   [EtudiantController::class,'update']); 

Route::delete('edit/{etudiant}',   [EtudiantController::class,'destroy']); 



//====================================== UserController =====================================\\

Route::get('/', [UserController::class,'index'])->name('user.index');
Route::post('forum', [UserController::class,'show'])->name('user.show');

//====================================== AuthController =====================================\\

Route::get('login',[CustomAuthController::class, 'index'])->name('login');
Route::post('login',[CustomAuthController::class, 'authentication'])->name('user.auth');
Route::get('logout',[CustomAuthController::class, 'logout'])->name('logout');
Route::get('dashboard',[CustomAuthController::class, 'dashboard'])->name('dashboard');

Route::get('register', [CustomAuthController::class,'create'])->name('user.create');
Route::post('register',[CustomAuthController::class, 'store'])->name('user.store');


//====================================== Languages =====================================\\

Route::get('lang/{locale}',[LocalizationController::class, 'index'])->name('lang');


//=================================== Forum Controller =================================\\

Route::get('forum', [ForumController::class,'create'])->name('user.show');
Route::post('forum', [ForumController::class,'store'])->name('forum.store');
Route::get('index', [ForumController::class,'index'])->name('forum.index');
Route::get('forum.edit/{article}', [ForumController::class,'edit'])->name('forum.edit');
Route::put('forum.edit/{article}', [ForumController::class,'update'])->name('forum.edit');
Route::delete('forum.edit/{article}', [ForumController::class, 'destroy']);


//=================================== Upload Controller =================================\\

Route::get('upload.index',[UploadController::class, 'index'])->name('upload.index');
Route::get('upload.show',[UploadController::class, 'show'])->name('upload.show');
Route::get('upload.create',[UploadController::class, 'create'])->name('upload.create');
Route::post('upload.create',[UploadController::class, 'store'])->name('upload.store');


