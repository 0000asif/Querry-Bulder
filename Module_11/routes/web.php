<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

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
Route::get('student', [StudentController::class,'show'])->name('student');

Route::get('singleuser/{id}', [StudentController::class, 'singleUser'])->name('view.user');

Route::get('delete/{id}', [StudentController::class, 'deleteUser'])->name('delete.user');

Route::get('deleteall', [StudentController::class,'deleteall'] )->name('deleteall');

Route::post('/add', [StudentController::class, 'addUser'])->name('adduser');

Route::view('newuser', '/adduser');

Route::get('update/{id}', [StudentController::class,'updateuser'])->name('update.user');

Route::post('updatestudent/{id}', [StudentController::class,'update' ])->name('updatedata');

Route::get('test', [UserController::class, 'join'])->name('user.test');

