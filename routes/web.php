<?php

use App\Http\Controllers\Main\LandingPageController;
use App\Http\Controllers\Partial\Footer;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
Route::get('/', [LandingPageController::class, 'index'])->name('landingPage.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

