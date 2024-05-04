<?php

use App\Http\Controllers\EntryController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




// ---------------------------------------

Route::get('/dashboard', [JournalController::class, 'index'])->name('dashboard');

Route::get('/dashboard/journals/{journal}/entries', [EntryController::class, 'index'])->name('journals.entries.index');

Route::get('/dashboard/journals/{journal}/entries/{entry}', [EntryController::class, 'show'])->name('entry.show');


// add journals
Route::post('/dashboard', [JournalController::class, 'store'])->name('journals.store');


// add entry
Route::post('/dashboard/journals/{journal}/entries/store', [EntryController::class, 'store'])->name('entries.store');


Route::get('/dashboard/testModal', function(){
    return view('components/dashboard/testModal');
});


// delete entry
Route::delete('journals/{journal}/entries/{entry}', [EntryController::class, 'destroy'])-> name('entries.destroy');