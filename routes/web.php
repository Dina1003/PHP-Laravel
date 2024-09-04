<?php

use App\Http\Controllers\dashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardControllrer;
use App\Models\alamat_cafe;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminMenuController;
use App\Http\Controllers\AdminEditMController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\WaiterController;
use App\Http\Controllers\HeadController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TotalController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\TambahStokController;
use App\Http\Controllers\EditStokController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\StrukController;
use App\Http\Controllers\HeadresController;
use App\Http\Controllers\HeadRestokController;
use App\Http\Controllers\KokiController;
use App\Http\Controllers\KokiOrderController;
use App\Http\Controllers\StaffController;





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

Route::get('/login', [LoginController::class, 'login'] )->name('login');

Route::post('/login', [LoginController::class, 'authenticate'] );

Route::post('/logout', [LogoutController::class, 'logout'] );

Route::get('/register', [RegisterController::class, ('login')] );

Route::post('/register', [RegisterController::class, ('store')] );
// Route::get('/dashboard', [DashboardController::class, ('index')] );
// Route::resource('/dashboard', DashboardController::class);
// Route::get('/tambah', [AdminCreateController::class, ('index')] );
// Route::post('/tambah', [AdminCreateController::class, ('store')] );
Route::resource('/dashboard', DashboardController::class);
Route::resource('/time', WaiterController::class );
Route::resource('/tambah', AdminMenuController::class);
Route::resource('/stok', StokController::class);
// Route::resource('/editstok', EditStokController::class );
Route::resource('/Headtambahstok', TambahStokController::class );
// Route::resource('/restok', RestokController::class);
Route::resource('/pesanan', PesanController::class);
Route::resource('/edit', AdminEditMController::class );
Route::resource('/TRETION', WelcomeController::class);
Route::resource('/waiter', WaiterController::class);
Route::resource('/head', HeadresController::class);
Route::resource('/transaksi', TransaksiController::class);
Route::resource('/transaksifiks', TotalController::class);
Route::resource('/pembayaran', PembayaranController::class);
Route::resource('/struk', StrukController::class);
Route::resource('/restok', HeadRestokController::class);


//admin
Route::get('/editmenu/{id}', [AdminEditMController::class, 'edit']);
Route::post('/updatemenu/{id}', [AdminEditMController::class, 'updatestok']);
Route::get('/editstok/{id}', [StokController::class, 'edit']);
Route::post('/ubahstok/{id}', [StokController::class, 'updatestok']);
Route::get('/delete/{id}', [StokController::class, 'hapusstok']);

// head
Route::resource('/kelolarestok', HeadresController::class);
Route::get('/Headedit/{id}', [HeadresController::class, 'edit']);
Route::post('/updatestok/{id}', [HeadresController::class, 'updatestok']);
Route::get('/hapusdata/{id}', [HeadRestokController::class, 'hapus']);

// Route::get('/hapusstok/{id}', [HeadresController::class, 'hapusstok']);

// Route::resource('/time', WaiterController::class );

//koki
Route::resource('/koki', KokiController::class);
Route::resource('/req', KokiOrderController::class);
Route::get('/ready/{id}', [KokiOrderController::class, 'hapus']);
Route::get('/pilih/{id}', [KokiOrderController::class, 'edit']);

//staff
Route::resource('/staff', StaffController::class);
Route::get('/ambil/{id}', [StaffController::class, 'edit']);
Route::post('/update/{id}', [StaffController::class, 'updatestok']);
Route::get('/terima/{id}', [StaffController::class, 'hapus']);

//transaksi
Route::get('/pesan/{id}', [TransaksiController::class, 'pesan']);
Route::post('/orderpesanan/{id}', [TransaksiController::class, 'store']);
Route::get('/hapuspesanan/{id}', [TransaksiController::class, 'destroy']);

// Route::get('/dashboard', function () {
//     return view('Dashboard.dashboard');

// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
