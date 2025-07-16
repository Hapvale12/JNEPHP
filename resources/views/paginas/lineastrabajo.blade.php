@extends('layouts.app')

@section('title', 'Lineas de Trabajo')

@section('content')

    <div class="relative w-full h-auto bg-white overflow-hidden">
        <div class="absolute top-0 right-0 h-full w-[40%] hidden lg:block" style="background-color: #c1c1c1;"></div>
        <div class="relative z-10 max-w-8xl mt-8 mx-auto px-4 md:px-6 lg:px-40 pt-8 md:pt-10">
            <div
                class="w-full shadow-none rounded-none p-6 md:p-10 flex flex-col lg:flex-row items-center gap-1 bg-[#FFFFF00]">
                {{-- CAMBIO: items-start a items-center en el contenedor principal --}}

                <div class="w-full lg:w-3/4 flex justify-center lg:justify-end items-center order-1 lg:order-2">
                    {{-- CAMBIO: order-1 lg:order-2 para controlar el orden --}}
                    <img src="{{ asset('/DnefDocumentos/public/img/lineas de trabajo/nosotros-inter.png') }}" alt="Decoración"
                        class="object-contain max-h-[25rem] md:max-h-[35rem] lg:max-h-[50rem] w-[90%]" />
                </div>

                <div
                    class="mt-4 md:mt-8 lg:mt-24 w-full lg:w-1/3 flex flex-col items-center lg:items-end text-center lg:text-left order-2 lg:order-1">
                    {{-- CAMBIO: order-2 lg:order-1 para controlar el orden --}}
                    <div>
                        <h1 class="text-3xl md:text-5xl font-extrabold mb-4 md:mb-12 leading-tight" style="color: #e58622;">
                            {{-- Ajuste de mb --}}
                        </h1>
                        <p class="text-base md:text-xl lg:text-3xl text-[#333] leading-snug mt-2"> {{-- Ajuste de tamaño de fuente para responsive --}}
                            Tenemos <strong>cuatro líneas de trabajo</strong>
                            estratégicas centrales que
                            responden a las demandas de la
                            ciudadanía en su conjunto, y las de
                            los públicos objetivos priorizados,
                            con el fin de cumplir con la
                            intervención educativa prevista
                            para cada año.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="bg-[#F1F3F6] py-10 md:py-16 lg:py-20"> {{-- Ajuste de padding vertical --}}
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <div
                    class="bg-white max-w-2xs mx-auto shadow-[0_8px_30px_rgba(0,0,0,0.35)] p-4 flex flex-col items-center text-center min-h-[460px]">
                    <img src="{{ asset('/DnefDocumentos/public/img/lineas de trabajo/Mesa de trabajo 6.png') }}" alt="Igualdad Política"
                        class="h-52 object-contain">
                    <p class="text-xl text-gray-700 mb-6">
                        Promueve la participación política de mujeres, pueblos indígenas, afroperuanos y personas con
                        discapacidad.
                    </p>
                    <a href="{{ url('/lineas-de-trabajo/igualdadPolitica') }}"
                        class="mt-auto w-full text-center px-6 py-4 text-xl bg-[#056684] text-white rounded-md font-semibold hover:opacity-90 transition">
                        Explorar contenidos
                    </a>
                </div>

                <div
                    class="bg-white max-w-2xs mx-auto shadow-[0_8px_30px_rgba(0,0,0,0.35)] p-4 flex flex-col items-center text-center min-h-[460px]">
                    <img src="{{ asset('/DnefDocumentos/public/img/lineas de trabajo/Mesa de trabajo 7.png') }}" alt="Voto Informado"
                        class="h-52 object-contain mb-4">
                    <p class="text-xl text-gray-700 mb-6">
                        Orienta a electores y organizaciones políticas con enfoque cívico y electoral.
                    </p>
                    <a href="{{ url('/lineas-de-trabajo/votoInformado') }}"
                        class="mt-auto w-full text-center px-6 py-4 text-xl bg-[#BE1717] text-white rounded-md font-semibold hover:opacity-90 transition">
                        Conoce tu voto
                    </a>
                </div>

                <div
                    class="bg-white max-w-2xs mx-auto shadow-[0_8px_30px_rgba(0,0,0,0.35)] p-4 flex flex-col items-center text-center min-h-[460px]">
                    <img src="{{ asset('/DnefDocumentos/public/img/lineas de trabajo/Mesa de trabajo 1.png') }}" alt="Voluntariado"
                        class="h-52 object-contain">
                    <p class="text-xl text-gray-700 mb-6">
                        Impulsa la inclusión juvenil en la vida política y social para fortalecer la ciudadanía y
                        democracia.
                    </p>
                    <a href="{{ url('/lineas-de-trabajo/voluntariadoJNE') }}"
                        class="mt-auto w-full text-center px-6 py-4 text-xl bg-[#D68723] text-white rounded-md font-semibold hover:opacity-90 transition">
                        Quiero participar
                    </a>
                </div>

                <div
                    class="bg-white max-w-2xs mx-auto shadow-[0_8px_30px_rgba(0,0,0,0.35)] p-4 flex flex-col items-center text-center min-h-[460px]">
                    <img src="{{ asset('/DnefDocumentos/public/img/lineas de trabajo/Mesa de trabajo 8.png') }}" alt="Zona Educativa"
                        class="h-52 object-contain">
                    <p class="text-xl text-gray-700 mb-6">
                        Recursos educativos para docentes, estudiantes y ciudadanos que promueven la ciudadanía democrática.
                    </p>
                    <a href="{{ url('/lineas-de-trabajo/zonaEducativa') }}"
                        class="mt-auto w-full text-center px-6 py-4 text-xl bg-[#2DBEB2] text-white rounded-md font-semibold hover:opacity-90 transition">
                        Ir a la zona
                    </a>
                </div>

            </div>
        </div>
    </section>

@endsection
