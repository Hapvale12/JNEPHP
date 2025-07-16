@extends('layouts.app')

@section('title', 'Conócenos')

@section('content')
    <div class="h-12 bg-transparent"></div>

    <section class="text-gray-600 body-font py-10">
        <div class="container mx-auto px-5">
            <div class="w-full mb-12">
                <x-sliderNoticiero :images="[
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UPN/Universidad UPN (49).jpg'),
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UPN/Universidad UPN (1).jpg'),
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UPN/Universidad UPN (14).jpg'),
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UPN/Universidad UPN (25).jpg'),
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UPN/Universidad UPN (44).jpg'),
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UPN/Universidad UPN (59).jpg'),
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UPN/Universidad UPN (61).jpg'),
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UPN/Universidad UPN (62).jpg'),
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UPN/Universidad UPN (73).jpg'),
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UPN/Universidad UPN (75).jpg'),
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UPN/Universidad UPN (76).jpg'),
                    asset('/DnefDocumentos/public/img/noticias/EVENTO UPN/Universidad UPN (77).jpg'),
                ]" />

                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-gray-800 mt-8">
                    <h3 class="text-3xl md:text-4xl font-extrabold text-center text-[#CD1316] mb-6 leading-tight">
                        PROGRAMA DE PARTICIPACIÓN POLÍTICA JUVENIL Y VOLUNTARIADO DEL JURADO NACIONAL DE ELECCIONES
                    </h3>
                    <div class="bg-gray-100 p-6 rounded-lg mb-6 shadow-md text-lg">
                        <p class="mb-2"><strong class="text-[#07678D]">EVENTO:</strong> "Jóvenes que construyen democracia: Programa del Voluntariado – JNE"</p>
                        <p class="mb-2"><strong class="text-[#00AF9D]">MOTIVO:</strong> Convocatoria al Voluntariado 2025</p>
                        <p><strong class="text-[#E0B673]">PARTICIPARON:</strong> 200 asistentes</p>
                    </div>
                    <p class="text-lg md:text-xl leading-relaxed mb-4">
                        El Jurado Nacional de Elecciones con su programa del voluntariado visita la universidad Privada del Norte 
                        en un evento único con el motivo de invitar a sus alumnos a formar parte de la historia democratica 
                        al inscribirce al voluntariado del JNE y participar para las Elecciones Generales 2026.
                    </p>
                    <p class="text-lg md:text-xl leading-relaxed">
                        Para el evento contamos con grandes expositores, Pdte. Roberto Burneo y el magistrado 
                        del pleno 4 el Dr. Rubén Torres, quienes explicaron la importancia de los jovenes en las próximas elecciones. 
                        Junto con el programa de Zona Educativa y Fact Cheking se realizarón actividades de educación e información 
                        para motivar a inscribirse al programa del Voluntariado del JNE.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="h-12 bg-transparent"></div>

    <section class="text-gray-600 body-font py-10">
        <div class="container mx-auto px-5">
            <h2 class="text-3xl font-bold text-center text-[#BE1717] mb-10">Más Noticias</h2>

            <x-noticias :noticias="[
                [
                    'imagen' => asset('/DnefDocumentos/public/img/noticias/EVENTO UARM/2B9A1417.jpg'),
                    'titulo' => 'El JNE llega a la Universidad Antonio Ruiz de Montoya',
                    'descripcion' => 'En el marco del Programa del Voluntariado, el Jurado Nacional de Elecciones invitó a los estudiantes a sumarse como voluntarios rumbo a las Elecciones Generales 2026.',
                    'enlace' => '/noticias-y-eventos/JNE1',
                    'fecha' => '09 de Julio, 2025'
                ],
                [
                    'imagen' => asset('/DnefDocumentos/public/img/noticias/JNE/Pueblo Afroperuano2.jpg'),
                    'titulo' => 'JNE presenta Guía para fortalecer la igualdad y la inclusión del Pueblo Afroperuano',
                    'descripcion' =>
                        'El JNE presentará una guía elaborada con participación activa del Pueblo Afroperuano para promover su inclusión política y ...',
                    'enlace' => '/noticias-y-eventos/JNE3',
                    'fecha' => '27 de Junio, 2025',
                ],
            ]" />
        </div>
    </section>

@endsection