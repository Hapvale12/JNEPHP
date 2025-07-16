@extends('layouts.app')

@section('title', 'DNE')

@section('content')
    <section class="text-center">
        <!-- Fondo -->
        <div class="relative bg-cover bg-center bg-no-repeat w-full min-h-screen"
            style="background-image: url('{{ asset('/DnefDocumentos/public/img/FONDO-HOME.png') }}');">

            <!-- Contenedor principal -->
            <div class="relative max-w-6xl mx-auto px-4 pt-40 pb-16 md:py-20">

                <!-- Título -->
                <h2 class="text-2xl md:text-4xl font-extrabold text-[#666666] py-6 mb-14">
                    APRENDE, PARTICIPA Y TRANSFORMA
                </h2>

                <!-- Layout principal -->
                <div class="flex flex-col lg:flex-row gap-6 items-stretch h-auto lg:h-[32rem]"> {{-- CAMBIO CLAVE AQUÍ: md:flex-row a lg:flex-row y md:h-[32rem] a lg:h-[32rem] --}}

    <div class="w-full lg:w-1/2 h-full"> {{-- CAMBIO CLAVE AQUÍ: md:w-1/2 a lg:w-1/2 --}}
        <img src="/DnefDocumentos/public/img/home_chicos.png" alt="Imagen principal" class="w-full h-full object-cover">
    </div>

    <div class="w-full lg:w-1/2 grid grid-cols-2 grid-rows-2 gap-4 h-full"> {{-- CAMBIO CLAVE AQUÍ: md:w-1/2 a lg:w-1/2 --}}
        <a href="{{ url('/lineas-de-trabajo/igualdadPolitica') }}"
            class="block w-full h-full overflow-hidden transition-opacity duration-300 hover:opacity-80 focus:opacity-70 active:opacity-70">
            <img src="{{ asset('/DnefDocumentos/public/img/Mesa de trabajo 1 copia.png') }}" alt="Imagen 1"
                class="w-full h-full object-cover">
        </a>

        <a href="{{ url('/lineas-de-trabajo/votoInformado') }}"
            class="block w-full h-full overflow-hidden transition-opacity duration-300 hover:opacity-80 focus:opacity-70 active:opacity-70">
            <img src="{{ asset('/DnefDocumentos/public/img/Mesa de trabajo 2 copia.png') }}" alt="Imagen 2"
                class="w-full h-full object-cover">
        </a>

        <a href="{{ url('/lineas-de-trabajo/voluntariadoJNE') }}"
            class="block w-full h-full overflow-hidden transition-opacity duration-300 hover:opacity-80 focus:opacity-70 active:opacity-70">
            <img src="{{ asset('/DnefDocumentos/public/img/Mesa de trabajo 3 copia.png') }}" alt="Imagen 3"
                class="w-full h-full object-cover">
        </a>

        <a href="{{ url('/lineas-de-trabajo/zonaEducativa') }}"
            class="block w-full h-full overflow-hidden transition-opacity duration-300 hover:opacity-80 focus:opacity-70 active:opacity-70">
            <img src="{{ asset('/DnefDocumentos/public/img/1Mesa de trabajo 1 copia 2.png') }}" alt="Imagen 4"
                class="w-full h-full object-cover">
        </a>
    </div>

</div>

            </div>
        </div>
    </section>
@endsection
