@extends('layouts.app')

@section('title', 'Lineas de Trabajo')

@section('content')

    <x-cabecera titulo="" descripcion="" imagen="img/ZONA EDUCATIVA/foto1e.png" tamanoTitulo="" tamanoDescripcion=""
        fondoContenido="#FFFFF00" colorFondoDerecha='#30b2a4' estiloImagen="margin-top: 1rem; max-height: 60rem;"
        margenTopContenido="mt-5" paddingContenido="px-0" paddingContenidoInterno="p-4 md:p-5" />

    <div class="max-w-7xl mx-auto px-0 py-12">
        {{-- Main container: flex-col for mobile/tablet (default), lg:flex-row for desktop --}}
        <div class="flex flex-col lg:flex-row items-center bg-white">

            {{-- Text container: Always order-1 to be first when stacked, or left when row --}}
            <div class="w-full px-4 py-0 lg:pl-12 text-left order-1 lg:order-1">
                {{-- Title hidden on mobile, visible from 'md' (tablet and desktop) --}}
                <h2 class="hidden md:block text-2xl md:text-5xl font-extrabold text-[#30b2a4] mb-10">ZONA EDUCATIVA</h2>
                <p class="text-justify text-2xl text-gray-600 leading-relaxed pr-0 md:pr-14">
                    <span class="text-[#30b2a4] font-bold"> Zona Educativa </span>es un espacio que cuenta con recursos y
                    materiales educativos y  descargables para todo
                    ciudadano, especialmente para docentes
                    y estudiantes de la Educación Básica Regular (EBR) y Educación Básica
                    Alternativa (EBA), quienes pueden hacer uso de material de lectura, módulos, infografías, cartillas,
                    juegos y videos para el desarrollo de la competencia 16 del Currículo Nacional de la Educación Básica
                    (CNEB): <span class="text-[#30b2a4]">“Convive y participa democráticamente en la búsqueda de bien
                        común”.</span> <br><br>
                    De esta forma trabajamos con docentes, estudiantes y ciudadanos en general para ejercer una ciudadanía
                    activa, participativa y comprometida
                    con la práctica de valores democráticos.
                </p>
            </div>

            {{-- Image container: Below text when stacked, right when row. Smaller on tablets. --}}
            <div class="w-full md:w-3/4 lg:w-3/5 order-2 lg:order-2">
                <img src="{{ asset('img/ZONA EDUCATIVA/zona-escolar1.jpg') }}" alt="Zona Educativa JNE"
                    class="p-6 w-full h-auto object-cover mx-auto"> {{-- Added mx-auto for centering on tablets --}}
            </div>

        </div>
    </div>

    <!-- Tarjetas -->

    <!-- VERSIÓN SOLO PARA PANTALLAS GRANDES -->
    <div class="hidden lg:block">
        <section class="py-4">
            <!-- Contenedor principal con fondo aplicado -->
            <div class="max-w-7xl mx-auto px-4 bg-no-repeat bg-contain bg-center flex flex-col md:flex-row items-center md:items-start"
                style="background-image: url('{{ asset('img/ZONA EDUCATIVA/tira1.png') }}'); min-height: 300px;">

                <!-- Imagen a la izquierda -->
                <div class="w-full md:w-1/3 flex justify-center md:justify-end mb-6 md:mb-0">
                    <img src="{{ asset('img/ZONA EDUCATIVA/niño1.png') }}" alt="Imagen Franja 1"
                        class="max-h-62 mt-6 mb-4 mr-12 object-contain">
                </div>

                <!-- Texto a la derecha -->
                <div class="w-full md:w-3/3 text-left md:pl-1 pr-12 py-4">
                    <h3 class="text-3xl font-bold text-[#30b2a4] mb-2 mt-12">Objetivo general</h3>
                    <p class="text-gray-700 text-xl leading-relaxed">
                        Contribuir con el fortalecimiento de las competencias cívicas y
                        ciudadanas para potenciar la participación activa de los estudiantes como ciudadanos que conviven,
                        deliberan y participan de manera democrática y responsable en la búsqueda del bien común, dentro de
                        un marco de valores, respeto por los derechos y cumplimiento de sus deberes.
                    </p>
                </div>

            </div>
        </section>

        <section class="py-2">
            <!-- Contenedor principal con fondo aplicado -->
            <div class="max-w-7xl mx-auto px-4 bg-no-repeat bg-contain bg-center flex flex-col md:flex-row items-center md:items-start"
                style="background-image: url('{{ asset('img/ZONA EDUCATIVA/tira2.png') }}'); min-height: 300px;">

                <!-- Imagen a la izquierda -->
                <div class="w-full md:w-1/3 flex justify-center md:justify-end mb-6 md:mb-0">
                    <img src="{{ asset('img/ZONA EDUCATIVA/niña-1.png') }}" alt="Imagen Franja 1"
                        class="max-h-62 mt-6 mb-4 mr-12 object-contain">
                </div>

                <!-- Texto a la derecha -->
                <div class="w-full md:w-3/3 text-left md:pl-1 pr-12 py-4">
                    <h3 class="text-3xl font-bold text-[#f1e321] mb-2 mt-12">¿Qué hacemos?</h3>
                    <p class="text-white text-xl leading-relaxed">
                        Diseñamos y ejecutamos diversas actividades educativas, una de ellas se desarrolla a través del
                        espacio
                        virtual ZONA EDUCATIVA, dirigida a docentes y estudiantes, donde encuentran recursos y materiales
                        descargables y gratuitos que promueven la construcción de una ciudadanía democrática, activa,
                        responsable y bien informada desde las escuelas.
                    </p>
                </div>
            </div>
        </section>
    </div>

    <!-- VERSIÓN PARA MÓVILES Y TABLETS -->
    <div class="block lg:hidden">
        <section class="py-4 bg-[#dcdfdf]">
            <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center md:items-start">
                <div class="w-full md:w-1/3 flex justify-center items-center">
                    <img src="{{ asset('img/ZONA EDUCATIVA/niño1.png') }}" alt="Imagen Franja 1"
                        class="max-h-60 object-contain mt-8">
                </div>
                <div class="w-full md:w-3/3 text-justify text-gray-700 text-xl leading-relaxed md:pl-1 pr-2 py-4">
                    <h3 class="text-3xl font-bold text-[#30b2a4] mb-2 mt-6 text-center">Objetivo general</h3>
                    <p>
                        Contribuir con el fortalecimiento de las competencias cívicas y ciudadanas para potenciar la
                        participación activa de los estudiantes como ciudadanos que conviven, deliberan y participan de
                        manera democrática y responsable en la búsqueda del bien común, dentro de un marco de valores,
                        respeto por los derechos y cumplimiento de sus deberes.
                    </p>
                </div>
            </div>
        </section>

        <!-- Espacio entre franjas -->
        <div class="h-4 bg-transparent"></div>

        <section class="py-4 bg-[#30b2a4]">
            <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-start md:items-stretch">
                <!-- Imagen izquierda centrada verticalmente -->
                <div class="w-full md:w-1/3 flex justify-center items-center">
                    <img src="{{ asset('img/ZONA EDUCATIVA/niña-1.png') }}" alt="Imagen Franja 2"
                        class="max-h-60 object-contain mt-8">
                </div>

                <!-- Texto -->
                <div class="w-full md:w-3/3 text-justify text-white text-xl leading-relaxed md:pl-1 pr-2 py-4">
                    <h3 class="text-3xl font-bold text-[#f1e321] mb-2 mt-6 text-center">¿Qué hacemos?</h3>
                    <p>
                        Diseñamos y ejecutamos diversas actividades educativas, una de ellas se desarrolla a través del
                        espacio virtual ZONA EDUCATIVA, dirigida a docentes y estudiantes, donde encuentran recursos y
                        materiales descargables y gratuitos que promueven la construcción de una ciudadanía democrática,
                        activa,
                        responsable y bien informada desde las escuelas.
                    </p>
                </div>
            </div>
        </section>
    </div>

    <!-- Espacio entre franjas -->
    <div class="h-4 bg-transparent"></div>

    <!-- VERSIÓN PARA MÓVILES Y TABLETS -->
    <div class="block lg:hidden bg-[#8b8277] text-white py-6 px-6">
        <div class="max-w-6xl mx-auto text-center">
            <p class="text-lg leading-relaxed font-medium">
                Además, llevamos ferias educativas cívicas a espacios abiertos como<br>
                parques y plazas, para promover la participación de la ciudadanía en<br>
                general, a través de actividades lúdicas:
                <span class="text-[#f1e321]">“Se aprende jugando”</span>, temas<br>
                referidos a participación ciudadana, participación electoral, valores<br>
                democráticos, convivencia, democracia, voto informado.
            </p>
        </div>
    </div>

    <!-- VERSIÓN PARA DESKTOP -->
    <section class="hidden lg:block w-full bg-cover bg-center py-16 min-h-[440px] text-white"
        style="background-image: url('{{ asset('img/ZONA EDUCATIVA/tira3.png') }}');">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <p class="text-xl md:text-3xl leading-relaxed font-medium">
                Además, llevamos ferias educativas cívicas a espacios abiertos como<br>
                parques y plazas, para promover la participación de la ciudadanía en<br>
                general, a través de actividades lúdicas:
                <span class="text-[#f1e321]">“Se aprende jugando”</span>, temas<br>
                referidos a participación ciudadana, participación electoral, valores<br>
                democráticos, convivencia, democracia, voto informado.
            </p>
        </div>
    </section>

    <!-- Espacio entre franjas -->
    <div class="h-12 bg-transparent"></div>


    <!-- Contenedor de imágenes con animación -->
    <!-- Contenedor principal -->
    <div class="w-full mx-auto flex flex-col md:flex-row justify-center items-center gap-2 px-2">

    <!-- Imagen izquierda -->
    <a href="{{ url('/lineas-de-trabajo/zonaEducativa/recursosPedagogicos') }}"
       class="transform transition-transform duration-300 hover:-rotate-3 w-full max-w-xs lg:max-w-sm">
        <img src="{{ asset('img/ZONA EDUCATIVA/botonesa1.png') }}" alt="Imagen izquierda"
             class="w-full h-auto max-h-60 lg:max-h-72 object-contain mx-auto">
    </a>

    <!-- Imagen del centro -->
    <div class="w-full max-w-[180px] lg:max-w-[220px] flex justify-center items-center">
        <img src="{{ asset('img/ZONA EDUCATIVA/niño2.png') }}" alt="Imagen centro"
             class="w-full h-auto max-h-60 lg:max-h-72 object-contain mx-auto">
    </div>

    <!-- Imagen derecha -->
    <a href="{{ url('/lineas-de-trabajo/zonaEducativa/museoElectoral') }}"
       class="transform transition-transform duration-300 hover:rotate-3 w-full max-w-xs lg:max-w-sm">
        <img src="{{ asset('img/ZONA EDUCATIVA/botonesa2.png') }}" alt="Imagen derecha"
             class="w-full h-auto max-h-60 lg:max-h-72 object-contain mx-auto">
    </a>

</div>


    <!-- Espacio entre franjas -->
    <div class="h-12 bg-transparent"></div>

@endsection
