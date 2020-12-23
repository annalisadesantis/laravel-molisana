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
})->name("homepage");

Route::get('/prodotti', function () {
    $array_pasta = config("pasta");

    $collection_pasta = collect($array_pasta);
    $pasta_lunga = $collection_pasta->where("tipo", "lunga");
    $pasta_corta = $collection_pasta->where("tipo", "corta");
    $pasta_cortissima = $collection_pasta->where("tipo", "cortissima");

    $data = [
        "formati" => [
            "lunghe" => $pasta_lunga,
            "corte" => $pasta_corta,
            "cortissime" => $pasta_cortissima
        ]
    ];
    return view('prodotti', $data);
})->name("pagina_prodotti");

Route::get('/dettagli-prodotto/{id}', function($id) {
    $array_pasta = config("pasta");
    $prodotto = $array_pasta[$id];

    $data = [
        "formato" => $prodotto
    ];
    return view('dettagli', $data);
})->name("pagina_dettagli");

Route::get('/news', function () {
    return view('news');
})->name("pagina_news");
