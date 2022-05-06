<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great
|
*/

Route::get('/',  [Controller::class, 'home'])->name('home');
Route::get('/aboutus',  [Controller::class, 'aboutus'])->name('aboutus');
Route::get('/callforpapers',  [Controller::class, 'callforpapers'])->name('callforpapers');
Route::get('/registration',  [Controller::class, 'registration'])->name('registration');
Route::get('/submission',  [Controller::class, 'submission'])->name('submission');
Route::get('/contactus',  [Controller::class, 'contactus'])->name('contactus');
Route::get('/committee',  [Controller::class, 'committee'])->name('committee');