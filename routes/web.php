<?php

use App\Http\Controllers\Admin\FelhasznaloController as AdminFelhasznaloController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\KategoriaController;
use App\Http\Controllers\Admin\IphoneController;
use Illuminate\Support\Facades\Auth;
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
    //return view('index');
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','isAdmin'])->group( function () {
    //Route::get('/dashboard', 'Admin/FrontendController@index');
    /* Route::get('/dashboard', function () {
       return view('admin.index');
    }); */

    Route::get('/dashboard', [FrontendController::class, 'index']);

    Route::resource('kategoriak', KategoriaController::class);

    Route::resource('iphones', IphoneController::class);

    Route::resource('felhasznalok', AdminFelhasznaloController::class);

   /*  Route::get('felhasznalok', 'Admin\FelhasznaloController@index');

    Route::get('felhasznalo_hozzaadas', 'Admin\FelhasznaloController@felhasznaloHozzaadas');

    Route::post('felhasznalo_store', [AdminFelhasznaloController::class, 'store']);

    Route::get('felhasznalo_szerkeszt/{id}', [AdminFelhasznaloController::class, 'felhasznaloSzerkeszt']);

    Route::put('felhasznalo_update/{id}', [AdminFelhasznaloController::class, 'update']);

    Route::get('felhasznalo_torol/{id}', [AdminFelhasznaloController::class, 'destroy']); */
});


