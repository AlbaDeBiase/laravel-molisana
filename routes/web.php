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
    $collection_pasta = collect($array_pasta);
    $pasta_lunga = $collection_pasta->where('tipo', 'lunga');
    $pasta_corta = $collection_pasta->where('tipo', 'corta');
    $pasta_cortissima = $collection_pasta->where('tipo', 'cortissima');

    $data = [
        'formati' => [
            'Le lunghe'=>$pasta_lunga,
            'Le corte'=>$pasta_corta,
            'Le cortissime'=>$pasta_cortissima
            ]
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
