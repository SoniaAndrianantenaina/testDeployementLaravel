<?php

use App\Http\Controllers\ContenusController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function(){
//     return view("welcome");
// });

Route::get('/', [ContenusController::class, 'index'])->name('accueil');
Route::get('/moreInfo/{idContenu}', [ContenusController::class, "moreInfo"])->name('moreInfo');

Route::get('/login', function(){
    return view("login");
})->name('login');

Route::get('/verifyLogin', [ContenusController::class, "verifyLogin"])->name("verifyLogin");
