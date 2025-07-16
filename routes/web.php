<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('paginas.home');
})->name('home');

Route::get('/conocenos', function () {
    return view('paginas.conocenos');
})->name('conocenos');

Route::get('/conocenos/informacion', function () {
    return view('paginas.informacion');
})->name('Informacion');

Route::get('/lineas-de-trabajo', function () {
    return view('paginas.LineasTrabajo');
})->name('lineas-de-trabajo');

Route::get('/noticias-y-eventos', function () {
    return view('paginas.NoticiasEventos');
})->name('noticias-y-eventos');

Route::get('/noticias-y-eventos/JNE1', function () {
    return view('paginas.noticia1');
})->name('Noticiero JNE');

Route::get('/noticias-y-eventos/JNE2', function () {
    return view('paginas.noticia2');
})->name('Noticiero JNE');

Route::get('/noticias-y-eventos/JNE3', function () {
    return view('paginas.noticia3');
})->name('Noticiero JNE');

Route::get('/contactenos', function () {
    return view('paginas.contactenos');
})->name('contactenos');

Route::get('/lineas-de-trabajo/voluntariadoJNE', function () {
    return view('paginas.voluntariadoJNE');
})->name('voluntariado-JNE');

Route::get('/lineas-de-trabajo/voluntariadoJNE/inscripciones', function () {
    return view('paginas.inscripciones');
})->name('inscripciones');

Route::get('/lineas-de-trabajo/igualdadPolitica', function () {
    return view('paginas.igualdadPolitica');
})->name('igualdad-Politica');

Route::get('/lineas-de-trabajo/votoInformado', function () {
    return view('paginas.votoInformado');
})->name('voto-Informado');

Route::get('/lineas-de-trabajo/votoInformado/eleccionesMunicipales', function () {
    return view('paginas.eleccionesMunicipales');
})->name('elecciones-municipales');

Route::get('/lineas-de-trabajo/zonaEducativa', function () {
    return view('paginas.zonaEducativa');
})->name('zona-Educativa');

Route::get('/lineas-de-trabajo/zonaEducativa/museoElectoral', function () {
    return view('paginas.museoElectoral');
})->name('museo-Electoral');

Route::get('/contactenos', function () {
    return view('paginas.contactenos');
})->name('contactenos');

Route::get('/lineas-de-trabajo/zonaEducativa/recursosPedagogicos', function () {
    return view('paginas.recursosPedagogicos');
})->name('recursos-Pedagogicos');


Route::get('/contador', function () {
    $file = storage_path('app/contador.txt');

    if (!file_exists($file)) {
        file_put_contents($file, 0);
    }

    $count = (int) file_get_contents($file);
    return response()->json(['count' => $count]);
});

Route::post('/contador', function () {
    $file = storage_path('app/contador.txt');

    if (!file_exists($file)) {
        file_put_contents($file, 0);
    }

    $count = (int) file_get_contents($file);

    if ($count < 10000) {
        $count++;
        file_put_contents($file, $count);
    }

    return response()->json(['count' => $count]);
});
