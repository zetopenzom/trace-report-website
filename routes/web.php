<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingPageController;
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

Route::get(
    '/',
    [HomeController::class, 'index']
)->name('home');

Route::get(
    '/about',
    [HomeController::class, 'about']
)->name('about');
Route::get(
    '/strukturkss',
    [HomeController::class, 'strukturkss']
)->name('strukturkss');
Route::get(
    '/kss',
    [HomeController::class, 'kss']
)->name('kss');
Route::get(
    '/msg',
    [HomeController::class, 'msg']
)->name('msg');
Route::get(
    '/smi',
    [HomeController::class, 'smi']
)->name('smi');
Route::get(
    '/sbi',
    [HomeController::class, 'sbi']
)->name('sbi');
Route::get(
    '/contact',
    [HomeController::class, 'contact']
)->name('contact');
Route::get(
    '/tracereport',
    [HomeController::class, 'tracereport']
)->name('tracereport');
Route::get(
    '/tracereport/privacy_policy',
    [HomeController::class, 'privacy_policy']
)->name('privacy_policy');
Route::get(
    '/tracereport/terms_conditions',
    [HomeController::class, 'terms_conditions']
)->name('terms_conditions');
Route::get(
    '/tracereport/registration',
    [HomeController::class, 'registration']
)->name('registration');
Route::post(
    '/tracereport/post_demoaccount',
    [LandingPageController::class, 'getRequest']
)->name('getRequest');