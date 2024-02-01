<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');






//route group

Route::prefix('admin')->group(function(){
    //untuk halaman admin
    Route::get('halamanadmin', function () {
        return "<H1>INI UNTUK ADMIN</H1>";
    });
    Route::get('jurusan', [\App\Http\Controllers\JurusanController::class, 'index'])->name('jurusan.index');
});

Route::prefix('user')->group(function(){
    //untuk halaman user
    Route::get('halamanuser', function () {
        return "<H1>INI UNTUK USER</H1>";
    });

});
