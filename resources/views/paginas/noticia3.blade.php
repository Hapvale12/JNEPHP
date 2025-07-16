@extends('layouts.app')

@section('title', 'Conócenos')

@section('content')

    <div class="h-12 bg-transparent"></div>

    <section class="text-gray-600 body-font py-10">
        <div class="container mx-auto px-5">
            <div class="w-full mb-12">
                <x-sliderNoticiero :images="[
                    asset('/DnefDocumentos/public/img/noticias/JNE/Pueblo Afroperuano1.jpg'),
                    asset('/DnefDocumentos/public/img/noticias/JNE/Pueblo Afroperuano2.jpg'),
                    asset('/DnefDocumentos/public/img/noticias/JNE/Pueblo Afroperuano3.jpg'),
                    asset('/DnefDocumentos/public/img/noticias/JNE/Pueblo Afroperuano4.jpg'),
                ]" />

                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-gray-800 mt-8">
                    <h3 class="text-3xl md:text-4xl font-extrabold text-center text-[#CD1316] mb-6 leading-tight">
                        JNE presenta Guía para fortalecer la igualdad y la inclusión del Pueblo Afroperuano en los procesos
                        electorales
                    </h3>
                    <div class="bg-gray-100 p-6 rounded-lg mb-6 shadow-md text-lg">
                        <p class="mb-2"><strong class="text-[#07678D]">EVENTO:</strong> Presentación de Guía para la
                            inclusión del Pueblo Afroperuano</p>
                        <p class="mb-2"><strong class="text-[#00AF9D]">MOTIVO:</strong> Impulsar la participación política
                            en condiciones de igualdad</p>
                        <p><strong class="text-[#E0B673]">FECHA Y LUGAR:</strong> 27 de junio, 10:00 a.m. (modalidad híbrida
                            desde Auditorio sede Nazca del JNE)</p>
                    </div>
                    <p class="text-lg md:text-xl leading-relaxed mb-4">
                        El Jurado Nacional de Elecciones (JNE), a través de la Dirección Nacional de Educación y Formación
                        Cívica Ciudadana (DNEF),
                        presentará la “Guía para fortalecer la igualdad y promover la inclusión del Pueblo Afroperuano en
                        los procesos electorales”.
                        El documento busca impulsar la participación política del Pueblo Afroperuano en condiciones de
                        igualdad y no discriminación,
                        atendiendo las barreras históricas de exclusión y subrepresentación. Fue elaborado con enfoque
                        intercultural y participación activa de 18 organizaciones
                        afroperuanas, sociedad civil y entidades del sistema electoral.
                    </p>
                    <p class="text-lg md:text-xl leading-relaxed mb-4">
                        Entre sus principales aportes, la Guía incluye:
                    </p>
                    <ul class="list-disc list-inside text-lg md:text-xl leading-relaxed mb-4 pl-4">
                        <li>Recomendaciones para prevenir y sancionar la discriminación étnico-racial.</li>
                        <li>Buenas prácticas regionales e internacionales.</li>
                        <li>Herramientas para organizaciones políticas, sociedad civil y organismos electorales.</li>
                    </ul>
                    <p class="text-lg md:text-xl leading-relaxed mb-4">
                        La presentación contará con ponencias de expertos como Mariela Noles, representantes del Grupo de
                        Trabajo del Pueblo Afroperuano
                        y del NDI, y cerrará con las palabras del presidente del JNE, Dr. Roberto Burneo. También se
                        compartirán experiencias regionales de América Latina.
                    </p>
                    <p class="text-lg md:text-xl leading-relaxed">
                        Esta iniciativa reafirma el compromiso del JNE con una democracia representativa, inclusiva y libre
                        de discriminación.
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
                    'imagen' => asset('/DnefDocumentos/public/img/noticias/EVENTO UPN/Universidad UPN (25).jpg'),
                    'titulo' => 'El JNE inspira a los jóvenes de la UPN a sumarse al voluntariado electoral',
                    'descripcion' =>
                        'En un evento especial en la Universidad Privada del Norte, el Jurado Nacional de Elecciones invitó a los estudiantes a ser parte del Programa del Voluntariado.',
                    'enlace' => '/noticias-y-eventos/JNE2',
                    'fecha' => '03 de Julio, 2025',
                ],
                [
                    'imagen' => asset('/DnefDocumentos/public/img/noticias/EVENTO UARM/2B9A1417.jpg'),
                    'titulo' => 'El JNE llega a la Universidad Antonio Ruiz de Montoya',
                    'descripcion' =>
                        'En el marco del Programa del Voluntariado, el Jurado Nacional de Elecciones invitó a los estudiantes a sumarse como voluntarios rumbo a las Elecciones Generales 2026.',
                    'enlace' => '/noticias-y-eventos/JNE1',
                    'fecha' => '09 de Julio, 2025',
                ],
            ]" />
        </div>
    </section>

@endsection
