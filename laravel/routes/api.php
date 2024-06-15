<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('migration', function () {
    return DB::table('migrations')->get();
});

Route::namespace('App\Http\Controllers\Api')->group(function () {
    Route::get('abstract-factory', 'AbstractFactoryController@index');

    Route::get('bridge', 'BridgeController@index');
    Route::get('bridge/info', 'BridgeController@getInfoList');
});
