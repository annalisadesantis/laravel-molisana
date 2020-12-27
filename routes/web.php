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

    if ($id >= 0 && $id < count($array_pasta) && is_numeric($id)) {

        // array prodotto corrente
        $prodotto = $array_pasta[$id];

        $prev = $id - 1;
        $next = $id + 1;

        // solo quando deve tornare indietro partendo da 0 entra nel if
        if ($id == 0) {
            $prev = count($array_pasta) - 1;
            //  prev = 12 - 1 (ovvero 11)
        }

        // solo quando arriva alla fine partendo da 11 entra nel if
        if ($id == count($array_pasta) - 1) {
            //  id == 12 - 1 (ovvero 11)
            $next = 0;
            // next deve tornare indietro a 0
        }

        $data = [
            "prodotti" => $array_pasta,
            "formato" => $prodotto,
            "prev" => $prev,
            "next" => $next
        ];

        return view('dettagli', $data);
    }

})->name("pagina_dettagli");


Route::get('/news', function () {
    return view('news');
})->name("pagina_news");
