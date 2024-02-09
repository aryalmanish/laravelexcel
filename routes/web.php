<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormExportController;
use App\Http\Controllers\FormSubmitController;

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
Route::get('/showall', [FormSubmitController::class, 'showall']);
Route::get('form/export/', [FormExportController::class, 'export']);
Route::post('formSubmit', [
    'as' => 'form.submit',
    'uses' => 'App\Http\Controllers\FormSubmitController@formSubmit'
]);
Route::get('/getdata', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

