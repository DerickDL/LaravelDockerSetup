<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

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
    // return view('welcome');
    $hasCache = false;
    $oData = Cache::store('redis')->get('data');
    echo 'Data from initial cache ' . $oData;
    if (Cache::store('redis')->has('data')) {
        echo 'Data from cache ' . $oData;
        $hasCache = true;
    } else {
        $oData = Cache::store('redis')->put('data', "CACHE DATA PO!", 3600);
    }
});
