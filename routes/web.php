<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('lihat');
// });

Route::get('/','LihatController@index');
// Route::get('/lihat','LihatController@index')->name('lihat');


// Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('/forget-password', 'ForgotPasswordController@getEmail')->name('forget-password');
Route::post('/forget-password', 'ForgotPasswordController@postEmail'); 
Route::get('/reset-password/{token}', 'ResetPasswordController@getPassword');
Route::post('/reset-password', 'ResetPasswordController@updatePassword');        
 
Route::group(['middleware' => 'auth'], function () {
 
    // Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('/rekaman','RekamanController@index')->name('rekaman');

    Route::get('/rekaman/tambah','RekamanController@tambah');

    Route::get('/rekaman/setting/{id}', 'RekamanController@setting')->name('change.password');;

    Route::post('/rekaman/settingUpdate/{id}', 'RekamanController@settingUpdate');
    //Route::put('/rekaman/settingUpdate/{id}', 'RekamanController@settingUpdate');

    Route::post('/rekaman/simpan','RekamanController@simpan');

    Route::get('/rekaman/edit/{id}', 'RekamanController@edit');

    Route::put('/rekaman/update/{id}', 'RekamanController@update');

    Route::get('/rekaman/hapus/{id}', 'RekamanController@delete');

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
 
});

Route::get('/lihat/wacth/{id}', 'LihatController@see');

Route::get('/lihat/matkul','LihatController@matkul');

Route::get('/lihat/matkul/daskomjar','LihatController@daskomjar');

Route::get('/lihat/matkul/daskom','LihatController@daskom');

Route::get('/lihat/matkul/kalkulus','LihatController@kalkulus');

Route::get('/lihat/matkul/pad','LihatController@pad');

Route::get('/lihat/matkul/pbo','LihatController@pbo');

Route::get('/lihat/matkul/agama','LihatController@agama');

Route::get('/lihat/matkul/pancasila','LihatController@pancasila');

Route::get('/lihat/matkul/statistika','LihatController@statistika');

Route::get('/contac_us','LihatController@contact_us');

Route::post('/contact_us/send', 'LihatController@kirim');

Route::get('/rekaman/cari','RekamanController@cari');