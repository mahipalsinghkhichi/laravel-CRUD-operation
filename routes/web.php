<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\studentController;
use App\Http\Requests\StudentRequest;
use App\Models\studentModel;

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

Route::get('home', function () {
    return view('home');
});
// Route::get('/registers',function(){
//     return view('registers');
// });
// Route::get('student', function () {
//     return view('student');
// });
Route::get('users',[AuthController::class,'users']);
Route::post('usersPost',[AuthController::class,'usersPost']);
Route::get('register',[studentController::class,'register']);
Route::post('registerPost',[studentController::class,'registerPost']);
Route::get('login',[AuthController::class, 'login']);
Route::post('loginPost',[AuthController::class,'loginPost']); 
Route::get('dashboard',[AuthController::class,'dashboard']);
Route::get('candidateTable',[CandidateController::class,'candidateTable']);
Route::get('candidateTable/delete/{id}',[CandidateController::class,'delete']);
Route::get('candidateTable/edit/{id}',[CandidateController::class,'edit']);
Route::get('candidateTable/update/{id}',[CandidateController::class,'update']);
Route::get('candidateTable/candidatetrash/force-delete/{id}',[CandidateController::class,'forceDelete']);
Route::get('candidateTable/restore/{id}',[CandidateController::class,'restore']);
Route::get('candidateTable/candidatetrash',[CandidateController::class,'trash']);
Route::get('candidate',[CandidateController::class,'candidate']);
Route::post('candidatePost',[CandidateController::class,'candidatePost']);