<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UploadDataController;
use App\Http\Controllers\SmartSwitchController;
use App\Http\Controllers\ChangePasswordController;



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

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/smart-switch', [SmartSwitchController::class, 'index'])->middleware('auth');

Route::get('/upload-data', [UploadDataController::class, 'index'])->middleware('auth');


// Route::get('data', function () {
//     $request = Http::withHeaders([
//         'X-M2M-Origin' => '2f651c52252e4dce:9c4dac9a4d1b7e01',
//         'Content-Type' => 'application/json;ty=4',
//         'Accept' => 'application/json'
//     ])->get('https://platform.antares.id:8443/~/antares-cse/antares-id/sandoff/sensor1/la')->json();
//     dd($request);
// });


// Route::get('store', function () {
//     $request = Http::withHeaders([
//         'X-M2M-Origin' => 'fe3b96d7daf1a178:3ac0dce97c6a7c85',
//         'Content-Type' => 'application/json;ty=4',
//         'Accept' => 'application/json'
//     ])->post('https://platform.antares.id:8443/~/antares-cse/antares-id/sandoff1/sensor1', [
//         'm2m:cin' => array(
//             'con' => json_encode(
//                 array(
//                     'Name' => 'sensor245',
//                     'Status' => 'off'
//                 )
//             )
//         )
//     ]);
//     dd($request);
// });

// Route::post('/changePassword', [UserController::class, 'update']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::post('/changePassword', [ChangePasswordController::class, 'store']);
