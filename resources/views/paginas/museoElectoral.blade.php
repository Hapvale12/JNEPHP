@extends('layouts.app')

@section('title', 'Voto Informado')

@section('content')

    <!-- cabecera -->
    <div class="relative w-full h-auto bg-white overflow-hidden">
        <div class="absolute top-0 right-0 h-full w-[40%] bg-[#d3aa72] hidden lg:block"></div>

        <div class="relative z-10 max-w-8xl mt-8 mx-auto px-2 md:px-38 pt-8
                bg-[#d3aa72] md:bg-transparent">
            {{-- Fondo color solo en móviles, transparente en tablet y desktop --}}
            <div class="w-full shadow-none rounded-none p-6 md:p-10 flex flex-col lg:flex-row items-stretch gap-6">
                {{-- Eliminado bg-[#FFFFF00] --}}

                <div class="w-full lg:w-2/3 flex justify-center items-end order-1 lg:order-2">
                    <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/MUSEO.jpg') }}" alt="Decoración" class="object-contain"
                        style="max-height: 52rem; margin-top: 1rem;">
                </div>

                <div class="w-full lg:w-1/3 flex items-end order-2 lg:order-1">
                    <div class="pb-4 pl-2">
                        {{-- Título: Blanco en móvil, #d3aa72 en tablet y desktop --}}
                        <h1 class="text-3xl md:text-5xl font-extrabold mb-4 leading-tight text-white md:text-[#d3aa72]">
                            ¡VIVE LA<br>
                            HISTORIA DE LA<br>
                            DEMOCRACIA!
                        </h1>
                        {{-- Párrafo: Blanco en móvil, #333 en tablet y desktop --}}
                        <p class="text-semibold md:text-2xl leading-snug text-white md:text-[#333]">
                            Conoce el Museo Electoral y de la
                            Democracia, un espacio interactivo
                            donde la historia electoral, los valores
                            democráticos y la participación ciudadana cobran vida.<br><br>
                            Docentes, estudiantes y ciudadanía
                            en general, están invitados a
                            explorar y aprender de manera
                            didáctica e inclusiva.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="max-w-6xl mx-auto mt-6 px-4 py-6 flex flex-col md:flex-col lg:flex-row items-center md:items-start gap-6 lg:gap-16 lg:pb-16"> {{-- Aumentado el gap para desktop (lg:gap-16) --}}

    <div class="w-full md:w-3/4 lg:w-1/4 flex justify-center items-center mx-auto md:mb-6 lg:mb-0">
        <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/botones-museo.png') }}" alt="Botones Museo"
            class="w-full object-contain max-h-48 md:max-h-[300px] lg:max-h-full">
    </div>

    <div class="w-full md:w-3/4 lg:w-3/4 flex flex-col md:flex-col lg:flex-row gap-4 justify-center items-center md:items-start mx-auto pt-4 md:pt-0">

        <a href="https://museoelectoral.jne.gob.pe/visita2/index.html" target="_blank" class="w-2/3 sm:w-2/3 md:w-2/3 lg:w-full mx-auto">
            <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/1Mesa de trabajo 33 copia@4x-8.png') }}"
                alt="Botón visita presencial" class="w-full h-auto object-contain">
        </a>

        <a href="https://museoelectoral.jne.gob.pe/#contacto" target="_blank" class="w-2/3 sm:w-1/2 md:w-2/3 lg:w-full mx-auto">
            <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/1Mesa de trabajo 33@4x-8.png') }}" alt="Botón visita virtual"
                class="w-full h-auto object-contain">
        </a>

    </div>
</div>

@endsection
