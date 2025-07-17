@extends('layouts.app')

@section('title', 'Elecciones Municipales')

@section('content')

<x-cabecera 
        titulo=""
        descripcion=""
        imagen="/DnefDocumentos/public/img/VOTO INFORMADO/foto 3v.png" 
        tamanoTitulo="" 
        tamanoDescripcion=""
        fondoContenido="#FFFFF00"
        colorFondoDerecha='#be1717' {{-- Ejemplo de fondo blanco --}}
        estiloImagen="margin-top: 1rem; max-height: 60rem;"
        margenTopContenido="mt-5"   
        />

<!-- Espacio entre franjas -->
    <div class="h-5 bg-transparent"></div>

<section class=" bg-white">
    <div class="max-w-7xl mx-auto px-4 md:px-8">
        <img src="{{ asset('/DnefDocumentos/public/img/VOTO INFORMADO/ELECCIONES-MUNICIPALES-1.png') }}" alt="Imagen larga"
             class="w-full h-auto object-contain">
    </div>
</section>

<section class="bg-white">
    <div class="max-w-7xl mx-auto md:px-8">
        <a href="https://portal.jne.gob.pe/portal/Pagina/Ver/975/page/Elecciones-Municipales-Complementarias-2025" target="_blank">
            <img src="{{ asset('/DnefDocumentos/public/img/VOTO INFORMADO/ELECCIONES-MUNICIPALES2.png') }}" alt="Imagen larga"
                 class="w-full h-auto object-contain transition duration-300 hover:brightness-110">
        </a>
    </div>
</section>

<section class="pb-8 bg-white">
    <div class="max-w-7xl mx-auto px-4 md:px-8">
        <img src="{{ asset('/DnefDocumentos/public/img/VOTO INFORMADO/ELECCIONES-MUNICIPALES3.png') }}" alt="Imagen larga"
             class="w-full h-auto object-contain">
    </div>
</section>

@endsection