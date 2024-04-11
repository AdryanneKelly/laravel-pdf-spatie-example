<?php

use App\Http\Controllers\PdfController;
use App\Livewire\PdfView;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pdf', PdfController::class)->name('pdf');
