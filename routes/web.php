<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, "welcome"])->name("welcome");

Route::get('/categoria/{category}',[FrontController::class, "categoryShow"])->name("categoryShow");
// Rotta per pagina inserimento annuncio
Route::get('/nuovo/annuncio', [AnnouncementController::class, "createAnnouncement"])->middleware("auth")->name("announcements.create");

// Route::post('/nuovo/annuncio/submit', [AnnouncementController::class, "submitAnnouncement"])->name("announcement.submit");
Route::get('/dettaglio/annuncio/{announcement}', [AnnouncementController::class, "showAnnouncement"])->name("announcements.show");
Route::get('/tutti/annunci', [AnnouncementController::class, "indexAnnouncement"])->name("announcements.index");



