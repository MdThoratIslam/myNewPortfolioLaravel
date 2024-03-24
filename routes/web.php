<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\CV\PDFController;
use App\Http\Controllers\Web\WebSiteController as WebController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WebController::class, 'index'])->name('web_site');
Route::get('/portfolio_filter/{id}', [WebController::class, 'portfolio_describe'])->name('portfolio_filter');
Route::get('/portfolio_details/{id}', [WebController::class, 'portfolio_describe'])->name('portfolio_details');

Route::get('/generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');


Route::prefix('admin')->middleware(['auth', 'verified'])->group(function ()
{
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])
        ->middleware(['auth', 'verified'])
        ->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
