<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AnnouncementController;

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

Route::get('/', [PublicController::class, "welcome"])->name("welcome");
// Rotta per pagina inserimento annuncio
Route::get('/nuovo/annuncio', [AnnouncementController::class, "createAnnouncement"])->name("announcement.create");
// Rotta di tipo Post per recuperare dati nuovo annuncio
Route::post('/nuovo/annuncio/submit', [AnnouncementController::class, "submitAnnouncement"])->name("announcement.submit");


