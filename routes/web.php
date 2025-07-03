<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// default route 
Route::get('/', fn () => redirect()->route('contacts.index'));

// redirect to xml import page
Route::get('contacts/importXml', [ContactController::class, 'importForm'])->name('contacts.import');

// Handle file upload
Route::post('contacts/importXml', [ContactController::class, 'importXml'])->name('contacts.importXml.post');

// Handle CRUD opertion
Route::resource('contacts', ContactController::class);
