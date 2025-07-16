@extends('layouts.app')

@section('title', 'Voto Informado')

@section('content')

    <div class="relative w-full h-auto bg-white overflow-hidden">
        {{-- Fondo derecho para desktop --}}
        <div class="absolute top-0 right-0 h-full w-[40%] hidden lg:block" style="background-color: #b31717;"></div>

        {{-- Ajuste de padding general y pt para todos los tamaños --}}
        <div class="relative z-10 max-w-8xl mt-8 mx-auto px-4 md:px-8 lg:px-40 pt-10">
            {{-- Contenedor principal de la sección --}}
            <div
                class="w-full shadow-none rounded-none p-6 md:p-10 flex flex-col lg:flex-row items-center gap-6 bg-[#FFFFF00]">

                {{-- Contenedor del texto --}}
                <div
                    class="mt-4 md:mt-8 lg:mt-24 w-full lg:w-1/3 flex flex-col items-center lg:items-start text-center lg:text-left order-2 lg:order-1">
                    <div>
                        <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold mb-6 md:mb-8 lg:mb-12 leading-tight"
                            style="color: #b31717;">
                            ¿QUÉ ES EL PROGRAMA VOTO INFORMADO?
                        </h1>
                        <p class="text-base md:text-xl lg:text-2xl text-[#333] leading-snug mt-2">
                            El Programa Voto Informado comprometido con una democracia más informada y participativa,
                            desarrolla acciones clave orientadas a sus públicos objetivos: las organizaciones políticas y
                            la ciudadanía. <br> Estas acciones responden a dos miradas estratégicas:
                        </p>
                    </div>
                </div>

                {{-- Contenedor de la imagen --}}
                <div
                    class="relative w-full lg:w-2/3 flex justify-center items-center lg:items-end lg:self-end order-1 lg:order-2">

                    {{-- left-[20%] o left-[30%] para que empiece un poco a la izquierda de la imagen --}}

                    <img src="{{ asset('img/VOTO INFORMADO/foto 1v.png') }}" alt="Decoración"
                        class="object-contain max-h-[15rem] md:max-h-[25rem] lg:max-h-[52rem] w-[100%] lg:w-auto relative z-10 p-0 md:p-6" />
                    {{-- La imagen tiene z-10 para estar sobre el fondo --}}
                </div>
            </div>
        </div>
    </div>

    <section class="text-gray-600 body-font overflow-hidden">
        {{-- Reducimos el padding-top del contenedor principal --}}
        <div class="max-w-8xl mx-auto px-4 md:px-50 py-16"> {{-- CAMBIO: py-24 a py-16 --}}
            <div class="flex items-center flex-wrap">
                <img alt="un banner"
                    class="lg:w-1/2 w-full h-auto md:max-h-[35rem] object-contain lg:object-cover object-center rounded"
                    {{-- CAMBIO: Añadido md:max-h-[35rem] --}} src="{{ asset('img/VOTO INFORMADO/foto 2v.png') }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <p class="leading-relaxed text-justify text-semibold text-2xl">
                        • <strong>Una mirada político-electoral:</strong> Busca generar
                        consensos a favor de la ciudadanía a través de la
                        producción de información y la promoción de
                        compromisos entre los actores políticos.
                        <br><br>
                        • <strong>Una mirada cívico-educativo: </strong> Tiene como
                        propósito ejecutar actividades de formación,
                        asistencia técnica, información y difusión que
                        fortalezcan la participación democrática.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Espacio entre franjas -->
    <div class="h-6 bg-transparent"></div>

    <!-- Franja con imagen centrada en fondo rojo -->
    <section class="bg-[#BE1717] py-10">
        <!-- Imagen centrada -->
        <div class="max-w-6xl mx-auto px-4 flex justify-center mb-6">
            <img src="{{ asset('img/VOTO INFORMADO/1Mesa de trabajo 12 copia@4x-8.png') }}" alt="Imagen Franja 1"
                class="max-h-30 md:max-h-36 object-contain">
        </div>

        <!-- Título centrado -->
        <h2 class="text-center text-xl md:text-3xl font-bold text-[#f1e320] mb-2">
            Objetivo general
        </h2>

        <!-- Párrafo centrado -->
        <div class="text-base md:text-xl text-center text-white max-w-5xl mx-auto leading-relaxed px-4">
            Brindar a la ciudadanía y a las organizaciones políticas los conocimientos y recursos
            cívico electorales necesarios para participar de manera informada y responsable en
            la vida política del país, fortaleciendo la democracia en el país.
        </div>
    </section>


    <!-- Espacio entre franjas -->
    <div class="h-3 bg-transparent"></div>

    <!-- Franja con dos columnas de texto -->
    <section class="bg-[#E3E6E7] py-12">
        <div class="max-w-6xl mx-auto px-6">

            <h2 class="text-center text-xl md:text-3xl font-bold text-[#BE1717] mb-2">
                ¿Nuestras acciones?
            </h2>

            <p class="text-center text-base md:text-xl text-[#333] font-semibold mb-6">
                Las principales acciones que impulsa el Programa Voto Informado son:
            </p>

            {{-- CAMBIO: Usamos un gap válido para Tailwind. gap-y para el espacio vertical en 1 columna, gap-x para horizontal en 2 columnas --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-6 md:gap-x-12 text-[#333] text-base md:text-xl">

                <ul class="space-y-3 list-disc list-inside leading-relaxed text-justify">
                    <li>
                        <strong>Brindar asistencia técnica</strong> en temas cívico-electorales.
                    </li>
                    <li>
                        <strong>Capacitar a organizaciones políticas</strong> para fomentar prácticas democráticas.
                    </li>
                    <li>
                        <strong>Construir espacios de diálogo</strong> y debate que permitan el intercambio de ideas y
                        posturas.
                    </li>
                </ul>

                {{-- Mantuvimos text-justify en la primera ul, la segunda ul lo hereda o se lo podemos poner explícitamente --}}
                <ul class="space-y-3 list-disc list-inside leading-relaxed text-justify">
                    <li>
                        <strong>Promover el uso de herramientas tecnológicas de información electoral</strong>, a través de
                        nuestra plataforma virtual y redes sociales.
                    </li>
                    <li>
                        <strong>Difundir contenidos educativos</strong> que faciliten la emisión de un voto informado por
                        parte de la ciudadanía.
                    </li>
                </ul>

            </div>
        </div>
    </section>

    <!-- Espacio entre franjas -->
    <div class="h-3 bg-transparent"></div>

    <!-- Franja con imagen centrada en fondo rojo -->
    <section class="bg-[#BE1717] py-18">

        <!-- Título centrado -->
        <h2 class="text-center text-xl md:text-3xl font-bold text-[#f1e320] mb-6">
            Qué hacemos durante los procesos electorales
        </h2>

        <!-- Dos columnas -->
        <div
            class="grid grid-cols-1 md:grid-cols-2 gap-y-6 md:gap-x-12 text-[#333] text-base md:text-lg max-w-6xl mx-auto px-6">

            <div class="space-y-3 leading-relaxed">
                <div
                    class="text-base md:text-xl text-center text-white text-justify max-w-4xl mx-auto leading-relaxed px-4">
                    Durante los procesos electorales, el Programa Voto Informado lidera la ejecución de los
                    planes educativo-electorales de la Dirección
                    Nacional de Educación y Formación Cívica
                    (DNE), orientados a contribuir con la mejora
                    de la participación política ciudadana. 
                </div>
            </div>

            <div class="text-base md:text-xl leading-relaxed text-white text-justify max-w-4xl mx-auto px-4">
                Para brindar a la ciudadanía y a las organizaciones políticas los conocimientos y recursos
                cívico-electorales necesarios para participar de manera informada y responsable en
                la vida política del país, fortaleciendo la democracia en el país.
            </div>
        </div>
    </section>

    <!-- Espacio entre franjas -->
    <div class="h-3 bg-transparent"></div>

    <!-- Contenedor principal -->
    <div class="relative flex flex-col items-center justify-center mt-12">

        <!-- Botón grande y centrado -->
        <button class="group relative border-none bg-white rounded-[0.75em] cursor-pointer text-[20px] font-bold z-0">
            <a href="{{ url('/lineas-de-trabajo/votoInformado/eleccionesMunicipales') }}" class="z-0">
                <span
                    class="block box-border border-2 border-white rounded-[0.75em] px-20 py-5 bg-[#fc6960] text-white transform transition-transform duration-100 ease-in group-hover:-translate-y-[0.33em] group-active:translate-y-0">
                    ELECCIONES MUNICIPALES COMPLEMENTARIAS 2025
                </span>
        </button>

        <!-- Ícono sobrepuesto encima del botón y ligeramente hacia la derecha -->
        <div class="absolute -bottom-1 left-9/14 transform -translate-x-1/4 z-10">
            <img src="{{ asset('img/VOTO INFORMADO/1Mesa de trabajo 9@4x-8.png') }}" alt="Ícono decorativo"
                class="w-10 h-10">
        </div>

    </div>


    <!-- Espacio entre franjas -->
    <div class="h-10 bg-transparent"></div>
@endsection
