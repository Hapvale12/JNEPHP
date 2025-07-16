@extends('layouts.app')

@section('title', 'Conócenos')

@section('content')

    <x-cabecera titulo="" descripcion="" imagen="img/DNE.jpg" tamanoTitulo="" tamanoDescripcion="" fondoContenido="#FFFFF00"
        colorFondoDerecha='#c1c1c1' estiloImagen="margin-top: 1rem; max-height: 60rem;" margenTopContenido="mt-5"
        paddingContenido="px-0" paddingContenidoInterno="p-4 md:p-5" />

    <!-- Espacio entre franjas -->
    <div class="h-2 bg-transparent"></div>

    <section class="text-gray-600 body-font relative">
    {{-- Changed to flex-col for mobile/tablet, then lg:flex-row for desktop --}}
    <div class="container px-5 py-24 mx-auto flex flex-col lg:flex-row gap-4">

        {{-- Mapa (ordered first on mobile/tablet, last on desktop) --}}
        <div
            class="w-full lg:w-2/5 bg-gray-300 rounded-lg overflow-hidden p-10 flex items-end justify-start relative h-64 sm:h-96 lg:h-auto order-1 lg:order-last">
            {{-- Order for mobile/tablet and desktop --}}
            <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map"
                marginheight="0" marginwidth="0" scrolling="no"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.7610471587527!2d-77.03965582570072!3d-12.05777084206584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8c5c721b069%3A0x6b4e9e0e5a6f8b1a!2sJNE%20-%20Jurado%20Nacional%20de%20Elecciones!5e0!3m2!1ses-419!2spe!4v1700000000000!5m2!1ses-419!2spe"
                style="border:0; filter: grayscale(1) contrast(1.2) opacity(0.4);" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        {{-- Formulario (ordered second on mobile/tablet, first on desktop) --}}
        <div class="lg:w-3/5 w-full pl-4 pr-4 py-8 order-2 lg:order-first">
            <h2 class="text-[#666] text-4xl font-extrabold mb-6 text-center md:text-left leading-tight">
                {{-- Aquí va el título del formulario, si lo hay --}}
            </h2>

            <form action="#" method="POST" class="space-y-5">

                {{-- Nombres y Apellidos --}}
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="w-full">
                        <label for="nombre" class="block text-lg text-black mb-1">
                            Nombres <span class="text-red-600">*</span>
                        </label>
                        <input type="text" id="nombre" name="nombre" maxlength="15"
                            pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+" required
                            class="bg-[#e7e7e7] w-full border border-white rounded px-4 py-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-400"
                            title="Solo se permiten letras y un máximo de 15 caracteres">
                    </div>

                    <div class="w-full">
                        <label for="apellidos" class="block text-lg text-black mb-1">
                            Apellidos <span class="text-red-600">*</span>
                        </label>
                        <input type="text" id="apellidos" name="apellidos" maxlength="15"
                            pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+" required
                            class="bg-[#e7e7e7] w-full border border-white rounded px-4 py-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-400"
                            title="Solo se permiten letras y un máximo de 15 caracteres">
                    </div>
                </div>

                {{-- DNI --}}
                <div>
                    <label for="dni" class="block text-lg text-black mb-1">
                        DNI <span class="text-red-600">*</span>
                    </label>
                    <input type="text" id="dni" name="dni" minlength="7" maxlength="9" pattern="\d{7,9}"
                        required
                        class="bg-[#e7e7e7] w-full border border-gray-300 rounded px-4 py-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-400"
                        title="El DNI debe tener entre 7 y 9 dígitos numéricos.">
                </div>

                {{-- Teléfono y Correo --}}
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="w-full">
                        <label for="telefono" class="block text-lg text-black mb-1">
                            Célular de contacto <span class="text-red-600">*</span>
                        </label>
                        <input type="text" id="telefono" name="telefono" maxlength="9" pattern="9\d{8}" required
                            inputmode="numeric"
                            class="bg-[#e7e7e7] w-full border border-gray-300 rounded px-4 py-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-400"
                            title="El número debe tener 9 dígitos y comenzar con 9.">
                    </div>

                    <div class="w-full">
                        <label for="email" class="block text-lg text-black mb-1">
                            Correo electrónico <span class="text-red-600">*</span>
                        </label>
                        <input type="email" id="email" name="email" required
                            class="bg-[#e7e7e7] w-full border border-gray-300 rounded px-4 py-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-400">
                    </div>
                </div>

                {{-- Mensaje --}}
                <div>
                    <label for="message" class="block text-lg text-black mb-1">
                        Mensaje <span class="text-red-600">*</span>
                    </label>
                    <textarea id="message" name="message" rows="4" required
                        class="w-full border bg-[#e7e7e7] border-gray-300 rounded px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-400 resize-none"></textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="text-lg bg-[#be1717] hover:bg-[#e07600] text-white font-bold py-2 px-8 rounded transition">
                        Enviar datos
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

    <!-- Espacio entre franjas -->
    <div class="h-12 bg-transparent"></div>

@endsection
