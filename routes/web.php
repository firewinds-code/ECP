<?php

use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\JobCardController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageTranslationController;
use App\Http\Controllers\PdfExtract;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;


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

Route::get('clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');
    Artisan::call('route:clear');
    return "Cleared!";
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });


    ############################ Dashboard Routes ###############################
    Route::get('/dashboard', [UserController::class, 'show'])->name('dashboard');

    ############################ Manage User Routes ###############################
    Route::get('manageuser/list', [ManageUserController::class, 'list'])->name('manageuser.list')->middleware('admin');
    Route::get('manageuser/add', [ManageUserController::class, 'add'])->name('manageuser.add')->middleware('admin');
    Route::post('/sambhag', [ManageUserController::class, 'sambhag'])->name('sambhag');
    Route::post('/zila', [ManageUserController::class, 'zila'])->name('zila');
    Route::post('/booth', [ManageUserController::class, 'booth'])->name('booth');
    Route::post('/vidhan', [ManageUserController::class, 'vidhan'])->name('vidhan');
    Route::post('/mandal', [ManageUserController::class, 'mandal'])->name('mandal');

    Route::post('manageuser/postadd', [ManageUserController::class, 'postadd'])->name('manageuser.postadd')->middleware('admin');
    Route::get('manageuser/edit', [ManageUserController::class, 'editUser'])->name('manageuser.edit')->middleware('admin');
    Route::post('manageuser/update', [ManageUserController::class, 'update'])->name('manageuser.update')->middleware('admin');
    Route::get('manageuser/delete', [ManageUserController::class, 'delete'])->name('manageuser.delete')->middleware('admin');
    Route::get('changepassword', [ManageUserController::class, 'changepassword'])->name('changepassword');
    Route::post('updatepassword', [ManageUserController::class, 'updatepassword'])->name('updatepassword');

    ############################ Excel Routes ###############################
    Route::post('/translate-image', [ImageTranslationController::class, 'translate'])->name('translate');
    Route::get('uploaddata/excel', [DataController::class, 'index'])->name('uploaddata.excel')->middleware('admin');
    Route::post('uploaddata/import', [DataController::class, 'import'])->name('uploaddata.import')->middleware('admin');
    Route::get('table-export', [DataController::class, 'export'])->name('table.export')->middleware('admin');

    ############################ Report Routes ###############################
    Route::get('report', [ReportController::class, 'report'])->name('report')->middleware('admin');
    Route::post('daterange', [ReportController::class, 'daterange'])->name('daterange')->middleware('admin');

    ############################ Search Data Routes ###############################
    Route::get('job-card-report', [JobCardController::class, 'jobCard'])->name('job-card-report');
    Route::get('suggestion', [JobCardController::class, 'jobCardSuggestion']);
    Route::post('job-card-report-get', [JobCardController::class, 'jobCardHistory'])->name('data-report-get');
    Route::get('update-status/{slug}', [JobCardController::class, 'updateStatus'])->name('update-status');
    Route::get('search/add', [JobCardController::class, 'add'])->name('search.add');
    Route::post('saveDetails', [JobCardController::class, 'save'])->name('saveDetails');

    Route::post('search/postadd', [JobCardController::class, 'postadd'])->name('search.postadd');
    Route::post('/district', [JobCardController::class, 'district'])->name('district');

    Route::get('pdf', [PdfExtract::class, 'extract'])->name('pdf');
});