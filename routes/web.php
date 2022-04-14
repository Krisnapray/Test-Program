<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\provinsiController;
use App\Http\Controllers\daerahController;
use App\Http\Controllers\KabupatenController;

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
//     return view('welcome');
// });

Route::get('/',[provinsiController::class,'provinsi'])->name('provinsiData');
Route::get('/addDataProvinsi',[provinsiController::class,'Dataprovinsi'])->name('add-provinsi');
Route::post('/saveDataProvinsi',[provinsiController::class,'SaveDataprovinsi'])->name('save-add-provinsi');
Route::get('/editDataProvinsi/{id}',[provinsiController::class,'EditDataprovinsi'])->name('Edit-provinsi');
Route::post('/saveEditDataProvinsi/{id}',[provinsiController::class,'SaveEditprovinsi'])->name('save-edit-provinsi');
Route::post('/deleteProvinsi/{id}',[provinsiController::class,'Deleteprovinsi'])->name('delete-provinsi');

Route::get('/dataKabupaten',[KabupatenController::class,'kabupaten'])->name('kabupatenData');
Route::get('/addDataKabupaten',[KabupatenController::class,'addkabupaten'])->name('add-kabupaten');
Route::post('/saveDataKabupaten',[KabupatenController::class,'SaveDatakabupaten'])->name('save-add-kabupaten');
Route::get('/editDataKabupaten/{id}',[KabupatenController::class,'EditDatakabupaten'])->name('Edit-kabupaten');
Route::post('/saveEditDataKabupaten/{id}',[KabupatenController::class,'SaveEditkabupaten'])->name('save-edit-kabupaten');
Route::post('/deleteKabupaten/{id}',[KabupatenController::class,'Deletekabupaten'])->name('delete-kabupaten');

Route::get('/dataDaerah',[daerahController::class,'daerah'])->name('daerahData');
Route::get('/addDataDaerah',[daerahController::class,'Datadaerah'])->name('add-daerah');
Route::post('/saveDataDaerah',[daerahController::class,'SaveDatadaerah'])->name('save-daerah');
Route::get('/editDataDaerah/{id}',[daerahController::class,'EditDatadaerah'])->name('edit-daerah');
Route::post('/saveEditDataDaerah/{id}',[daerahController::class,'SaveEditdaerah'])->name('save-edit-Daerah');
Route::post('/deleteDaerah/{id}',[daerahController::class,'Deletedaerah'])->name('delete-daerah');
