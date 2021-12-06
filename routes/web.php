<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SemesterRegistrationController;
use App\Http\Controllers\ImportController;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Intl\Countries;

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

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
    Route::get('/', [SemesterRegistrationController::class, 'index'])->name('semester.registration.index');
    Route::post('/submit/re-subscribe', [RegisterController::class, 'resubscribe'])->name('submit.re-subscribe');
    Route::get('/semester-registration/get-student-info', [SemesterRegistrationController::class, 'getStudentInfo'])->name('semester.registration.getStudentInfo');
    Route::get('/importCountries', [ImportController::class, 'importCountries']);

});


 Route::get('/test', function (\App\Services\GoogleSheet $googleSheet){

     $subscibtion = \App\Models\Subscribe::query()
         ->where('id', '=', 112)
         ->first();

     $result = $subscibtion->update([
         'payment_method' => 'checkout_gateway',
     ]);

     if ($result){
         event('eloquent.updated: App\Models\Subscribe', $subscibtion);
     }

 });

// Route::get('symlink', function(){
//     $targetFolder =  '/home/customer/www/furqanshop.com/eservices_checkout_app/storage/app/public';
//     $linkFolder   =  '/home/customer/www/furqanshop.com/public_html/eservices_checkout/storage';
//     symlink($targetFolder, $linkFolder);
//     echo 'Symlink process successfully completed';
// });
