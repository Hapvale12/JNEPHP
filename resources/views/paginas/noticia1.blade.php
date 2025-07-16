@extends('layouts.app')

@section('title', 'Conócenos')

@section('content')
    <div class="h-14 bg-transparent"></div>

    {{-- Envuelve todo el contenido destacado dentro de un container para aplicar márgenes --}}
    <section class="text-gray-600 body-font py-10">
        <div class="container mx-auto px-5"> {{-- ESTE ES EL DIV CLAVE PARA LOS MÁRGENES --}}
            <div class="w-full mb-12"> {{-- Contenedor de la primera noticia --}}
                <x-sliderNoticiero :images="[
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UARM/2B9A1417.jpg'),
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UARM/2B9A1433.jpg'),
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UARM/2B9A1452.jpg'),
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UARM/2B9A1462.jpg'),
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UARM/2B9A1480.jpg'),
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UARM/2B9A1496.jpg'),
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UARM/2B9A1518.jpg'),
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UARM/2B9A1521.jpg'),
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UARM/2B9A1522.jpg'),
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UARM/2B9A1553.jpg'),
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UARM/2B9A1588.jpg'),
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UARM/2B9A1625.jpg'),
                ]" />

                {{-- Aquí ajustamos el padding del texto para que no se extienda demasiado en pantallas grandes --}}
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-gray-800 mt-8">
                    <h3 class="text-3xl md:text-4xl font-extrabold text-center text-gray-600 mb-6 leading-tight">
                        PROGRAMA DE PARTICIPACIÓN POLÍTICA JUVENIL Y VOLUNTARIADO DEL JURADO NACIONAL DE ELECCIONES
                    </h3>
                    <div class="bg-gray-100 p-6 rounded-lg mb-6 shadow-md text-lg">
                        <p class="mb-2"><strong class="text-[#07678D]">EVENTO:</strong> "Jóvenes que construyen democracia:
                            Programa del Voluntariado – JNE"</p>
                        <p class="mb-2"><strong class="text-[#00AF9D]">MOTIVO:</strong> Convocatoria al Voluntariado 2025
                        </p>
                        <p><strong class="text-[#E0B673]">PARTICIPARON:</strong> 122 asistentes</p>
                    </div>
                    <p class="text-lg md:text-xl leading-relaxed mb-4">
                        El Jurado Nacional de Elecciones con su programa del voluntariado visita la universidad Antonio
                        Ruiz de Montoya para invitara sus alumnos a formar parte de la historia democratica inscribiendoce
                        al voluntariado del JNE y participar para las Elecciones Generales 2026.
                    </p>
                    <p class="text-lg md:text-xl leading-relaxed">
                        Junto con la participación de Fact Cheking e INFOgob se dio la conferencia "Jóvenes que construyen
                        democracia:
                        Programa del Voluntariado – JNE" para motivar a inscribirse al programa del Voluntariado del JNE.
                    </p>
                </div>
            </div>
        </div> {{-- Cierre del div container para la primera noticia --}}
    </section>

    <div class="h-12 bg-transparent"></div>

    <section class="text-gray-600 body-font py-10">
        <div class="container mx-auto px-5"> {{-- Este div ya estaba bien para el carrusel --}}
            <h2 class="text-3xl font-bold text-center text-[#BE1717] mb-10">Más Noticias</h2> {{-- Cambié el título aquí para diferenciar --}}

            <x-noticias :noticias="[
                [
                    'imagen' => asset('/DnefDocumentos/public/img/noticias/EVENTO UPN/Universidad UPN (25).jpg'),
                    'titulo' => 'El JNE inspira a los jóvenes de la UPN a sumarse al voluntariado electoral',
                    'descripcion' =>
                        'En un evento especial en la Universidad Privada del Norte, el Jurado Nacional de Elecciones invitó a los estudiantes a ser parte del Programa del Voluntariado.',
                    'enlace' => '/noticias-y-eventos/JNE2',
                    'fecha' => '03 de Julio, 2025',
                ],
                [
                    'imagen' => asset('/DnefDocumentos/public/img/noticias/JNE/Pueblo Afroperuano2.jpg'),
                    'titulo' => 'JNE presenta Guía para fortalecer la igualdad y la inclusión del Pueblo Afroperuano',
                    'descripcion' =>
                        'El JNE presentará una guía elaborada con participación activa del Pueblo Afroperuano para promover su inclusión política y ...',
                    'enlace' => '/noticias-y-eventos/JNE3',
                    'fecha' => '27 de Junio, 2025',
                ],
                // Si tenías más noticias en el carrusel, colócalas aquí.
                // Asegúrate de que la primera noticia destacada no se repita aquí.
            ]" />
        </div>
    </section>

@endsection
