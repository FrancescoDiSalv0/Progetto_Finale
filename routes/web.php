<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RevisorController;
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

Route::get("/ricerca/annuncio", [FrontController::class, "searchAnnouncements"])->name("announcements.search");

// Home Revisore
Route::get('/revisor/home', [RevisorController::class, "index"])->middleware('isRevisor')->name("revisor.index");

// Accetta Annuncio
Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class, "acceptAnnouncement"])->middleware('isRevisor')->name("revisor.accept_announcement");

// Rifiuta Annuncio
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class, "rejectAnnouncement"])->middleware('isRevisor')->name("revisor.reject_announcement");

// richiedi di diventare revisore
Route::get("/richiesta/revisore",[RevisorController::class, "becomeRevisor"])->middleware("auth")->name("become.revisor");

// rendi utente revisore
Route::get("/rendi/revisore/{user}",[RevisorController::class, "makeRevisor"])->name("make.revisor");

// Form richiesta revisore
Route::get("/richiesta/revisore/form",[RevisorController::class, "requestForm"])->middleware("auth")->name("revisor.request");

// cambio lingua
Route::post("/lingua/{lang}", [FrontController::class, "setLanguage"])->name("set_language_locale");

