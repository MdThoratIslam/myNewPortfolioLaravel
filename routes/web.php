<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebSiteController;
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

Route::get('/', [WebSiteController::class,'index'])->name('web_site.index');
Route::get('/admin', function () {
    return view('backend.pages.dashboard.index');
})->name('admin.index');
