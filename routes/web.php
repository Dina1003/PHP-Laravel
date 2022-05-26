<?php

use App\Http\Controllers\dashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardControllrer;
use App\Models\alamat_cafe;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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
    return view("Home", [
        "title"=> "TRETION",
        "awal"=> "SELAMAT DATANG",
        "image"=> "logo.png"
    ]) ;

});

Route::get('/about', function () {
    return view("About", [
        "title"=> "ABOUT",
        "awal"=> "HEIHO  !!!",
        "nama"=> "SELAMAT DATANG",
        "kp"=> "KELOMPOK 1<br><br>
        1.	Daribsan                (2011523016)<br>
        2.	Daeng Febrino           (2011521019)<br>
        3.	Gita Putri              (2011523011)<br>
        4.	Dina Lathifunnisa A  	(2011521003)<br>
        5.	Jahro Suroya Taurin   	(2011522013)<br>
        ",
        "matkul"=> "Perancangan Basis Data / 02",
        "image" => "logo.png"
    ]) ;

});

Route::get('/login', [LoginController::class, 'login'] )->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'] );
Route::post('/logout', [LogoutController::class, 'logout'] );

Route::get('/register', [RegisterController::class, ('login')] );

Route::post('/register', [RegisterController::class, ('store')] );
Route::get('/dashboard', [DashboardController::class, ('index')] );

// Route::get('/dashboard', function () {
//     return view('Dashboard.dashboard');

// });
