<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpvController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClassroomController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;

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
    return view('home/welcome');
})->name('main');

Route::get('/about', function () {
    return view('home/about');
})->name('about');

Route::get('/technotion', function () {
    return view('home/technotion');
})->name('technotion');

Route::get('/department', function () {
    return view('home/department');
})->name('department');

Route::get('/notapproved',[ClassroomController::class, 'notapproved'])->middleware(['auth', 'verified'])->name('notapproved');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    //create profile
    Route::middleware('check.status:approved')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        //classroom
        Route::get('/classroom',[ClassroomController::class, 'index'])->name('classroom');
        Route::get('/progressku',[ClassroomController::class, 'progressku'])->name('progressku');
        Route::get('/tugasku',[ClassroomController::class, 'tugasku'])->name('tugasku');
        Route::get('/detail-task/{id}',[ClassroomController::class, 'detail_task'])->name('detail-task');
        Route::patch('/detail-task-store/{id}',[ClassroomController::class, 'detail_task_update'])->name('detail-task-store');
        Route::patch('/detail-task-unsubmit/{id}',[ClassroomController::class, 'detail_task_unsubmit'])->name('detail-task-unsubmit');

        // datatables
        Route::get('/get-open',[ClassroomController::class, 'get_open'])->name('get-open');
        Route::get('/get-assigned',[ClassroomController::class, 'get_assigned'])->name('get-assigned');
        Route::get('/get-closed',[ClassroomController::class, 'get_closed'])->name('get-closed');
        Route::get('/get-student',[ClassroomController::class, 'get_student'])->name('get-student');

        // spv
        Route::get('/student', [SpvController::class, 'student'])->name('student');
        Route::get('/student-check/{id}', [SpvController::class, 'student_check'])->name('student-check');
        Route::patch('/student-validate/{id}', [SpvController::class, 'student_validate'])->name('student-validate');
        Route::get('/score/{id}', [SpvController::class, 'score'])->name('score');
        Route::patch('/score-store/{id}', [SpvController::class, 'score_store'])->name('score-store');
        Route::delete('/student-delete/{id}', [ProfileController::class, 'delete_student'])->name('student-delete');

        // create task
        Route::get('/create-task',[TaskController::class, 'create'])->name('create-course');
        Route::post('/store-course',[TaskController::class, 'store'])->name('store-course');
        Route::get('/edit-task/{id}',[TaskController::class, 'edit'])->name('edit-course');
        Route::put('/update-task/{id}',[TaskController::class, 'update'])->name('update-course');
        Route::get('/detail-open/{id}',[TaskController::class, 'detail_open'])->name('detail-open');
        Route::get('/detail-assigned/{id}',[TaskController::class, 'detail_assigned'])->name('detail-assigned');
        Route::get('/detail-closed/{id}',[TaskController::class, 'detail_closed'])->name('detail-closed');
        Route::delete('/delete-task/{id}',[TaskController::class, 'delete'])->name('delete-task');

        //admin
        Route::get('/control',[AdminController::class, 'index'])->name('control');
        Route::get('/role-check/{id}', [AdminController::class, 'role_check'])->name('role-check');
        Route::patch('/role-validate/{id}', [AdminController::class, 'role_validate'])->name('role-validate');
    });
});

Route::get('/test-email', function () {
    try {
        Mail::raw('Halo ini email percobaan dari aplikasi Laravel kamu.', function ($message) {
            $message->to('alphrenoorz@gmail.com') // Ganti dengan email kamu
                    ->subject('Tes Email Laravel');
        });
        return "Email tes berhasil dikirim (mungkin). Cek inbox!";
    } catch (\Exception $e) {
        // Ini akan menangkap dan menampilkan error jika ada masalah SMTP
        return "Gagal mengirim email tes: " . $e->getMessage();
    }
});

require __DIR__.'/auth.php';
