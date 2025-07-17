@extends('layouts.app')

@section('title', 'Voluntariado JNE')

@section('content')


    <x-cabecera titulo="" descripcion="" imagen="/DnefDocumentos/public/img/VOLUNTARIADO/foto 1.png" tamanoTitulo="" tamanoDescripcion=""
        fondoContenido="#FFFFF00" colorFondoDerecha='#e58622' estiloImagen="margin-top: 1rem; max-height: 60rem;"
        margenTopContenido="mt-5" paddingContenido="px-0" paddingContenidoInterno="p-4 md:p-5" />

    <div class="max-w-7xl mx-auto px-0 py-12">
        <div class="flex flex-col md:flex-col lg:flex-row items-center bg-white">

            {{-- CAMBIO CRÍTICO DE ORDEN: El texto ahora va primero en todas las vistas donde se apila --}}
            <div class="md:w-2/2 w-full px-4 py-0 md:pl-12 text-left order-1 lg:order-1">
                {{-- Título solo visible en tablets y computadoras --}}
                <h2 class="hidden md:block text-2xl md:text-5xl font-extrabold text-[#ec7923] mb-12">VOLUNTARIADO</h2>
                <p class="text-justify text-2xl text-gray-600 leading-relaxed pr-0 md:pr-14">
                    El <span class="text-[#ec7923] font-bold">VOLUNTARIADO JUVENIL</span> del Jurado Nacional
                    de Elecciones (JNE)
                    es un espacio organizado de formación ciudadana y de promoción de valores y prácticas cívicas, donde las
                    y los
                    jóvenes contribuyen con el fortalecimiento de la democracia a través de acciones educativas y de
                    sensibilización
                    dirigidas a la ciudadanía. <br><br>
                    Forma parte del Programa Jóvenes de la DNE y realiza labores tanto en periodo electoral como no
                    electoral.
                </p>
            </div>

            {{-- CAMBIO CRÍTICO DE ORDEN: La imagen ahora va después del texto en todas las vistas donde se apila --}}
            <div class="md:w-3/5 w-full order-2 lg:order-2">
                <img src="{{ asset('/DnefDocumentos/public/img/VOLUNTARIADO/FOTO 2.png') }}" alt="Voluntariado JNE"
                    class="p-6 w-full h-auto object-cover">
            </div>

        </div>
    </div>


    <!-- Contenedores de texto -->
    <section class="w-full py-2 px-4 bg-white">
        {{-- Contenedor para Móviles y Tablets (imagen arriba, texto abajo, apilado) --}}
        <div class="flex flex-col items-center gap-y-8 md:gap-y-12 lg:hidden w-full max-w-7xl mx-auto">

            <div class="w-full flex flex-col items-center justify-center">
                <div class="flex justify-center items-center bg-[#e58622] w-full h-[200px] md:h-[300px] p-4 rounded-lg">
                    <img src="{{ asset('/DnefDocumentos/public/img/VOLUNTARIADO/niño2.png') }}" alt="Icono 1" class="max-h-full object-contain">
                </div>
                <div class="bg-[#dcdfdf] w-full p-6 text-left rounded-lg mt-4">
                    <div class="px-2 py-2 md:px-14 md:py-6">
                        <h3 class="text-xl md:text-3xl font-bold text-[#e58622]">Objetivo</h3>
                        <p class="text-gray-700 mt-2 text-justify text-sm md:text-xl">
                            Promover la participación e inclusión de los jóvenes
                            en el campo social y político del país, como actores estratégicos, para la construcción de
                            ciudadanía y fortalecimiento de la democracia a nivel nacional. A partir de acciones públicas,
                            actividades educativas y participación activa en procesos electorales.
                        </p>
                    </div>
                </div>
            </div>

            <div class="w-full flex flex-col items-center justify-center">
                <div class="flex justify-center items-center bg-[#e58622] w-full h-[200px] md:h-[300px] p-4 rounded-lg">
                    <img src="{{ asset('/DnefDocumentos/public/img/VOLUNTARIADO/niña-2.png') }}" alt="Icono 1" class="max-h-full object-contain">
                </div>
                <div class="bg-[#dcdfdf] w-full p-6 text-left rounded-lg mt-4">
                    <div class="px-2 py-2 md:px-14 md:py-0">
                        <h3 class="text-xl md:text-3xl font-bold text-[#e58622]">¿Qué hacemos?</h3>
                        <p class="text-gray-700 mt-2 text-sm md:text-xl">
                            Mantener la información que está y agregar las dos actividades adicionales:
                        </p>
                        <ul
                            class="list-disc list-inside text-justify text-gray-700 mt-4 text-sm md:text-xl leading-relaxed">
                            <li>Apoyar durante las exposiciones itinerantes del Museo Electoral y apoyar en el inventario y
                                catalogación de los bienes culturales.</li>
                            <li>Apoyar en el levantamiento de información relevante para los diagnósticos situacionales que
                                realice el Jurado Nacional de Elecciones.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- Contenedor para Desktop (tu grid original) --}}
        <div
            class="hidden lg:grid grid-cols-[1fr_0.2fr_0.3fr_1fr_1fr_0.2fr_0.3fr_1fr] grid-rows-[0.2fr_2.5fr_0.2fr_2.5fr_0.2fr] gap-y-[15px] gap-x-2 w-full max-w-7xl mx-auto">

            <div class="flex justify-center items-center bg-[#e58622] col-start-1 col-end-4 row-start-1 row-end-4">
                <img src="{{ asset('/DnefDocumentos/public/img/VOLUNTARIADO/niño2.png') }}" alt="Icono 1" class="max-h-68 object-contain">
            </div>

            <div class="bg-[#dcdfdf] col-start-3 col-end-9 row-start-2 row-end-3 p-8 text-left">
                <div class="px-14 py-6">
                    <h3 class="text-3xl font-bold text-[#e58622]">Objetivo</h3>
                    <p class="text-gray-700 mt-2 text-justify text-xl">Promover la participación e inclusión de los jóvenes
                        en el campo
                        social y político del
                        país, como actores estratégicos, para la construcción de ciudadanía y fortalecimiento
                        de la democracia a nivel nacional. A partir de acciones públicas, actividades
                        educativas y participación activa en procesos electorales.
                    </p>
                </div>
            </div>

            <div class="flex justify-center items-center bg-[#e58622] col-start-6 col-end-9 row-start-3 row-end-6">
                <img src="{{ asset('/DnefDocumentos/public/img/VOLUNTARIADO/niña-2.png') }}" alt="Icono 1" class="max-h-68 object-contain">
            </div>

            <div class="bg-[#dcdfdf] col-start-1 col-end-7 row-start-4 row-end-5 p-8 text-left">
                <div class="px-14">
                    <h3 class="text-3xl font-bold text-[#e58622]">¿Qué hacemos?</h3>
                    <p class="text-gray-700 mt-2 text-xl">
                        Mantener la información que está y agregar las dos actividades adicionales:
                    </p>
                    <ul class="list-disc list-inside text-justify text-gray-700 mt-4 text-xl leading-relaxed">
                        <li>Apoyar durante las exposiciones itinerantes del Museo Electoral y apoyar en el inventario y
                            catalogación de los bienes culturales.</li>
                        <li>Apoyar en el levantamiento de información relevante para los diagnósticos situacionales que
                            realice el Jurado Nacional de Elecciones.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Espacio entre franjas -->
    <div class="h-12 bg-transparent"></div>

    <div class="w-full bg-[#e58622] p-6 md:p-10 lg:p-18"> {{-- Ajustado padding para responsive --}}

    {{-- Contenedor para Móviles y Tablets (apilado verticalmente) --}}
    <div class="flex flex-col items-center gap-y-8 md:gap-y-12 lg:hidden w-full max-w-7xl mx-auto">

        <div class="w-full bg-[#e7e7e7] p-4 flex flex-col items-center text-center rounded-lg"> {{-- Añadido w-full y rounded --}}
            <img src="{{ asset('/DnefDocumentos/public/img/VOLUNTARIADO/1Mesa de trabajo 17@4x-8.png') }}" alt="Imagen 1"
                class="max-w-[180px] md:max-w-[220px] max-h-[180px] md:max-h-[220px] rounded-md mb-4 object-contain"> {{-- Ajustado tamaño de imagen --}}

            <p class="text-xl md:text-2xl font-extrabold text-gray-800 mb-4 px-4">¿Dónde intervenimos?</p> {{-- Ajustado tamaño y padding --}}

            <p class="text-lg md:text-xl font-semi-bold text-gray-800 px-4">Presencia Nacional</p> {{-- Ajustado tamaño y padding --}}
            <img src="{{ asset('/DnefDocumentos/public/img/VOLUNTARIADO/rayita.png') }}" alt="Rayita" class="w-16 my-2"> {{-- Ajustado tamaño --}}

            <p class="text-lg md:text-xl font-semi-bold text-gray-800 px-4">Oficinas Desconcentradas
                en cada región.</p>
            <img src="{{ asset('/DnefDocumentos/public/img/VOLUNTARIADO/rayita.png') }}" alt="Rayita" class="w-16 my-2">

            <p class="text-lg md:text-xl font-semi-bold text-gray-800 px-4">Elecciones Generales 2026,
                los voluntarios intervienen
                en las sedes activas para las
                acciones educativas y
                públicas.</p>
        </div>

        <div class="w-full bg-[#e7e7e7] p-4 flex flex-col items-center text-center rounded-lg">
            <img src="{{ asset('/DnefDocumentos/public/img/VOLUNTARIADO/1Mesa de trabajo 17 copia@4x-8.png') }}" alt="Imagen 2"
                class="max-w-[180px] md:max-w-[220px] max-h-[180px] md:max-h-[220px] rounded-md mb-4 object-contain">
            <p class="text-xl md:text-2xl font-extrabold text-gray-800 mb-4 px-4">¿Cuál es la duración del
                Voluntariado?</p>
            <p class="text-lg md:text-xl font-semi-bold text-gray-800 px-4 mb-4">El ciclo del Programa tiene
                una duración de 9 meses,
                comprendidos entre abril y
                diciembre de cada año.</p>
        </div>

        <div class="w-full bg-[#e7e7e7] p-4 flex flex-col items-center text-center rounded-lg">
            <img src="{{ asset('/DnefDocumentos/public/img/VOLUNTARIADO/1Mesa de trabajo 17 copia 2@4x-8.png') }}" alt="Imagen 3"
                class="max-w-[180px] md:max-w-[220px] max-h-[180px] md:max-h-[220px] rounded-md mb-4 object-contain">
            <p class="text-xl md:text-2xl font-extrabold text-gray-800 mb-4 px-4">Convocatoria</p>
            <div class="px-4 text-gray-800"> {{-- Ajustado padding --}}
                <p class="text-lg md:text-xl font-semi-bold mb-4">
                    El Programa incluye tres etapas: Convocatoria, Selección y Participación.
                </p>
                <p class="text-lg md:text-xl font-semi-bold mb-4">
                    <span class="font-bold">La convocatoria</span> se realiza cada año entre marzo y abril.
                </p>
                <p class="text-lg md:text-xl font-semi-bold">
                    <span class="font-bold">La próxima convocatoria</span> próxima convocatoria será en el año 2026, con
                    miras a las Elecciones Generales.
                </p>
            </div>
        </div>

        <div class="bg-[#be1717] w-full flex flex-col items-center justify-center text-center p-6 relative rounded-lg">
            <p class="bg-[#be1717] text-xl md:text-2xl font-extrabold text-white mb-4"> {{-- Ajustado tamaño texto --}}
                ¿TE APASIONA LA DEMOCRACIA,<br>
                LA PARTICIPACIÓN CIUDADANA<br>
                Y EL CAMBIO SOCIAL?
            </p>

            <div class="relative inline-block">
                <a href="{{ url('/lineas-de-trabajo/voluntariadoJNE/inscripciones') }}" target="_blank"
                    class="bg-white text-[#6f6f6e] font-bold px-6 py-2 md:px-8 md:py-3 rounded-full shadow-md hover:bg-[#e58622] hover:text-white transition-all duration-300 text-base md:text-lg"> {{-- Ajustado tamaño botón --}}
                    INSCRÍBETE AQUÍ
                </a>
                <div class="absolute -top-1 -right-6 z-10">
                    <img src="{{ asset('/DnefDocumentos/public/img/VOTO INFORMADO/1Mesa de trabajo 9@4x-8.png') }}" alt="Ícono decorativo"
                        class="w-8 h-8 md:w-10 md:h-10"> {{-- Ajustado tamaño ícono --}}
                </div>
            </div>
        </div>

    </div>

    {{-- Contenedor para Desktop (tu grid original) --}}
    <div class="hidden lg:grid grid-cols-[1fr_1fr_1fr_1fr_1fr_1fr] grid-rows-4 gap-6 w-full max-w-7xl mx-auto">

        <div class="mx-3 col-span-2 row-span-5 flex flex-col items-center text-center bg-[#e7e7e7] p-4">
            <img src="{{ asset('/DnefDocumentos/public/img/VOLUNTARIADO/1Mesa de trabajo 17@4x-8.png') }}" alt="Imagen 1"
                class="max-w-[220px] max-h-[220px] rounded-md mb-4">

            <p class="text-2xl font-extrabold text-gray-800 mb-8 px-16">¿Dónde intervenimos?</p>

            <p class="text-2xl font-semi-bold text-gray-800 px-16">Presencia Nacional</p>
            <img src="{{ asset('/DnefDocumentos/public/img/VOLUNTARIADO/rayita.png') }}" alt="Rayita" class="w-20 my-3">

            <p class="text-2xl font-semi-bold text-gray-800 px-16">Oficinas Desconcentradas
                en cada región.</p>
            <img src="{{ asset('/DnefDocumentos/public/img/VOLUNTARIADO/rayita.png') }}" alt="Rayita" class="w-20 my-3">

            <p class="text-2xl font-semi-bold text-gray-800 px-16">Elecciones Generales 2026,
                los voluntarios intervienen
                en las sedes activas para las
                acciones educativas y
                públicas.</p>
        </div>

        <div class="mx-3 col-span-2 row-span-4 col-start-3 flex flex-col items-center text-center bg-[#e7e7e7] p-4">
            <img src="{{ asset('/DnefDocumentos/public/img/VOLUNTARIADO/1Mesa de trabajo 17 copia@4x-8.png') }}" alt="Imagen 2"
                class="max-w-[220px] max-h-[220px] rounded-md mb-4">
            <p class="text-2xl font-extrabold text-gray-800 mb-8 px-10">¿Cuál es la duración del
                Voluntariado?</p>
            <p class="text-2xl font-semi-bold text-gray-800 px-16 mb-10">El ciclo del Programa tiene
                una duración de 9 meses,
                comprendidos entre abril y
                diciembre de cada año.</p>
        </div>

        <div class="mx-3 col-span-2 row-span-5 col-start-5 flex flex-col items-center text-center bg-[#e7e7e7] p-4">
            <img src="{{ asset('/DnefDocumentos/public/img/VOLUNTARIADO/1Mesa de trabajo 17 copia 2@4x-8.png') }}" alt="Imagen 3"
                class="max-w-[220px] max-h-[220px] rounded-md mb-4">
            <p class="text-2xl font-extrabold text-gray-800 mb-8 px-16">Convocatoria</p>
            <div class="px-16 text-gray-800">
                <p class="text-2xl font-semi-bold mb-8">
                    El Programa incluye tres etapas: Convocatoria, Selección y Participación.
                </p>
                <p class="text-2xl font-semi-bold mb-8">
                    <span class="font-bold">La convocatoria</span> se realiza cada año entre marzo y abril.
                </p>
                <p class="text-2xl font-semi-bold">
                    <span class="font-bold">La próxima convocatoria</span> próxima convocatoria será en el año 2026, con
                    miras a las Elecciones Generales.
                </p>
            </div>
        </div>

        <div class="bg-[#be1717] mx-3 col-span-2 col-start-3 row-start-5 flex flex-col items-center justify-center text-center p-6 relative">
            <p class="bg-[#be1717] text-2xl font-extrabold text-white mb-4">
                ¿TE APASIONA LA DEMOCRACIA,<br>
                LA PARTICIPACIÓN CIUDADANA<br>
                Y EL CAMBIO SOCIAL?
            </p>

            <div class="relative inline-block">
                <a href="{{ url('/lineas-de-trabajo/voluntariadoJNE/inscripciones') }}" target="_blank"
                    class="bg-white text-[#6f6f6e] font-bold px-8 py-3 rounded-full shadow-md hover:bg-[#e58622] hover:text-white transition-all duration-300">
                    INSCRÍBETE AQUÍ
                </a>

                <div class="absolute -top-1 -right-6 z-10">
                    <img src="{{ asset('/DnefDocumentos/public/img/VOTO INFORMADO/1Mesa de trabajo 9@4x-8.png') }}" alt="Ícono decorativo"
                        class="w-10 h-10">
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
