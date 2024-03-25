<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\CV\PDFController;
use App\Http\Controllers\Web\WebSiteController as WebController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\User\UserController;

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

// ============== Web Routes ===========================================================================================
Route::get('/', [WebController::class, 'index'])->name('web_site');
Route::get('/portfolio_filter/{id}', [WebController::class, 'portfolio_describe'])->name('portfolio_filter');
Route::get('/portfolio_details/{id}', [WebController::class, 'portfolio_describe'])->name('portfolio_details');
Route::get('/generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');
// ============== Web Routes End =======================================================================================

Route::prefix('admin')->middleware(['auth', 'verified'])->group(function ()
{
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

//    ============================== User All Routes ===================================================================
    Route::get('/users-list', [UserController::class, 'index'])->name('users-list');
    Route::get('/users-list/{id}', [UserController::class, 'show'])->name('users-list-show');
    Route::get('/users-list/{id}/edit', [UserController::class, 'edit'])->name('users-list-edit');
    Route::patch('/users-list/{id}', [UserController::class, 'update'])->name('users-list-update');
    Route::delete('/users-list/{id}', [UserController::class, 'destroy'])->name('users-list-destroy');
    Route::get('/create-user', [UserController::class, 'create'])->name('create-user');

// ============================== User All Routes End ==================================================================

//    =============================== Email ============================================================================
    Route::get('/inbox', [UserController::class, 'inbox'])->name('inbox');
    Route::get('/inbox-details', [UserController::class, 'inboxShow'])->name('inbox-details');
    Route::get('/inbox/{id}/edit', [UserController::class, 'inboxEdit'])->name('inbox-edit');
    Route::patch('/inbox/{id}', [UserController::class, 'inboxUpdate'])->name('inbox-update');
    Route::delete('/inbox/{id}', [UserController::class, 'inboxDestroy'])->name('inbox-destroy');
    Route::post('/email-compose', [UserController::class, 'inboxStore'])->name('email-compose');
});

Route::middleware('auth')->group(function ()
{
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
