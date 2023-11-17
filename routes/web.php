<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Master\DaftarMakananMinumanController;
use App\Http\Controllers\Admin\Master\RestoranController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix' => 'admin', 'as' => 'admin.','namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth']],function(){
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::group(['prefix' => 'master', 'as' => 'master.','namespace' => 'Master', 'middleware' => ['auth']],function(){
         Route::resource('daftar_makanan_minuman', 'DaftarMakananMinumanController');
         Route::group(['prefix' => 'restoran', 'as' => 'restoran.','namespace' => 'Master', 'middleware' => ['auth']],function(){
                Route::get('',[RestoranController::class,'index'])->name('index');
                Route::put('',[RestoranController::class,'update'])->name('update');
         });
    });
    
    Route::group(['prefix' => 'transaksi', 'as' => 'transaksi.','middleware' => ['auth']],function(){
        Route::get('',[TransaksiController::class,'index'])->name('index');
        Route::get('create',[TransaksiController::class,'create'])->name('create');
        Route::get('store',[TransaksiController::class,'store'])->name('store');
        Route::get('destroy/{}id',[TransaksiController::class,'destroy'])->name('destroy');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
