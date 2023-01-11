<?php

use App\Http\Controllers\KitapController;
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

Route::get('/', function () {
    return view('welcome');
});


//Route::resource('/kitap',KitapController::class);

Route::controller(KitapController::class)->group(function (){
    Route::get('/kitap/read','read');
    Route::get('/kitap/update/{name}/{id}','update');
    Route::get('/kitap/delete/{id}','delete');
});
