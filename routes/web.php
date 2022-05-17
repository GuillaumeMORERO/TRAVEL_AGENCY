<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\VoyageController::class, 'getVoyages'])->name('getVoyages');
Route::post('/postVoyage', [App\Http\Controllers\VoyageController::class, 'postVoyage'])->name('postVoyage');
Route::get('/delVoyage/{id}', [App\Http\Controllers\VoyageController::class, 'delVoyage'])->name('delVoyage');
Route::post('/addEtape', [App\Http\Controllers\VoyageController::class, 'addEtape'])->name('addEtape');
Route::post('/deleteEtape', [App\Http\Controllers\VoyageController::class, 'deleteEtape'])->name('deleteEtape');


