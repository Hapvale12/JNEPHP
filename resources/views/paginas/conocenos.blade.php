@extends('layouts.app')

@section('title', 'Conócenos')

@section('content')

    <x-cabecera titulo="" descripcion="" imagen="/DnefDocumentos/public/img/imagen 1.png" tamanoTitulo="" tamanoDescripcion=""
        fondoContenido="#FFFFF00" colorFondoDerecha='#c1c1c1' estiloImagen="margin-top: 1rem; max-height: 60rem;"
        margenTopContenido="mt-5" paddingContenido="px-0" paddingContenidoInterno="p-4 md:p-5" />


    <div class="w-full bg-white py-4 md:py-6 lg:py-8">

        <div class="max-w-7xl mx-auto px-4 md:px-8 lg:px-0"> {{-- Ajuste de lg:px-24 a lg:px-28 --}}
            <div class="p-4 md:p-5 lg:p-12 bg-transparent lg:max-w-4xl text-center md:text-left text-relaxed">
                <p class="text-gray-700 text-base md:text-xl lg:text-2xl text-justify leading-relaxed">
                    El Jurado Nacional de Elecciones (JNE) de Perú ha desarrollado
                    un conjunto integral de instrumentos de intervención educativa
                    diseñados para fortalecer la participación democrática y la
                    cultura cívica en el país en el marco de un estado de derecho.
                    <br><br>
                    Estos instrumentos abarcan desde la información básica hasta la
                    participación activa, pasando por la comunicación efectiva y la
                    formación crítica.
                </p>
            </div>
        </div>

    </div>

    <div class="h-4 md:h-6 lg:h-6 bg-transparent"></div>


    <div class="w-full h-auto py-8 md:py-12 lg:h-screen flex items-center justify-center px-4">

        <div class="flex flex-col bg-[#f0f2f3] items-center text-center max-w-5xl w-full p-6 md:p-8">

            <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-[#6f6f6e] pt-6 md:pt-10 mb-6 md:mb-10">
                CICLO DE INTERVENCIÓN EDUCATIVA
            </h2>

            <img src="{{ asset('/DnefDocumentos/public/img/conocenos-diagrama.png') }}" alt="Ciclo de intervención educativa"
                class="w-full max-w-xs md:max-w-md lg:max-w-3xl h-auto">
        </div>
    </div>


    <div class="w-full bg-[#f0f2f3] px-4 py-8 md:py-12 flex items-center justify-center">
        <div class="flex flex-col items-center m-0 md:m-0 lg:m-18">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-[#6f6f6e] text-center pb-8 md:pb-12 lg:pb-20">
                CAMINO HACÍA LA CIUDADANÍA ACTIVA
            </h2>

            <div class="escalera transform scale-75 md:scale-100 lg:scale-150 transform-origin-top lg:mt-16">
                <a href="{{ url('/conocenos/informacion') }}">
                    <x-escalera />
                </a>
            </div>

        </div>
    </div>

    <div class="h-6 md:h-12 lg:h-4 bg-[#f0f2f3]"></div>

    <div class="w-full py-8 md:py-12 px-4 flex flex-col items-center"
        style="background-image: url('{{ asset('/DnefDocumentos/public/img/FONDO-CADENA.png') }}'); background-size: cover; background-position: center;">

        <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-[#6f6f6e] text-center mb-6 mt-10 md:mt-16">
            CADENA DE VALOR
        </h2>
        <div class="overflow-x-auto lg:overflow-x-visible w-full lg:max-w-7xl">
            <div class="tabla min-w-max">
                <x-tabla />
            </div>
        </div>
    </div>
@endsection