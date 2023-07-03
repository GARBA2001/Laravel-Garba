<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testcontroller; 


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/garba/{userName}', [testcontroller::class,'method']);

Route::get('/farida', [testcontroller::class,'exemple']);
 
Route::get('/accueil', [testcontroller::class,'accueil']);

Route::post('/accueil', [testcontroller::class,'store']);

Route::get('/inscription', [testcontroller::class,'inscription']);

Route::get('/liste', [testcontroller::class,'liste']);


 


