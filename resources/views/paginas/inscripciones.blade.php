@extends('layouts.app')

@section('title', 'Inscripciones JNE')

@section('content')
<div class="relative w-full h-auto bg-white overflow-hidden">
    {{-- CAMBIO: Añadido 'hidden md:block' para ocultar en móviles y tablets, y mostrar en desktop --}}
    <div class="absolute top-0 right-0 h-full hidden lg:block w-[35%]" style="background-color: #e58622;"></div>

    <div class="relative z-10 max-w-8xl mx-auto px-2 md:px-8 py-8 lg:px-40 lg:pt-10">
        <div
            class="w-full shadow-none rounded-none p-4 md:p-10 flex flex-col lg:flex-row items-center lg:items-start gap-6 lg:gap-8 bg-[#FFFFF00]">

            <div class="w-full lg:w-2/3 flex justify-center items-center order-1 lg:order-2">
                <img src="{{ asset('/DnefDocumentos/public/img/VOLUNTARIADO/FOTO 3.png') }}" alt="Decoración"
                    class="object-contain max-h-[25rem] md:max-h-[35rem] lg:max-h-[52rem] w-full lg:w-auto p-5 lg:pt-6">
            </div>

            <div
                class="mt-0 lg:mt-24 w-full lg:w-1/3 flex flex-col justify-center items-center lg:items-end order-2 lg:order-1 text-center lg:text-left">
                <div>
                    <h1 class="text-3xl md:text-5xl font-extrabold mb-4 md:mb-8 leading-tight" style="color: #e58622;">
                        INSCRIPCIONES<br>
                        VOLUNTARIADO
                    </h1>
                    <p class="text-base md:text-2xl text-[#333] leading-snug mt-2 px-2 md:px-0">
                        Sé parte del Voluntariado JNE, una iniciativa de la
                        DNE que impulsa el compromiso ciudadano, la
                        formación democrática y la igualdad política desde
                        la acción. <br><br> <strong>Pueden participar:</strong><br>
                        Jóvenes, adultos y personas con discapacidad.
                        No necesitas experiencia previa, solo compromiso.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Espacio entre franjas -->
<div class="h-12 bg-transparent"></div>

<div class="w-full bg-gray-100 py-18">
    <div class="container mx-auto px-4 text-center">

        <div class="flex flex-col items-center gap-16 text-gray-700">

            <h2 class="text-2xl font-bold uppercase tracking-wider text-gray-500 md:text-3xl">
                ¿QUIERES SER PARTE DEL PRÓXIMO VOLUNTARIADO?
            </h2>

            <p class="font-semibold text-lg pt-8 text-xl">
                Escríbenos a
                <a href="mailto:voluntariado@jne.gob.pe" class=" text-gray-900 hover:underline">
                    voluntariado@jne.gob.pe
                </a>
            </p>

            <div class="flex flex-col gap-6 pt-6 md:flex-row md:gap-12">
                <div class="text-lg flex flex-col gap-3">
                    <p class="font-semibold">Horario de atención:</p>
                    <p>Lunes a Viernes de 8:30 a.m. - 4:30 p.m.</p>
                </div>

                <div class="text-lg flex flex-col gap-3">
                    <p class="font-semibold">Teléfono:</p>
                    <p>(511) 311 - 1700 - Anexo 1069</p>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- Espacio entre franjas -->
<div class="h-12 bg-transparent"></div>
@endsection