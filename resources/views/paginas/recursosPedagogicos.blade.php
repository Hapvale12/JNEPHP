@extends('layouts.app')

@section('title', 'Voto Informado')

@section('content')

    <!-- cabecera -->
    <div class="relative w-full h-auto bg-white overflow-hidden">
        <div class="absolute top-0 right-0 h-full w-[40%] bg-[#8b8277] hidden lg:block"></div>

        <div class="relative z-10 max-w-8xl mt-8 mx-auto px-2 md:px-38 pt-10
                bg-[#8b8277] md:bg-transparent">
            {{-- Fondo color solo en móviles, transparente en tablet y desktop --}}
            <div class="w-full shadow-none rounded-none p-6 md:p-10 flex flex-col lg:flex-row items-stretch gap-6">

                <div class="w-full lg:w-2/3 flex justify-center items-end order-1 lg:order-2">
                    <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/ZONA EDU2.jpg') }}" alt="Decoración" class="object-contain"
                        style="max-height: 52rem; margin-top: 1rem;">
                </div>

                <div class="w-full lg:w-1/3 flex items-end order-2 lg:order-1">
                    <div class="pb-4">
                        {{-- Título: Blanco en móvil, #8b8277 en tablet y desktop --}}
                        <h1 class="text-3xl md:text-5xl font-extrabold mb-4 leading-tight text-white md:text-[#8b8277]">
                            RECURSOS<br>PEDAGÓGICOS
                        </h1>
                        {{-- Párrafo: Blanco en móvil, #333 en tablet y desktop --}}
                        <p class="text-semibold md:text-2xl leading-snug text-white md:text-[#333]">
                            Diseñamos y ejecutamos diversas<br>
                            actividades educativas para promover<br>
                            una ciudadanía democrática.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- banner con texto -->
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="max-w-8xl mx-auto px-4 md:px-50 py-18">
            <div class="flex items-center flex-wrap">
                <!-- Imagen izquierda -->
                <img alt="otro banner" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded"
                    src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/ZONA EDU1.png') }}">

                <!-- Contenido derecho -->
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0 flex flex-col items-center">
                    <!-- Imagen superior encima del texto -->
                    <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/comillas.png') }}" alt="Comillas" class="w-27 h-auto mb-4">

                    <p class="leading-relaxed text-semibold text-center text-[#918378] text-3xl">
                        Una de nuestras principales iniciativas es la
                        Zona Educativa, un espacio virtual dirigido a
                        docentes y estudiantes donde encontrarán
                        recursos y materiales pedagógicos
                        descargables y gratuitos.
                    </p>
                </div>
            </div>
        </div>
    </section>



    <!-- Las primeras 6 Cards -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div x-data="{ open: false }">
                    <!-- Tarjeta clickeable -->
                    <div @click="open = true" class="cursor-pointer bg-white border-12 border-[#dbdbdb] text-center">
                        <div class="bg-red-700 w-full h-[220px] flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('/DnefDocumentos/public/img/RECURSOS/PROMOVIENDO.jpg') }}" alt="Cartilla 1"
                                class="w-full h-full object-contain">
                        </div>
                        <div class="bg-white p-3 rounded-b-lg">
                            <h3 class="text-lg font-semibold text-gray-700 leading-tight">
                                CARTILLAS PROMOVIENDO <br> CIUDADANÍA
                            </h3>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div x-show="open" x-transition
                        class="fixed inset-0 z-50 flex items-center justify-center bg-black/40">
                        <div @click.away="open = false"
                            class="relative bg-white w-[95%] max-w-4xl rounded-lg shadow-lg p-6 overflow-y-auto max-h-[90vh]">
                            <!-- Botón cerrar -->
                            <button @click="open = false"
                                class="absolute top-2 right-3 text-gray-400 hover:text-red-500 text-2xl font-bold z-10">
                                &times;
                            </button>

                            <!-- Contenido -->
                            <div class="text-center">
                                <h2 class="text-xl font-bold text-[#BE1717] mb-2">Cartillas Promoviendo Ciudadanía</h2>
                                <p class="text-lg text-gray-600 mb-6">
                                    Infografías con el ABC para la promoción de la ciudadanía.<br>
                                    Las cartillas contienen información relevante sobre:
                                </p>

                                <!-- Grid de PDFs -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 place-items-center">
                                    @php
                                        $cartillas = [
                                            [
                                                'img' => '1-conociendo-al-jne.jpg',
                                                'pdf' => '1-conociendo-al-jne.pdf',
                                                'title' => 'Conociendo al JNE y sus funciones educativas',
                                            ],
                                            [
                                                'img' => '2-funnciones-desfios-op.jpg',
                                                'pdf' => '2-funciones-y-desafios.pdf',
                                                'title' => 'Funciones y desafíos de las Organizaciones Políticas',
                                            ],
                                            [
                                                'img' => '3-enfoquedh-igualdad.jpg',
                                                'pdf' => '3-enfoque.pdf',
                                                'title' =>
                                                    'Enfoque de derechos humanos de igualdad de género, interculturalidad e intergeneracional',
                                            ],
                                            [
                                                'img' => '4-democacia en-peru.jpg',
                                                'pdf' => '4-cartilla-democracia.pdf',
                                                'title' => 'La democracia en el Perú',
                                            ],
                                            [
                                                'img' => '5-ciudadania-participacion.jpg',
                                                'pdf' => '5-ciudadania-y-formas.pdf',
                                                'title' => 'Ciudadanía y formas de participación',
                                            ],
                                            [
                                                'img' => '6-ppmji.jpg',
                                                'pdf' => '6-participacion-mji.pdf',
                                                'title' =>
                                                    'Participación política de la mujer, jóvenes e indígenas en el Perú',
                                            ],
                                            [
                                                'img' => '7-proceso-electoral.jpg',
                                                'pdf' => '7-proceso-electoral.pdf',
                                                'title' => 'Proceso Electoral',
                                            ],
                                        ];
                                    @endphp

                                    @foreach ($cartillas as $c)
                                        <div
                                            class="bg-white shadow-md rounded-lg p-4 w-52 h-[355px] flex flex-col text-center justify-between">

                                            <!-- Imagen centrada -->
                                            <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/miniaturas/' . $c['img']) }}"
                                                alt="{{ $c['title'] }}"
                                                class="w-28 h-38 object-cover rounded mb-3 mx-auto">

                                            <!-- Título -->
                                            <div class="flex-grow flex items-center justify-center">
                                                <p class="text-md text-gray-700 leading-snug">
                                                    {{ $c['title'] }}
                                                </p>
                                            </div>

                                            <!-- Botón Descargar -->
                                            <a href="{{ asset('/DnefDocumentos/public/pdf/1.%20PROMOVIENDO%20CIUDADANA/' . $c['pdf']) }}" download
                                                class="mt-3 inline-block bg-[#BE1717] text-white px-4 py-2 rounded hover:bg-red-700 transition">
                                                Descargar
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta -->
                <div x-data="{ open: false }" class="relative">

                    <!-- Tarjeta visible -->
                    <div @click="open = true" class="cursor-pointer bg-white border-12 border-[#dbdbdb] text-center">
                        <div class="bg-red-700 w-full h-[220px] flex items-center justify-center">
                            <img src="{{ asset('/DnefDocumentos/public/img/RECURSOS/CARTILLA FORMACION CIUDADANA.jpg') }}" alt="Cartilla"
                                class="w-full h-full object-contain">
                        </div>
                        <div class="bg-white p-3">
                            <h3 class="text-lg font-semibold text-gray-700 leading-tight">
                                CARTILLA DE FORMACIÓN <br> CIUDADANA
                            </h3>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div x-show="open" x-transition
                        class="fixed inset-0 z-50 flex items-center justify-center bg-black/30 backdrop-blur-sm">
                        <div @click.away="open = false"
                            class="bg-white rounded-lg shadow-lg max-w-2xl w-full p-6 relative overflow-y-auto max-h-[90vh]">

                            <!-- Cierre -->
                            <button @click="open = false"
                                class="absolute top-2 right-2 text-gray-500 hover:text-red-600 text-xl font-bold">&times;</button>

                            <!-- Contenido -->
                            <div class="text-center mb-4">
                                <h2 class="text-xl font-bold text-[#BE1717] mb-2">Cartilla de Formación Ciudadana</h2>
                                <p class="text-md text-gray-600 mb-4">
                                    Encontrarás infografías con el ABC de la formación ciudadana. <br>
                                    Las cartillas contienen información relevante sobre:
                                </p>
                            </div>

                            <!-- PDFs con miniaturas -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
                                <!-- PDF 1 -->
                                <div
                                    class="bg-white shadow-md rounded-lg p-4 w-full h-[300px] flex flex-col text-center justify-between">
                                    <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/miniaturas/cartilla-fc1.jpg') }}" alt="Miniatura"
                                        class="w-28 h-36 object-cover rounded mb-3 mx-auto">
                                    <div class="flex-grow flex items-center justify-center">
                                        <p class="text-sm text-gray-700 leading-snug">
                                            Democracia y convivencia democrática
                                        </p>
                                    </div>
                                    <a href="{{ asset('/DnefDocumentos/public/pdf/2. FORMACION CIUDADANA/1-cartillaeducativa1.pdf') }}" download
                                        class="mt-3 inline-block bg-[#BE1717] text-white px-4 py-2 rounded hover:bg-red-700 transition">
                                        Descargar
                                    </a>
                                </div>

                                <!-- PDF 2 -->
                                <div
                                    class="bg-white shadow-md rounded-lg p-4 w-full h-[300px] flex flex-col text-center justify-between">
                                    <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/miniaturas/cartilla-fc2.jpg') }}"
                                        alt="Miniatura" class="w-28 h-36 object-cover rounded mb-3 mx-auto">
                                    <div class="flex-grow flex items-center justify-center">
                                        <p class="text-sm text-gray-700 leading-snug">
                                            La participación ciudadana
                                        </p>
                                    </div>
                                    <a href="{{ asset('/DnefDocumentos/public/pdf/2. FORMACION CIUDADANA/2-cartillaeducativa2.pdf') }}" download
                                        class="mt-3 inline-block bg-[#BE1717] text-white px-4 py-2 rounded hover:bg-red-700 transition">
                                        Descargar
                                    </a>
                                </div>

                                <!-- PDF 3 -->
                                <div
                                    class="bg-white shadow-md rounded-lg p-4 w-full h-[300px] flex flex-col text-center justify-between">
                                    <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/miniaturas/cartilla-fc3.jpg') }}"
                                        alt="Miniatura" class="w-28 h-36 object-cover rounded mb-3 mx-auto">
                                    <div class="flex-grow flex items-center justify-center">
                                        <p class="text-sm text-gray-700 leading-snug">
                                            El Municipio Escolar
                                        </p>
                                    </div>
                                    <a href="{{ asset('/DnefDocumentos/public/pdf/2. FORMACION CIUDADANA/3-cartillaeducativa3.pdf') }}" download
                                        class="mt-3 inline-block bg-[#BE1717] text-white px-4 py-2 rounded hover:bg-red-700 transition">
                                        Descargar
                                    </a>
                                </div>

                                <!-- PDF 4 -->
                                <div
                                    class="bg-white shadow-md rounded-lg p-4 w-full h-[300px] flex flex-col text-center justify-between col-span-2 md:col-span-1 md:col-start-2">
                                    <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/miniaturas/cartilla-fc4.jpg') }}"
                                        alt="Miniatura" class="w-28 h-36 object-cover rounded mb-3 mx-auto">
                                    <div class="flex-grow flex items-center justify-center">
                                        <p class="text-sm text-gray-700 leading-snug">
                                            Consejo de participación estudiantil (COPAE)
                                        </p>
                                    </div>
                                    <a href="{{ asset('/DnefDocumentos/public/pdf/2.%20FORMACION%20CIUDADANA/4-cartillaeducativa4.pdf') }}" download
                                        class="mt-3 inline-block bg-[#BE1717] text-white px-4 py-2 rounded hover:bg-red-700 transition">
                                        Descargar
                                    </a>
                                </div>

                                <!-- PDF 5 -->
                                <div
                                    class="bg-white shadow-md rounded-lg p-4 w-full h-[300px] flex flex-col text-center justify-between">
                                    <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/miniaturas/cartilla-fc5.jpg') }}"
                                        alt="Miniatura" class="w-28 h-36 object-cover rounded mb-3 mx-auto">
                                    <div class="flex-grow flex items-center justify-center">
                                        <p class="text-sm text-gray-700 leading-snug">
                                            El proceso electoral escolar
                                        </p>
                                    </div>
                                    <a href="{{ asset('/DnefDocumentos/public/pdf/2. FORMACION CIUDADANA/5-cartillaeducativa5.pdf') }}" download
                                        class="mt-3 inline-block bg-[#BE1717] text-white px-4 py-2 rounded hover:bg-red-700 transition">
                                        Descargar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div x-data="{ open: false }" class="relative">
                    <!-- Tarjeta -->
                    <div @click="open = true" class="cursor-pointer bg-white border-12 border-[#dbdbdb] text-center">
                        <div class="bg-red-700 w-full h-[220px] flex items-center justify-center">
                            <img src="{{ asset('/DnefDocumentos/public/img/RECURSOS/MUNICIPIO ESCOLAR.jpg') }}" alt="Cartilla"
                                class="w-full h-full object-contain">
                        </div>
                        <div class="bg-white p-6">
                            <h3 class="text-lg font-semibold text-gray-700 leading-tight">MUNICIPIOS ESCOLARES</h3>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div x-show="open" x-transition
                        class="fixed inset-0 z-50 flex items-center justify-center bg-black/30 backdrop-blur-sm">
                        <div @click.away="open = false"
                            class="bg-white rounded-lg shadow-lg max-w-2xl w-full p-6 relative overflow-y-auto max-h-[90vh]">

                            <!-- Cierre -->
                            <button @click="open = false"
                                class="absolute top-2 right-2 text-gray-500 hover:text-red-600 text-xl font-bold">&times;</button>

                            <!-- Contenido -->
                            <div class="text-center mb-4">
                                <h2 class="text-xl font-bold text-[#BE1717] mb-2">Municipios Escolares</h2>
                                <p class="text-md text-gray-600 mb-4">
                                    Aquí encontrarás recursos y materiales que te ayudarán en el desarrollo del proceso de
                                    elecciones de los Municipios Escolares.
                                    La presentación de diapositivas ha sido trabajada de manera conjunta con el Ministerio
                                    de Educación y los organismos electorales: ONPE y RENIEC.
                                </p>
                            </div>

                            <!-- Grid de PDFs -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <!-- PDF 1 -->
                                <div
                                    class="bg-white shadow-md rounded-lg p-4 w-full h-[300px] flex flex-col text-center justify-between">
                                    <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/miniaturas/pdf.png') }}"
                                        class="w-28 h-36 object-cover rounded mb-3 mx-auto" alt="Miniatura">
                                    <div class="flex-grow flex items-center justify-center">
                                        <p class="text-sm text-gray-700 leading-snug">
                                            Presentación del proceso electoral de los M.E Parte 1
                                        </p>
                                    </div>
                                    <a href="{{ asset('/DnefDocumentos/public/pdf/3.%20MUNICIPIO%20ESCOLAR/PPT-MINEDUParte1.pdf') }}" download
                                        class="mt-3 inline-block bg-[#BE1717] text-white px-4 py-2 rounded hover:bg-red-700 transition">
                                        Descargar
                                    </a>
                                </div>

                                <!-- PDF 2 -->
                                <div
                                    class="bg-white shadow-md rounded-lg p-4 w-full h-[300px] flex flex-col text-center justify-between">
                                    <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/miniaturas/pdf.png') }}"
                                        class="w-28 h-36 object-cover rounded mb-3 mx-auto" alt="Miniatura">
                                    <div class="flex-grow flex items-center justify-center">
                                        <p class="text-sm text-gray-700 leading-snug">
                                            Presentación del proceso electoral de los M.E Parte 2
                                        </p>
                                    </div>
                                    <a href="{{ asset('/DnefDocumentos/public/pdf/3.%20MUNICIPIO%20ESCOLAR/PPT-MINEDUParte2.pdf') }}" download
                                        class="mt-3 inline-block bg-[#BE1717] text-white px-4 py-2 rounded hover:bg-red-700 transition">
                                        Descargar
                                    </a>
                                </div>

                                <!-- PDF 3 -->
                                <div
                                    class="bg-white shadow-md rounded-lg p-4 w-full h-[300px] flex flex-col text-center justify-between">
                                    <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/miniaturas/pdf.png') }}"
                                        class="w-28 h-36 object-cover rounded mb-3 mx-auto" alt="Miniatura">
                                    <div class="flex-grow flex items-center justify-center">
                                        <p class="text-sm text-gray-700 leading-snug">
                                            Hoja para Fiscalizadores Electorales Escolares
                                        </p>
                                    </div>
                                    <a href="{{ asset('/DnefDocumentos/public/pdf/3.%20MUNICIPIO%20ESCOLAR/hoja_de_reporte_de_fiscalizadores.pdf') }}"
                                        download
                                        class="mt-3 inline-block bg-[#BE1717] text-white px-4 py-2 rounded hover:bg-red-700 transition">
                                        Descargar
                                    </a>
                                </div>

                                <!-- PDF 4 -->
                                <div
                                    class="bg-white shadow-md rounded-lg p-4 w-full h-[300px] flex flex-col text-center justify-between">
                                    <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/miniaturas/pdf.png') }}"
                                        class="w-28 h-36 object-cover rounded mb-3 mx-auto" alt="Miniatura">
                                    <div class="flex-grow flex items-center justify-center">
                                        <p class="text-sm text-gray-700 leading-snug">
                                            Credencial
                                        </p>
                                    </div>
                                    <a href="{{ asset('/DnefDocumentos/public/pdf/3.%20MUNICIPIO%20ESCOLAR/CREDENCIAL.doc') }}" download
                                        class="mt-3 inline-block bg-[#BE1717] text-white px-4 py-2 rounded hover:bg-red-700 transition">
                                        Descargar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div x-data="{ open: false }" class="relative">
                    <div @click="open = true" class="cursor-pointer bg-white border-12 border-[#dbdbdb] text-center">
                        <div class="bg-red-700 w-full h-[220px] flex items-center justify-center">
                            <img src="{{ asset('/DnefDocumentos/public/img/RECURSOS/4. CONSEJO DE PARTICIPACION ESTUDIANTIL.png') }}"
                                alt="Cartilla" class="w-full h-full object-contain">
                        </div>
                        <div class="bg-white p-3">
                            <h3 class="text-lg font-semibold text-gray-700 leading-tight">CONSEJOS DE
                                PARTICIPACIÓN<br>ESTUDIANTIL</h3>
                        </div>
                    </div>

                    <div x-show="open" x-transition
                        class="fixed inset-0 z-50 flex items-center justify-center bg-black/30 backdrop-blur-sm">
                        <div @click.away="open = false"
                            class="bg-white rounded-lg shadow-lg max-w-2xl w-full p-6 relative overflow-y-auto max-h-[90vh]">

                            <!-- Botón cerrar -->
                            <button @click="open = false"
                                class="absolute top-2 right-2 text-gray-500 hover:text-red-600 text-xl font-bold">&times;</button>

                            <!-- Título y descripción -->
                            <div class="text-center mb-4">
                                <h2 class="text-xl font-bold text-[#BE1717] mb-2">Consejos de Participación Estudiantil
                                </h2>
                                <p class="text-md text-gray-600 mb-4">
                                    Documentos para fomentar el liderazgo y participación juvenil.
                                </p>
                            </div>

                            <!-- Grid de tarjetas -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <!-- PDF 1 -->
                                <div
                                    class="bg-white shadow-md rounded-lg p-4 w-full h-[300px] flex flex-col text-center justify-between">
                                    <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/miniaturas/pdf.png') }}"
                                        class="w-28 h-36 object-cover rounded mb-3 mx-auto" alt="Miniatura">
                                    <div class="flex-grow flex items-center justify-center">
                                        <p class="text-sm text-gray-700 leading-snug">
                                            Cartilla Educativa
                                        </p>
                                    </div>
                                    <a href="{{ asset('/DnefDocumentos/public/pdf/4.CONSEJO DE PARTICIPACION ESTUDIANTIL/4-cartillaeducativa4.pdf') }}"
                                        download
                                        class="mt-3 inline-block bg-[#BE1717] text-white px-4 py-2 rounded hover:bg-red-700 transition">
                                        Descargar
                                    </a>
                                </div>

                                <!-- PDF 2 -->
                                <div
                                    class="bg-white shadow-md rounded-lg p-4 w-full h-[300px] flex flex-col text-center justify-between">
                                    <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/miniaturas/pdf.png') }}"
                                        class="w-28 h-36 object-cover rounded mb-3 mx-auto" alt="Miniatura">
                                    <div class="flex-grow flex items-center justify-center">
                                        <p class="text-sm text-gray-700 leading-snug">
                                            Resolución
                                        </p>
                                    </div>
                                    <a href="{{ asset('/DnefDocumentos/public/pdf/4.CONSEJO DE PARTICIPACION ESTUDIANTIL/RESOLUCION_026-2025-minedu.pdf') }}"
                                        download
                                        class="mt-3 inline-block bg-[#BE1717] text-white px-4 py-2 rounded hover:bg-red-700 transition">
                                        Descargar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div x-data="{ open: false }" class="relative">
                    <!-- Imagen de apertura del modal -->
                    <div @click="open = true" class="cursor-pointer bg-white border-12 border-[#dbdbdb] text-center">
                        <div class="bg-red-700 w-full h-[220px] flex items-center justify-center">
                            <img src="{{ asset('/DnefDocumentos/public/img/RECURSOS/resoluciones.png') }}" alt="Cartilla"
                                class="w-full h-full object-contain">
                        </div>
                        <div class="bg-white p-3">
                            <h3 class="text-lg font-semibold text-gray-700 leading-tight">
                                RES. VICEMINISTERIAL<br>DE MUNICIPIOS ESCOLARES
                            </h3>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div x-show="open" x-transition
                        class="fixed inset-0 z-50 flex items-center justify-center bg-black/30 backdrop-blur-sm">
                        <div @click.away="open = false"
                            class="bg-white rounded-lg shadow-lg max-w-2xl w-full p-6 relative overflow-y-auto max-h-[90vh]">
                            <!-- Botón cerrar -->
                            <button @click="open = false"
                                class="absolute top-2 right-2 text-gray-500 hover:text-red-600 text-xl font-bold">&times;</button>

                            <!-- Título y descripción -->
                            <div class="text-center mb-4">
                                <h2 class="text-xl font-bold text-[#BE1717] mb-2">Resolución Viceministerial</h2>
                                <p class="text-sm text-gray-600 mb-4">Documentación oficial sobre municipios escolares.</p>
                            </div>

                            <!-- Grid de documentos -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <!-- Documento 1 -->
                                <div
                                    class="bg-white shadow-md rounded-lg p-4 w-full h-[300px] flex flex-col text-center justify-between">
                                    <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/miniaturas/pdf.png') }}"
                                        class="w-28 h-36 object-cover rounded mb-3 mx-auto" alt="Miniatura">
                                    <div class="flex-grow flex items-center justify-center">
                                        <p class="text-sm text-gray-700 leading-snug">
                                            Resolución 046
                                        </p>
                                    </div>
                                    <a href="{{ asset('/DnefDocumentos/public/pdf/5.%20RESOLUCIÓN%20VICEMINISTERIALES/RESOLUCIÓN-_046-2025-minedu.pdf') }}"
                                        download
                                        class="mt-3 inline-block bg-[#BE1717] text-white px-4 py-2 rounded hover:bg-red-700 transition">
                                        Descargar
                                    </a>
                                </div>

                                <!-- Documento 2 -->
                                <div
                                    class="bg-white shadow-md rounded-lg p-4 w-full h-[300px] flex flex-col text-center justify-between">
                                    <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/miniaturas/pdf.png') }}"
                                        class="w-28 h-36 object-cover rounded mb-3 mx-auto" alt="Miniatura">
                                    <div class="flex-grow flex items-center justify-center">
                                        <p class="text-sm text-gray-700 leading-snug">
                                            Resolución 026
                                        </p>
                                    </div>
                                    <a href="{{ asset('/DnefDocumentos/public/pdf/5.%20RESOLUCIÓN%20VICEMINISTERIALES/RESOLUCIÓN_026-2025-minedu.pdf') }}"
                                        download
                                        class="mt-3 inline-block bg-[#BE1717] text-white px-4 py-2 rounded hover:bg-red-700 transition">
                                        Descargar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div x-data="{ open: false }" class="relative">
                    <div @click="open = true" class="cursor-pointer bg-white border-12 border-[#dbdbdb] text-center">
                        <div class="bg-red-700 w-full h-[220px] flex items-center justify-center">
                            <img src="{{ asset('/DnefDocumentos/public/img/RECURSOS/INFOGRAFÍA.jpg') }}" alt="Cartilla"
                                class="w-full h-full object-contain">
                        </div>
                        <div class="bg-white p-6">
                            <h3 class="text-lg font-semibold text-gray-700 leading-tight">INFOGRAFÍAS</h3>
                        </div>
                    </div>

                    <div x-show="open" x-transition
                        class="fixed inset-0 z-50 flex items-center justify-center bg-black/30 backdrop-blur-sm">
                        <div @click.away="open = false"
                            class="bg-white rounded-lg shadow-lg max-w-2xl w-full p-6 relative overflow-y-auto max-h-[90vh]">
                            <!-- Botón cerrar -->
                            <button @click="open = false"
                                class="absolute top-2 right-2 text-gray-500 hover:text-red-600 text-xl font-bold">&times;</button>

                            <!-- Título y descripción -->
                            <div class="text-center mb-4">
                                <h2 class="text-xl font-bold text-[#BE1717] mb-2">Infografías</h2>
                                <p class="text-sm text-gray-600 mb-4">
                                    Contiene material gráfico sobre la ciudadanía democrática y participación activa. <br>
                                    Las infografías contienen información relevante sobre:
                                </p>
                            </div>

                            <!-- Grid de infografías -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <!-- Infografía 1 -->
                                <div
                                    class="bg-white shadow-md rounded-lg p-4 w-full h-[300px] flex flex-col text-center justify-between">
                                    <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/miniaturas/info1-01.png') }}"
                                        class="w-28 h-36 object-cover rounded mb-3 mx-auto" alt="Interculturalidad">
                                    <div class="flex-grow flex items-center justify-center">
                                        <p class="text-sm text-gray-700 leading-snug">Interculturalidad</p>
                                    </div>
                                    <a href="{{ asset('/DnefDocumentos/public/pdf/6. INFOGRAFIAS/Interculturalidad.jpg') }}" download
                                        class="mt-3 inline-block bg-[#BE1717] text-white px-4 py-2 rounded hover:bg-red-700 transition">
                                        Descargar
                                    </a>
                                </div>

                                <!-- Infografía 2 -->
                                <div
                                    class="bg-white shadow-md rounded-lg p-4 w-full h-[300px] flex flex-col text-center justify-between">
                                    <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/miniaturas/info2-01.png') }}"
                                        class="w-28 h-36 object-cover rounded mb-3 mx-auto" alt="Valores democráticos">
                                    <div class="flex-grow flex items-center justify-center">
                                        <p class="text-sm text-gray-700 leading-snug">Tolerancia</p>
                                    </div>
                                    <a href="{{ asset('/DnefDocumentos/public/pdf/6. INFOGRAFIAS/Tolerancia.jpg') }}" download
                                        class="mt-3 inline-block bg-[#BE1717] text-white px-4 py-2 rounded hover:bg-red-700 transition">
                                        Descargar
                                    </a>
                                </div>

                                <!-- Infografía 3 -->
                                <div
                                    class="bg-white shadow-md rounded-lg p-4 w-full h-[300px] flex flex-col text-center justify-between">
                                    <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/miniaturas/info3-01.png') }}"
                                        class="w-28 h-36 object-cover rounded mb-3 mx-auto" alt="Interculturalidad">
                                    <div class="flex-grow flex items-center justify-center">
                                        <p class="text-sm text-gray-700 leading-snug">Valores Democraticos</p>
                                    </div>
                                    <a href="{{ asset('/DnefDocumentos/public/pdf/6. INFOGRAFIAS/Valores democráticos.jpg') }}" download
                                        class="mt-3 inline-block bg-[#BE1717] text-white px-4 py-2 rounded hover:bg-red-700 transition">
                                        Descargar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white border-12 border-[#dbdbdb] text-center">
                    <div class="bg-red-700 w-full h-[220px] flex items-center justify-center">
                        <img src="{{ asset('/DnefDocumentos/public/img/RECURSOS/videos.png') }}" alt="Cartilla 1"
                            class="w-full h-full object-contain">
                    </div>
                    <div class="bg-white p-7">
                        <h3 class="text-lg font-semibold text-gray-700 leading-tight">
                            VIDEOS
                        </h3>
                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div x-data="{ open: false }" class="relative">
                    <div @click="open = true" class="cursor-pointer bg-white border-12 border-[#dbdbdb] text-center">
                        <div class="bg-red-700 w-full h-[220px] flex items-center justify-center">
                            <img src="{{ asset('/DnefDocumentos/public/img/RECURSOS/juegos.jpg') }}" alt="Juegos Educativos"
                                class="w-full h-full object-contain">
                        </div>
                        <div class="bg-white p-7">
                            <h3 class="text-lg font-semibold text-gray-700 leading-tight">
                                JUEGOS EDUCATIVOS
                            </h3>
                        </div>
                    </div>

                    {{-- MODAL PERSONALIZADO para JUEGOS EDUCATIVOS --}}
                    <div x-show="open" x-transition
                        class="fixed inset-0 z-50 flex items-center justify-center bg-black/30 backdrop-blur-sm p-4">
                        <div @click.away="open = false"
                            class="bg-white rounded-lg shadow-lg max-w-4xl w-full p-6 relative overflow-y-auto max-h-[90vh]">

                            <button @click="open = false"
                                class="absolute top-2 right-2 text-gray-500 hover:text-red-600 text-xl font-bold">&times;</button>

                            <div class="text-center mb-6">
                                <h2 class="text-2xl sm:text-3xl font-bold text-[#BE1717] mb-2">Juegos Educativos del JNE
                                </h2>
                                <p class="text-md text-gray-600">
                                    ¡Descubre nuestros juegos interactivos para aprender y divertirte!
                                </p>
                            </div>

                            <div class="grid grid-cols-1 gap-6">

                                <a href="URL_DEL_JUEGO_1" target="_blank" rel="noopener noreferrer"
                                    class="block relative w-full overflow-hidden rounded-lg shadow-md group transform transition duration-300 ease-in-out hover:scale-105 hover:shadow-lg">
                                    <img src="{{ asset('/DnefDocumentos/public/img/RECURSOS/banner-juegos/juego1.jpg') }}"
                                        alt="Juego 1: Nombre del Juego" class="block w-full h-auto object-contain">
                                    <div
                                        class="absolute inset-0 flex items-center justify-center transition-opacity duration-300">
                                    </div>
                                </a>

                                <a href="URL_DEL_JUEGO_2" target="_blank" rel="noopener noreferrer"
                                    class="block relative w-full overflow-hidden rounded-lg shadow-md group transform transition duration-300 ease-in-out hover:scale-105 hover:shadow-lg">
                                    <img src="{{ asset('/DnefDocumentos/public/img/RECURSOS/banner-juegos/juego2.jpg') }}"
                                        alt="Juego 2: Título Corto" class="block w-full h-auto object-contain">
                                    <div
                                        class="absolute inset-0 flex items-center justify-center transition-opacity duration-300">
                                    </div>
                                </a>

                                <a href="URL_DEL_JUEGO_3" target="_blank" rel="noopener noreferrer"
                                    class="block relative w-full overflow-hidden rounded-lg shadow-md group transform transition duration-300 ease-in-out hover:scale-105 hover:shadow-lg">
                                    <img src="{{ asset('/DnefDocumentos/public/img/RECURSOS/banner-juegos/juego3.jpg') }}" alt="Juego 3"
                                        class="block w-full h-auto object-contain">
                                    <div
                                        class="absolute inset-0 flex items-center justify-center transition-opacity duration-300">
                                    </div>
                                </a>

                                <a href="URL_DEL_JUEGO_4" target="_blank" rel="noopener noreferrer"
                                    class="block relative w-full overflow-hidden rounded-lg shadow-md group transform transition duration-300 ease-in-out hover:scale-105 hover:shadow-lg">
                                    <img src="{{ asset('/DnefDocumentos/public/img/RECURSOS/banner-juegos/juego4.jpg') }}" alt="Juego 4"
                                        class="block w-full h-auto object-contain">
                                    <div
                                        class="absolute inset-0 flex items-center justify-center transition-opacity duration-300">
                                    </div>
                                </a>

                                <a href="URL_DEL_JUEGO_5" target="_blank" rel="noopener noreferrer"
                                    class="block relative w-full overflow-hidden rounded-lg shadow-md group transform transition duration-300 ease-in-out hover:scale-105 hover:shadow-lg">
                                    <img src="{{ asset('/DnefDocumentos/public/img/RECURSOS/banner-juegos/juego5.jpg') }}" alt="Juego 5"
                                        class="block w-full h-auto object-contain">
                                    <div
                                        class="absolute inset-0 flex items-center justify-center transition-opacity duration-300">
                                    </div>
                                </a>

                                <a href="URL_DEL_JUEGO_6" target="_blank" rel="noopener noreferrer"
                                    class="block relative w-full overflow-hidden rounded-lg shadow-md group transform transition duration-300 ease-in-out hover:scale-105 hover:shadow-lg">
                                    <img src="{{ asset('/DnefDocumentos/public/img/RECURSOS/banner-juegos/juego6.jpg') }}" alt="Juego 6"
                                        class="block w-full h-auto object-contain">
                                    <div
                                        class="absolute inset-0 flex items-center justify-center transition-opacity duration-300">
                                    </div>
                                </a>

                                <a href="URL_DEL_JUEGO_7" target="_blank" rel="noopener noreferrer"
                                    class="block relative w-full overflow-hidden rounded-lg shadow-md group transform transition duration-300 ease-in-out hover:scale-105 hover:shadow-lg">
                                    <img src="{{ asset('/DnefDocumentos/public/img/RECURSOS/banner-juegos/juego7.jpg') }}" alt="Juego 7"
                                        class="block w-full h-auto object-contain">
                                    <div
                                        class="absolute inset-0 flex items-center justify-center transition-opacity duration-300">
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 3 (Contador) -->
                <div class="bg-white relative p-4 flex items-center h-[320px]">
                    <!-- Imagen a la izquierda -->
                    <div class="w-1/2 h-full flex items-center justify-center">
                        <img src="{{ asset('/DnefDocumentos/public/img/ZONA EDUCATIVA/niño2.png') }}" alt="Contador"
                            class="max-h-full object-contain">
                    </div>

                    <!-- Contador a la derecha (sobre imagen) -->
                    <div class="w-1/2 h-full relative flex flex-col justify-center items-start pl-4">
                        <h3 class="font-semibold text-gray-700 text-xl mb-2">Visitas</h3>
                        <p class="text-4xl font-bold text-gray-700 leading-none" id="contador">0000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Script para el contador -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hasVisited = localStorage.getItem('visited');
            const contadorEl = document.getElementById('contador');

            fetch('/contador')
                .then(res => res.json())
                .then(data => {
                    contadorEl.textContent = data.count.toString().padStart(4, '0');
                });

            if (!hasVisited) {
                fetch('/contador', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json'
                        },
                    })
                    .then(res => res.json())
                    .then(data => {
                        contadorEl.textContent = data.count.toString().padStart(4, '0');
                        localStorage.setItem('visited', 'true');
                    });
            }
        });
    </script>
@endsection
