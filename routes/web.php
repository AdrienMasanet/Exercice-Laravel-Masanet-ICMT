<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/parametres', [AdminController::class, 'parameters']);
    Route::get('/comptes', [AdminController::class, 'accountsDataTable']);
    Route::get('/locations', [AdminController::class, 'lendsDataTable']);
    Route::get('/demandes-de-location', [AdminController::class, 'requestsDataTable']);
    Route::get('/ordinateurs', [AdminController::class, 'computersDataTable']);
    Route::get('/composants', [AdminController::class, 'componentsDataTable']);
    Route::get('/marques', [AdminController::class, 'brandsDataTable']);
    Route::get('/reparations', [AdminController::class, 'repairsDataTable']);
    Route::get('/reparateurs', [AdminController::class, 'repairersDataTable']);
});
