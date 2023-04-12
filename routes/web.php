<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;

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
    return view('dashboard');
});
Route::get('/dashboard', function(){
    return view('dashboard');
});

//temporary route for admin login
Route::get('/admin/login', function(){
    return view('admin_login');
});

Route::get('/admin/registration', [AdminController::class, 'create']);
    
Route::get('/student/create', [StudentController::class, 'create']);
Route::post('/student', [StudentController::class, 'store'])->name('student.store');
Route::get('/student/list',[StudentController::class,'index'])->name('student.index');
Route::get('/student/{student}', [StudentController::class, 'show'])->name('student.show');
Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
Route::put('/student/{student}', [StudentController::class, 'update'])->name('student.update');
Route::delete('/student/{student}', [StudentController::class, 'destroy'])->name('student.delete');
    


    
