<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testMailController;
use App\Http\Controllers\AdminController;

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
Route::get('testmail',[testMailController::class,'testMail']);
Route::post('sendmail',[testMailController::class,'sendMail'])->name('sendmail');
Route::get('adminmsg',[AdminController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
