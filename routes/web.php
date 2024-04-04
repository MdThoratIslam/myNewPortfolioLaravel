<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\CV\PDFController;
use App\Http\Controllers\Web\WebSiteController as WebController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\User\UserController;
use App\Http\Controllers\Calender\CalenderController;
use App\Http\Controllers\Events\EventsController;

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
    Route::get('/', function () {return redirect()->route('dashboard');});
    Route::get('/dashboard',            [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
//    ============================== User All Routes ===================================================================
    Route::get('/users-list',                       [UserController::class, 'index'])->name('users-list');
    Route::get('/users-list/{id}',                  [UserController::class, 'show'])->name('users-list-show');
    Route::get('/users-details/',                   [UserController::class, 'edit'])->name('users.details');
    Route::get('/users-setting/',                   [UserController::class, 'setting'])->name('users.setting');

    Route::post('/user-update/{id}',                [UserController::class, 'update'])->name('user-update');
    Route::get('/create-user',                      [UserController::class, 'create'])->name('create-user');
// ============================== User All Routes End ==================================================================

//   =============================== Calender=======================================================================
    Route::get('/fullcalender',             [EventsController::class, 'index'])->name('fullcalender');
    Route::post('/store-event',             [EventsController::class, 'store']);
    Route::post('/event-update',            [EventsController::class, 'update']);
    Route::post('/delete-event',            [EventsController::class, 'destroy']);
});

Route::middleware('auth')->group(function ()
{
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
