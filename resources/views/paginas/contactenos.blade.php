@extends('layouts.app')

@section('title', 'Conócenos')

@section('content')

    <x-cabecera titulo="" descripcion="" imagen="/DnefDocumentos/public/img/DNE.jpg" tamanoTitulo="" tamanoDescripcion="" fondoContenido="#FFFFF00"
        colorFondoDerecha='#c1c1c1' estiloImagen="margin-top: 1rem; max-height: 60rem;" margenTopContenido="mt-5"
        paddingContenido="px-0" paddingContenidoInterno="p-4 md:p-5" />

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

                {{-- FORMULARIO: Eliminado 'action' y 'method' del <form>, añadido 'id' --}}
                <form id="contactForm" class="space-y-5">
                    @csrf {{-- ¡CRÍTICO! Añade el token CSRF para seguridad en Laravel --}}

                    {{-- Mensajes de Éxito/Error y Errores de Validación (ahora ocultos por defecto y gestionados por JS) --}}
                    <div id="successMessage" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 hidden" role="alert">
                        <span class="block sm:inline"></span>
                    </div>

                    <div id="errorMessage" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 hidden" role="alert">
                        <span class="block sm:inline"></span>
                    </div>

                    <div id="validationErrors" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 hidden" role="alert">
                        <h4 class="font-bold">¡Error de validación!</h4>
                        <ul></ul> {{-- Aquí se insertarán los errores de validación con JavaScript --}}
                    </div>

                    {{-- Nombres y Apellidos --}}
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="w-full">
                            <label for="nombre" class="block text-lg text-black mb-1">
                                Nombres <span class="text-red-600">*</span>
                            </label>
                            <input type="text" id="nombre" name="nombre" maxlength="20"
                                pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+" required
                                class="bg-[#e7e7e7] w-full border border-white rounded px-4 py-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-400"
                                title="Solo se permiten letras y un máximo de 15 caracteres"
                                value="{{ old('nombre') }}"> {{-- old() es útil si hay una recarga inesperada (ej. por errores de PHP antes del JS) --}}
                        </div>

                        <div class="w-full">
                            <label for="apellidos" class="block text-lg text-black mb-1">
                                Apellidos <span class="text-red-600">*</span>
                            </label>
                            <input type="text" id="apellidos" name="apellidos" maxlength="20"
                                pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+" required
                                class="bg-[#e7e7e7] w-full border border-white rounded px-4 py-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-400"
                                title="Solo se permiten letras y un máximo de 15 caracteres"
                                value="{{ old('apellidos') }}">
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
                            title="El DNI debe tener entre 7 y 9 dígitos numéricos."
                            value="{{ old('dni') }}">
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
                                title="El número debe tener 9 dígitos y comenzar con 9."
                                value="{{ old('telefono') }}">
                        </div>

                        <div class="w-full">
                            <label for="email" class="block text-lg text-black mb-1">
                                Correo electrónico <span class="text-red-600">*</span>
                            </label>
                            <input type="email" id="email" name="email" required
                                class="bg-[#e7e7e7] w-full border border-gray-300 rounded px-4 py-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-400"
                                value="{{ old('email') }}">
                        </div>
                    </div>

                    {{-- Mensaje --}}
                    <div>
                        <label for="message" class="block text-lg text-black mb-1">
                            Mensaje <span class="text-red-600">*</span>
                        </label>
                        <textarea id="message" name="message" rows="4" required
                            class="w-full border bg-[#e7e7e7] border-gray-300 rounded px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-400 resize-none">{{ old('message') }}</textarea>
                    </div>

                    <div class="flex justify-end">
                        {{-- Añadido ID al botón para deshabilitarlo/habilitarlo --}}
                        <button type="submit" id="submitBtn"
                            class="text-lg bg-[#be1717] hover:bg-[#e07600] text-white font-bold py-2 px-8 rounded transition">
                            Enviar datos
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="h-12 bg-transparent"></div>

    {{-- SCRIPT PARA MANEJAR EL ENVÍO AJAX --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            const submitBtn = document.getElementById('submitBtn');
            const successMessageDiv = document.getElementById('successMessage');
            const errorMessageDiv = document.getElementById('errorMessage');
            const validationErrorsDiv = document.getElementById('validationErrors');
            const validationErrorsList = validationErrorsDiv.querySelector('ul'); // El <ul> dentro del div de errores

            // Función para ocultar todos los mensajes y limpiar errores previos
            function hideAllMessages() {
                successMessageDiv.classList.add('hidden');
                errorMessageDiv.classList.add('hidden');
                validationErrorsDiv.classList.add('hidden');
                validationErrorsList.innerHTML = ''; // Limpiar errores previos de la lista
            }

            // Escuchar el evento 'submit' del formulario
            contactForm.addEventListener('submit', function(event) {
                event.preventDefault(); // <-- ¡MUY IMPORTANTE! Detener el envío normal del formulario

                hideAllMessages(); // Ocultar cualquier mensaje anterior

                submitBtn.disabled = true; // Deshabilitar el botón para evitar envíos múltiples
                submitBtn.textContent = 'Enviando...'; // Cambiar texto del botón

                // Recolectar datos del formulario usando FormData
                const formData = new FormData(contactForm);
                const data = {};
                formData.forEach((value, key) => {
                    data[key] = value;
                });

                // Enviar datos usando Fetch API
                fetch('{{ route('contact.submit') }}', { // Apunta a tu ruta de Laravel (ContactController@submit)
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': data._token // Obtener el token CSRF que Laravel genera
                    },
                    body: JSON.stringify(data) // Convertir los datos a JSON
                })
                .then(response => {
                    submitBtn.disabled = false; // Habilitar el botón de nuevo
                    submitBtn.textContent = 'Enviar datos'; // Restaurar texto del botón

                    // Manejo de respuestas HTTP
                    // Si la respuesta es 422 (Errores de validación de Laravel)
                    if (response.status === 422) {
                        return response.json().then(errorData => {
                            validationErrorsDiv.classList.remove('hidden'); // Mostrar div de errores
                            // Iterar sobre los errores y añadirlos a la lista
                            for (const field in errorData.errors) {
                                errorData.errors[field].forEach(message => {
                                    const li = document.createElement('li');
                                    li.textContent = message;
                                    validationErrorsList.appendChild(li);
                                });
                            }
                            // Rechazar la promesa para que el control fluya al .catch y evitar el .then(success)
                            return Promise.reject('Validation Failed');
                        });
                    }
                    // Si la respuesta no es OK (ej. 500 Server Error, 400 Bad Request, etc.)
                    if (!response.ok) {
                        return response.json().then(errorData => {
                            errorMessageDiv.classList.remove('hidden'); // Mostrar div de error general
                            errorMessageDiv.querySelector('span').textContent = errorData.message || 'Hubo un error en el servidor.';
                            return Promise.reject('Server Error'); // Rechazar para salir del flujo .then()
                        });
                    }
                    // Si la respuesta es OK (ej. 200 Success)
                    return response.json();
                })
                .then(data => {
                    // Éxito: mostrar mensaje de éxito y limpiar el formulario
                    successMessageDiv.classList.remove('hidden');
                    successMessageDiv.querySelector('span').textContent = data.message || '¡Mensaje enviado con éxito!';
                    contactForm.reset(); // Limpiar todos los campos del formulario
                })
                .catch(error => {
                    // Captura errores de red (ej. servidor no disponible) o errores lanzados explícitamente en los .then() anteriores
                    console.error('Error durante el envío del formulario:', error);
                    // Solo muestra el mensaje de error genérico si no fue un error de validación o servidor ya manejado
                    if (error !== 'Validation Failed' && error !== 'Server Error') {
                        errorMessageDiv.classList.remove('hidden');
                        errorMessageDiv.querySelector('span').textContent = 'Error de conexión o inesperado. Por favor, inténtelo de nuevo más tarde.';
                    }
                });
            });
        });
    </script>

@endsection