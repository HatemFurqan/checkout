<?php

use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/re-subscribe', function () {
    return view('subscribe');
});
Route::get('/payment/{token}', [RegisterController::class, 'Payment'])->name('payment');
Route::post('/submit', [RegisterController::class, 'register'])->name('submit');
Route::post('/submit/re-subscribe', [RegisterController::class, 'resubscribe'])->name('submit.re-subscribe');
Route::post('/check-student-exists', [RegisterController::class, 'checkStudentExists'])->name('check.student.exists');
