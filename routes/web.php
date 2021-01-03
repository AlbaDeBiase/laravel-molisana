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
    return view('home');
});

Route::get('/prodotti', function () {
    $array_pasta = config('pasta');
    $data = [
        'formati' => $array_pasta
    ];
    // dd($data);
    return view('prodotti', $data);
})->name('prodotti');

Route::get('/dettagli/{id}', function ($id) {
    $array_pasta=config('pasta');
    $prodotto= $array_pasta[$id];
    $data = [
        'formato' => $prodotto
    ];
    // dd($prodotto);
    return view('dettagli',$data);
})->name('dettagli');


Route::get('/news', function () {
    return view('news');
})->name('news');
