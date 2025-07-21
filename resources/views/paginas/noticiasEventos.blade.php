@extends('layouts.app')

@section('title', 'Noticias y Eventos')

@section('content')

    <x-cabecera titulo="" descripcion="" imagen="/DnefDocumentos/public/img/contactenos.png" tamanoTitulo="" tamanoDescripcion=""
        fondoContenido="#FFFFF00" colorFondoDerecha='#c1c1c1' estiloImagen="margin-top: 1rem; max-height: 60rem;"
        margenTopContenido="mt-5" paddingContenido="px-0" paddingContenidoInterno="p-4 md:p-5" />

    <!-- Espacio entre franjas -->
    <div class="h-12 bg-transparent"></div>

    <!-- noticias -->
    <section class="text-gray-600 body-font py-10">
        <div class="container mx-auto px-5">
            <h2 class="text-3xl font-bold text-center text-[#BE1717] mb-10">Últimas Noticias</h2>

            <x-noticias :noticias="[
                [
                    'imagen' => asset('/DnefDocumentos/public/img/noticias/EVENTO UARM/2B9A1417.jpg'),
                    'titulo' => 'El JNE llega a la Universidad Antonio Ruiz de Montoya',
                    'descripcion' => 'En el marco del Programa del Voluntariado, el Jurado Nacional de Elecciones invitó a los estudiantes a sumarse como voluntarios rumbo a las Elecciones Generales 2026.',
                    'enlace' => '/noticias-y-eventos/JNE1',
                    'fecha' => '09 de Julio, 2025'
                    
                ],
                [
                    'imagen' => asset('/DnefDocumentos/public/img/noticias/EVENTO UPN/Universidad UPN (25).jpg'),
                    'titulo' => 'El JNE inspira a los jóvenes de la UPN a sumarse al voluntariado electoral',
                    'descripcion' => 'En un evento especial en la Universidad Privada del Norte, el Jurado Nacional de Elecciones invitó a los estudiantes a ser parte del Programa del Voluntariado.',
                    'enlace' => '/noticias-y-eventos/JNE2',
                    'fecha' => '03 de Julio, 2025'
                ],
                [
                    'imagen' => asset('/DnefDocumentos/public/img/noticias/JNE/Pueblo Afroperuano2.jpg'),
                    'titulo' => 'JNE presenta Guía para fortalecer la igualdad y la inclusión del Pueblo Afroperuano',
                    'descripcion' => 'El JNE presentará una guía elaborada con participación activa del Pueblo Afroperuano para promover su inclusión política y ...',
                    'enlace' => '/noticias-y-eventos/JNE3', 
                    'fecha' => '27 de Junio, 2025'
                ],
            ]" />
        </div>
    </section>

@endsection
