<?php

use App\Http\Controllers\SwalController;
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

Route::view('/swal', 'swal');
Route::view('/swal-icon', 'swal-icon');
Route::view('/swal-display', 'swal-display');
Route::get('/swal-alert-success', [SwalController::class, 'alertSuccess']);
Route::get('/swal-alert-info', [SwalController::class, 'alertInfo']);
Route::get('/swal-success', [SwalController::class, 'success']);
Route::get('/swal-info', [SwalController::class, 'info']);
Route::get('/swal-html', [SwalController::class, 'html']);
Route::get('/swal-toast', [SwalController::class, 'toast']);

Route::get('/swal-helper-alert', [SwalController::class, 'helperAlert']);
Route::get('/swal-helper-success', [SwalController::class, 'helperSuccess']);
Route::get('/swal-helper-info', [SwalController::class, 'helperInfo']);
Route::get('/swal-helper-toast', [SwalController::class, 'helperToast']);

Route::get('/swal-autoclose', [SwalController::class, 'autoClose']);
Route::get('/swal-position', [SwalController::class, 'position']);
Route::get('/swal-confirm', [SwalController::class, 'confirm']);
Route::get('/swal-cancel', [SwalController::class, 'cancel']);
Route::get('/swal-addimage', [SwalController::class, 'addImage']);
Route::get('/swal-animation', [SwalController::class, 'animation']);
Route::get('/swal-progressbar', [SwalController::class, 'proggressBar']);

Route::view('/swal', 'swal-laravel');
Route::get('/swal-with', [SwalController::class, 'with']);
Route::get('/swal-with-success', [SwalController::class, 'withSuccess']);

Route::view('/swal-form', 'swal-form');
Route::post('/swal-validate-satu', [SwalController::class, 'swalValidateSatu']);
Route::post('/swal-validate-banyak', [SwalController::class, 'swalValidateBanyak']);

Route::get('/swal-delete', [SwalController::class, 'delete']);
Route::delete('/swal-delete/{id}', [SwalController::class, 'destroy']);
