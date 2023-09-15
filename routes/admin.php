<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;

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


Route::group(['namespace'=>'Admin', 'prefix'=>'admin', 'middleware'=>'auth:admin'], function(){
    Route::get('/',[DashboardController::class,'index'])->name('admin.dashboard');
    Route::get('/logout',[LoginController::class,'logout'])->name('admin.logout');


    Route::get('/Gestion',[TestController::class,'index'])->name('Gestion_index');
});


Route::group(['namespace'=>'Admin', 'prefix'=>'admin','middleware'=>'guest:admin'], function(){
    Route::get('login',[LoginController::class,'get_login_view'])->name('admin.getlogin');
    Route::post('login',[LoginController::class,'login'])->name('admin.login');

});

// Route::get('/', function () {
//     return view('admin.auth.login');
// });




