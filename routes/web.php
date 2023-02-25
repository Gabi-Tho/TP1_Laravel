<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\UserController;
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
Route::get('index',  [EtudiantController::class,'index'])->name('etudiant.index'); //renaming the route so you can customize links
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
Route::post('login',[CustomAuthController::class, 'authentication'])->name('user.auth');//the error is somewhere here\\
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
// Route::get('destroy', [ForumController::class,'destroy']);


