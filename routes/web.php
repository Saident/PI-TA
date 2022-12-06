<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseController;

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

Route::post('/', [FirebaseController::class, 'create']);
Route::get('/', [FirebaseController::class, 'index']);
Route::put('/', [FirebaseController::class, 'edit']);
Route::delete('/', [FirebaseController::class, 'delete']);

// Route::get('/', function () {
//     return view('welcome');
// });
