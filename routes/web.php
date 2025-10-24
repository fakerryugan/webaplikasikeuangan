<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\ProfilController;
Route::get('/profil', [ProfilController::class, 'show'])->name('profil.show');


Route::get('/dashboard', function () {
    return view('users.pages.dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
Route::get('/pemasukan', function () {
    return view('users.pages.pemasukan');
})->name('masuk');

Route::get('/pengeluaran', function () {
    return view('users.pages.pengeluaran');
})->name('keluar');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
