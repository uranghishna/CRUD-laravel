<?php

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

Route::get('/ViewData', 'C_Mahasiswa@ViewData');
Route::post('/BuatData', 'C_Mahasiswa@BuatData');
$router->put('/EditData/{id}', 'C_Mahasiswa@EditData');
Route::post('/EditDataP/{id}', 'C_Mahasiswa@EditDataP');
Route::delete('/Delete/{id}', 'C_Mahasiswa@Delete');

Route::get('/LihatData', 'C_Karyawan@LihatData');
Route::post('/TambahData', 'C_Karyawan@TambahData');