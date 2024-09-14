<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\CV\PDFController;
use App\Http\Controllers\Web\WebSiteController as WebController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\User\UserController;
use App\Http\Controllers\Calender\CalenderController;
use App\Http\Controllers\Events\EventsController;
use App\Http\Controllers\backend\AcademicQualification\AcademicQualificationController as AcademicQualification;
use App\Http\Controllers\backend\Mail\MailController;
//use App\Http\Controllers\OrderController;
use App\Http\Controllers\EarningMoneyController;
use App\Http\Controllers\ExpansiveController;
use App\Http\Controllers\backend\Module\ModuleController;

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
    Route::get('/',                         [WebController::class, 'index'])->name('web_site');
    Route::get('/portfolio_filter/{id}',    [WebController::class, 'portfolio_describe'])->name('portfolio_filter');
    Route::get('/portfolio_details/{id}',   [WebController::class, 'portfolio_describe'])->name('portfolio_details');

//    Route::get('/generate-pdf',             [PDFController::class, 'generatePDF'])->name('generate-pdf');
//    Route::get('/downloadCV',               [PDFController::class, 'downloadCV'])->name('downloadCV');
//Route::post('/downloadCV',              [PDFController::class, 'downloadReason'])->name('downloadCV');

    Route::get('/get_data/',                [PDFController::class, 'get_data'])->name('get_data');





Route::get('/generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');
Route::get('/downloadCV', [PDFController::class, 'downloadCV'])->name('downloadCV');
Route::post('/downloadCV', [PDFController::class, 'downloadReason'])->name('downloadReason');




    Route::get('/pusher',                   [WebController::class, 'pusher'])->name('pusher');
    //Route::resource('order',                'OrderController')->only(['store']);
    Route::post('whatsapp', [\App\Http\Controllers\WhatsAppController::class, 'store'])->name('whatsapp.post');
    Route::post('/email/send', [MailController::class, 'index'])->name('maildata');
// ============== Web Routes End =======================================================================================


Route::prefix('admin')->middleware(['auth', 'verified'])->group(function ()
{
    Route::get('/', function () {return redirect()->route('dashboard');});
    Route::get('/dashboard',                [DashboardController::class, 'dashboard'])
        ->middleware(['auth', 'verified'])
        ->name('dashboard');

    //rap2hpoutre/laravel-log-viewer package routes
    //==================================================================================================================
    Route::get('logs', [\App\Http\Controllers\Logs\LogController::class, 'index'])->name('log.viewer');
    Route::get('logs/frame', [\App\Http\Controllers\Logs\LogController::class, 'showLogs'])->name('log.viewer.frame');
    //==================================================================================================================

    //================================== User All Routes ===============================================================
    Route::get('/academic-dtails',          [AcademicQualification::class, 'index'])->name('academic-dtails');
    Route::get('/users-setting/',           [UserController::class, 'setting'])->name('users.setting');


    /*Route::get('/users-list/{id}',          [UserController::class, 'show'])->name('users-list-show');
    Route::get('/users-details/',           [UserController::class, 'edit'])->name('users.details');
    Route::post('/user-update/{id}',        [UserController::class, 'update'])->name('user-update');
    Route::get('/create-user',              [UserController::class, 'create'])->name('create-user');*/

    Route::resource('users', UserController::class)->names([
        'index'   => 'users.index',
        'create'  => 'users.create',
        'store'   => 'users.store',
        'show'    => 'users.show',  // Custom name for show route
        'edit'    => 'users.edit',    // Custom name for edit route
        'update'  => 'users.update',      // Custom name for update route
        'destroy' => 'users.destroy'
    ]);
    // ============================== User All Routes End ==============================================================

    // ============================== Employment History ===============================================================
    Route::resource('employment-history', \App\Http\Controllers\backend\EmploymentHistory\EmploymentHistoryController::class)
        ->only(['index', 'store', 'show', 'create', 'edit', 'update', 'destroy']);

    // ============================== Earning Money ====================================================================
    Route::resource('earning-money', EarningMoneyController::class);
    Route::resource('expansive', ExpansiveController::class);
    Route::get('money-report',[ExpansiveController::class,'report'])->name('money.report');
    Route::get('get-earning-data', [EarningMoneyController::class,'get_data'])->name('get-earning-data');

    // ============================== Email All Routes =================================================================
    Route::get('/email-inbox',              [UserController::class, 'readEmails'])->name('email-inbox');

    Route::get ('/mail-compose',            [MailController::class,'mailform'])->name('mail.compose');
    Route::post ('/mail-send',              [MailController::class,'maildata'])->name('mail.send');
    //   =============================== Calender=======================================================================
    Route::get('/fullcalender',             [EventsController::class, 'index'])->name('fullcalender');
    Route::post('/store-event',             [EventsController::class, 'store']);
    Route::post('/event-update',            [EventsController::class, 'update']);
    Route::post('/delete-event',            [EventsController::class, 'destroy']);

    //============================= Visitor ============================================================================
    Route::get('visitor' ,                  [DashboardController::class, 'visitor'])->name('visitor');
    Route::get('/visitors/data',            [DashboardController::class, 'getVisitors'])->name('visitors.data');
    //==================================================================================================================

    // =========================== Modules =============================================================================
    Route::resource('modules',ModuleController::class);
    Route::get('modules-data', [ModuleController::class, 'getModules'])->name('modules.data');
    //==================================================================================================================
});

require __DIR__.'/auth.php';
