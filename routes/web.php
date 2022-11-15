<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\splistController;
use App\Models\article;

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
// code to fetch data from  the databse
Route::get('/',  [splistController::class, 'index']);

// code to insert data into database
Route::post('/save-List', [splistController::class, 'saveList'])->name('saveList');

// code to delete data from database
Route::get('/delete/{id}', [splistController::class, 'deleteList']);


// code to edit data from database
Route::get('/edit/{id}', [splistController::class, 'editlist']);

// code to update data from database
Route::get('/updateshop', [splistController::class, 'updateshp'])->name('updateshop') ;
