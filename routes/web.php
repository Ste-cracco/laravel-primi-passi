<?php

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
    $data = [
        'nome' => 'Stefano',
        'cognome' => 'Cracco',
        'eta' => 26,
        'sport_praticati' => [
            'calcio',
            'tennis',
            'nuoto'
        ]
    ];
    
    return view('homepage', $data);
});

