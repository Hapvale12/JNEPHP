@extends('layouts.app')

@section('title', 'Igualdad Política - JNE')

@section('content')
    <div class="relative w-full h-auto bg-white overflow-hidden">
    {{-- Fondo derecho para desktop --}}
    <div class="absolute top-0 right-0 h-full w-[35%] hidden lg:block" style="background-color: #056684;"></div>

    <div class="relative z-10 max-w-8xl mt-8 mx-auto px-4 md:px-6 lg:px-40 pt-8 md:pt-10">
        <div
            class="w-full shadow-none rounded-none p-6 md:px-10 pt-10 pb-0 flex flex-col lg:flex-row items-center gap-1 bg-[#FFFFF00]">
            {{-- Contenedor de la imagen --}}
            <div class="relative w-full lg:w-3/6 flex justify-center lg:justify-end items-center lg:items-end lg:self-end order-1 lg:order-2">
                <div class="absolute top-0 right-0 bottom-0 left-[50%] md:left-[50%] lg:hidden bg-[#056684]"></div>
                <img src="{{ asset('/DnefDocumentos/public/img/IGUALDAD POLITICA/igualdad.png') }}" alt="Decoración"
                    class="object-contain max-h-[20rem] md:max-h-[30rem] lg:max-h-[42rem] w-[100%] relative z-10 p-4 md:px-6 pb-0" />
                    {{-- Añadido padding a la imagen para el espacio con el fondo --}}
            </div>

            {{-- Contenedor del texto --}}
            <div
                class="mt-4 md:mt-8 lg:mt-24 w-full lg:w-3/6 flex flex-col items-center lg:items-end text-center lg:text-left order-2 lg:order-1">
                <div>
                    <h1 class="text-4xl md:text-5xl font-extrabold mb-12 leading-tight" style="color: #056684;">
                        IGUALDAD <br> POLÍTICA
                    </h1>
                    <p class="text-base md:text-xl lg:text-2xl text-[#333] leading-snug mt-2">
                        El programa Igualdad Política promueve y desarrolla
                        acciones educativas, de formación y asistencia técnica
                        para el fortalecimiento de la participación política de
                        poblaciones en situación de vulnerabilidad y exclusión,
                        como son: mujeres, pueblos indígenas, pueblo afroperuano y personas con discapacidad. <br> <br>
                        También realiza labores de comunicación e
                        información que se encuentra en nuestra plataforma
                        web <a class="text-red-600"> OBSERVA IGUALDAD</a>, donde se encuentran
                        recursos educativos sobre la participación política de
                        las poblaciones en situación de vulnerabilidad y
                        exclusión.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="relative flex flex-col items-center justify-center mt-8 md:mt-12 lg:mt-16 py-10">

        <a href="https://observaigualdad.jne.gob.pe" class="z-0">
            <img src="{{ asset('/DnefDocumentos/public/img/IGUALDAD POLITICA/1Mesa de Trabajo 11@4x-8.png') }}" alt="Botón gráfico"
                class="w-full max-w-[150px] md:max-w-sm transition-transform duration-150 ease-in hover:-translate-y-1 active:translate-y-0">
        </a>

        <div class="absolute left-[73%] transform -translate-x-1/2 -translate-y-1/2 lg:left-8/13 lg:transform-none z-10">
            <img src="{{ asset('/DnefDocumentos/public/img/VOTO INFORMADO/1Mesa de trabajo 9@4x-8.png') }}" alt="Ícono decorativo"
                class="w-10 h-10 md:w-14 md:h-14">
        </div>

    </div>


    <section class="w-full flex flex-col md:flex-row py-6">
        <div
            class="w-full md:w-1/2 bg-[#056684] text-white flex flex-col items-center justify-center text-center px-6 py-6">
            <img src="{{ asset('/DnefDocumentos/public/img/igualdad politica/1Mesa de trabajo 12@4x-8.png') }}" alt="Icono objetivo"
                class="w-32 h-24 md:w-40 md:h-28 mb-6 md:mb-10">
            <h3 class="text-yellow-400 text-2xl md:text-3xl font-bold mb-4">Objetivo general</h3>
            <p class="text-base md:text-xl text-justify max-w-md leading-relaxed">
                Promover la participación política ciudadana, particularmente de las poblaciones en situación de
                vulnerabilidad y exclusión, con un enfoque de derechos humanos, a través del trabajo articulado con la
                sociedad civil organizada, fortaleciendo la construcción de una ciudadanía crítica, activa y atenta a las
                dinámicas políticas y sociales.
            </p>
        </div>

        <div
            class="w-full md:w-1/2 bg-[#E5E5E5] text-[#333] flex flex-col items-center justify-center text-center px-6 py-6">
            <img src="{{ asset('/DnefDocumentos/public/img/igualdad politica/1Mesa de trabajo 13@4x-8.png') }}" alt="Icono qué hacemos"
                class="mt-6 w-28 h-32 md:w-32 md:h-38 mb-6 md:mb-11">
            <h3 class="text-[#056684] text-2xl md:text-3xl font-bold mb-4">¿Qué hacemos?</h3>
            <p class="text-base md:text-xl text-justify max-w-md leading-relaxed mb-4">
                Desarrollamos acciones educativas de formación a través de talleres, cursos y programas para fortalecer
                capacidades de poblaciones en situación de vulnerabilidad y exclusión. Asimismo, acciones de información y
                comunicación mediante mesas de diálogo y generación de recursos educativos en materia político-electoral
                dirigida a organizaciones sociales, instituciones aliadas y ciudadanía en general.
            </p>
        </div>
    </section>

@endsection
