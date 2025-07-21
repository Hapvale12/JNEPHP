@extends('layouts.app')

@section('title', 'Inscripciones JNE')

@section('content')

<div class="relative w-full h-auto bg-white overflow-hidden">
    {{-- CAMBIO: Añadido 'hidden md:block' para ocultar en móviles y tablets, y mostrar en desktop --}}
    <div class="absolute top-0 right-0 h-full hidden lg:block w-[35%]" style="background-color: #e58622;"></div>

    <div class="relative z-10 max-w-8xl mx-auto px-2 md:px-8 py-8 lg:px-40 lg:pt-10">
        <div
            class="w-full shadow-none rounded-none p-4 md:p-10 flex flex-col lg:flex-row items-center lg:items-start gap-6 lg:gap-8 bg-[#FFFFF00]">

            <div class="w-full lg:w-2/3 flex justify-center items-center order-1 lg:order-2">
                <img src="{{ asset('/DnefDocumentos/public/img/VOLUNTARIADO/FOTO 3.png') }}" alt="Decoración"
                    class="object-contain max-h-[25rem] md:max-h-[35rem] lg:max-h-[52rem] w-full lg:w-auto p-5 lg:pt-6">
            </div>

            <div
                class="mt-0 lg:mt-24 w-full lg:w-1/3 flex flex-col justify-center items-center lg:items-end order-2 lg:order-1 text-center lg:text-left">
                <div>
                    <h1 class="text-3xl md:text-5xl font-extrabold mb-4 md:mb-8 leading-tight" style="color: #e58622;">
                        INSCRIPCIONES<br>
                        VOLUNTARIADO
                    </h1>
                    <p class="text-base md:text-2xl text-[#333] leading-snug mt-2 px-2 md:px-0">
                        Sé parte del Voluntariado JNE, una iniciativa de la
                        DNE que impulsa el compromiso ciudadano, la
                        formación democrática y la igualdad política desde
                        la acción. <br><br> <strong>Pueden participar:</strong><br>
                        Jóvenes, adultos y personas con discapacidad.
                        No necesitas experiencia previa, solo compromiso.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="relative z-10 max-w-8xl mt-8 mx-auto px-2 md:px-8 lg:px-50 pt-10">
    {{-- Estos mensajes de éxito/error de sesión de Laravel ya no serán necesarios con el manejo AJAX,
             pero los mantengo por si tienes alguna lógica de redirección que los use.
             Los mensajes de éxito/error del formulario ahora serán manejados por JavaScript. --}}
    @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">¡Éxito!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
    @endif

    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">¡Error!</strong>
        <span class="block sm:inline">Por favor, corrige los siguientes errores:</span>
        <ul class="mt-3 list-disc list-inside">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <section class="flex flex-col lg:flex-row items-center lg:items-start"
        style="background-image: url('{{ asset('/DnefDocumentos/public/img/VOLUNTARIADO/FONDO-CONTACTO-VOLUNTARIADO.png') }}'); background-size: cover; background-position: center;">

        <div class="w-full p-4 md:p-8 order-1 lg:order-2 lg:w-3/5 lg:pl-4 lg:pr-14 lg:py-8">
            <h2
                class="text-[#666] text-2xl md:text-4xl font-extrabold mb-4 md:mb-6 text-center lg:text-left leading-tight">
                ¿QUIERES SER PARTE DEL<br>PRÓXIMO VOLUNTARIADO?
            </h2>

            {{-- INICIO DEL FORMULARIO ADAPTADO --}}
            <form id="inscripcionesForm" class="space-y-4 md:space-y-5">
                @csrf {{-- ¡CRÍTICO! Añade el token CSRF para seguridad en Laravel --}}

                {{-- Mensajes de Éxito/Error y Errores de Validación (manejados por JS) --}}
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
                        <label for="nombre" class="block text-base md:text-lg text-black mb-1">
                            Nombres <span class="text-red-600">*</span>
                        </label>
                        <input type="text" id="nombre" name="nombre" maxlength="20"
                            pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+"
                            class="bg-white w-full border border-white rounded px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-400 text-sm md:text-base"
                            title="Solo se permiten letras y un máximo de 20 caracteres"
                            value="{{ old('nombre') }}" required>
                    </div>

                    <div class="w-full">
                        <label for="apellidos" class="block text-base md:text-lg text-black mb-1">
                            Apellidos <span class="text-red-600">*</span>
                        </label>
                        <input type="text" id="apellidos" name="apellidos" maxlength="20"
                            pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+"
                            class="bg-white w-full border border-white rounded px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-400 text-sm md:text-base"
                            title="Solo se permiten letras y un máximo de 20 caracteres"
                            value="{{ old('apellidos') }}" required>
                    </div>
                </div>

                {{-- DNI --}}
                <div>
                    <label for="dni" class="block text-base md:text-lg text-black mb-1">
                        DNI/CE <span class="text-red-600">*</span>
                    </label>
                    <input type="text" id="dni" name="dni" minlength="7" maxlength="9" pattern="\d{8,9}"
                        required
                        class="bg-white w-full border border-gray-300 rounded px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-400 text-sm md:text-base"
                        title="El DNI debe tener entre 8 y 9 dígitos numéricos."
                        value="{{ old('dni') }}">
                </div>

                {{-- Teléfono y Correo --}}
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="w-full">
                        <label for="telefono" class="block text-base md:text-lg text-black mb-1">
                            Celular de contacto <span class="text-red-600">*</span>
                        </label>
                        <input type="text" id="telefono" name="telefono" maxlength="9" pattern="9\d{8}" required
                            inputmode="numeric"
                            class="bg-white w-full border border-gray-300 rounded px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-400 text-sm md:text-base"
                            title="El número debe tener 9 dígitos y comenzar con 9."
                            value="{{ old('telefono') }}">
                    </div>

                    <div class="w-full">
                        <label for="email" class="block text-base md:text-lg text-black mb-1">
                            Correo electrónico <span class="text-red-600">*</span>
                        </label>
                        <input type="email" id="email" name="email" required
                            class="bg-white w-full border border-gray-300 rounded px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-400 text-sm md:text-base"
                            value="{{ old('email') }}">
                    </div>
                </div>

                {{-- Mensaje --}}
                <div>
                    <label for="message" class="block text-base md:text-lg text-black mb-1">
                        Mensaje <span class="text-red-600">*</span>
                    </label>
                    <textarea id="message" name="message" rows="4" required
                        class="w-full border bg-white border-gray-300 rounded px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-400 resize-none text-sm md:text-base">{{ old('message') }}</textarea>
                </div>

                {{-- Checkbox de Términos y Condiciones --}}
                <div class="flex items-center mt-4">
                    <input type="checkbox" id="terms_conditions" name="terms_conditions"
                        class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
                    <label for="terms_conditions" class="ml-3 block text-sm text-gray-900"> Acepto los <a href="https://portal.jne.gob.pe/portal_documentos/files/8d7ed37b-3d2f-4528-bc1c-ae75d9ef28e6.pdf" target="_blank" class="text-red-600 hover:text-blue-800 underline">Términos y Condiciones</a> <span class="text-red-600">*</span>
                    </label>
                </div>
                <div id="termsError" class="text-red-500 text-sm mt-1 hidden">
                    Este campo es obligatorio.
                </div>

                <div class="flex justify-end">
                    <button type="submit" id="submitBtnInscripciones"
                        class="text-base md:text-lg bg-[#f78f1e] hover:bg-[#e07600] text-white font-bold py-2 px-6 md:px-8 rounded transition">
                        Enviar datos
                    </button>
                </div>
            </form>
            {{-- FIN DEL FORMULARIO ADAPTADO --}}

        </div>

        <div
            class="w-full flex flex-col items-center text-center p-4 md:p-8 order-2 lg:order-1 lg:ml-0 lg:w-2/5 lg:text-left lg:pt-20 lg:pr-2 lg:py-8">
            <img src="{{ asset('/DnefDocumentos/public/img/VOLUNTARIADO/voluntariados-boton.png') }}" alt="Voluntariado"
                class="max-w-[250px] md:max-w-[380px] h-auto object-contain mb-8 md:mb-16">

            <div class="text-gray-800 text-base md:text-lg font-semibold space-y-1">
                <p><strong>Horario de atención:</strong></p>
                <p>Lunes a Viernes de 8:30 a.m. - 4:30 p.m.</p>
                <p><strong>E-mail:</strong><br>voluntariado@jne.gob.pe</p>
                <p><strong>Teléfono:</strong><br>(511) 311 - 1700 - Anexo 1069</p>
            </div>
        </div>
    </section>
</div>

<div class="h-20 bg-transparent"></div>

{{-- SCRIPT PARA MANEJAR EL ENVÍO AJAX --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Cambiado el ID del formulario y botón
        const inscripcionesForm = document.getElementById('inscripcionesForm');
        const submitBtnInscripciones = document.getElementById('submitBtnInscripciones');

        // Asegúrate de que estos IDs sean únicos en tu página si tienes múltiples formularios
        const successMessageDiv = document.getElementById('successMessage');
        const errorMessageDiv = document.getElementById('errorMessage');
        const validationErrorsDiv = document.getElementById('validationErrors');
        const validationErrorsList = validationErrorsDiv.querySelector('ul');
        const termsConditionsCheckboxInscripciones = document.getElementById('terms_conditions_inscripciones'); // NUEVO: Obtener el checkbox
        const termsErrorInscripcionesDiv = document.getElementById('termsErrorInscripciones'); // NUEVO: Mensaje de error para el checkbox

        function hideAllMessages() {
            successMessageDiv.classList.add('hidden');
            errorMessageDiv.classList.add('hidden');
            validationErrorsDiv.classList.add('hidden');
            validationErrorsList.innerHTML = '';
            termsErrorInscripcionesDiv.classList.add('hidden'); // NUEVO: Ocultar error de términos
        }

        inscripcionesForm.addEventListener('submit', function(event) {
            event.preventDefault();

            hideAllMessages();

            // NUEVO: Validar que el checkbox esté marcado antes de enviar
            if (!termsConditionsCheckboxInscripciones.checked) {
                termsErrorInscripcionesDiv.classList.remove('hidden');
                submitBtnInscripciones.disabled = false; // Asegurarse de que el botón no quede deshabilitado
                submitBtnInscripciones.textContent = 'Enviar datos';
                return; // Detener el envío del formulario
            }

            submitBtnInscripciones.disabled = true;
            submitBtnInscripciones.textContent = 'Enviando...';

            const formData = new FormData(inscripcionesForm);
            const data = {};
            formData.forEach((value, key) => {
                data[key] = value;
            });

            fetch('{{ route('inscripciones.submit') }}', {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': data._token
                        },
                        body: JSON.stringify(data),
                    })
                .then(response => {
                    submitBtnInscripciones.disabled = false;
                    submitBtnInscripciones.textContent = 'Enviar datos';

                    if (response.status === 422) {
                        return response.json().then(errorData => {
                            validationErrorsDiv.classList.remove('hidden');
                            for (const field in errorData.errors) {
                                errorData.errors[field].forEach(message => {
                                    const li = document.createElement('li');
                                    li.textContent = message;
                                    validationErrorsList.appendChild(li);
                                });
                            }
                            return Promise.reject('Validation Failed');
                        });
                    }
                    if (!response.ok) {
                        return response.json().then(errorData => {
                            errorMessageDiv.classList.remove('hidden');
                            errorMessageDiv.querySelector('span').textContent = errorData.message || 'Hubo un error en el servidor.';
                            return Promise.reject('Server Error');
                        });
                    }
                    return response.json();
                })
                .then(data => {
                    successMessageDiv.classList.remove('hidden');
                    successMessageDiv.querySelector('span').textContent = data.message || '¡Tu inscripción ha sido enviada correctamente!';
                    inscripcionesForm.reset();
                    termsConditionsCheckboxInscripciones.checked = false; // NUEVO: Asegurar que el checkbox se desmarque al resetear
                })
                .catch(error => {
                    console.error('Error durante el envío del formulario de inscripciones:', error);
                    if (error !== 'Validation Failed' && error !== 'Server Error') {
                        errorMessageDiv.classList.remove('hidden');
                        errorMessageDiv.querySelector('span').textContent = 'Error de conexión o inesperado. Por favor, inténtelo de nuevo más tarde.';
                    }
                });
        });
    });
</script>

@endsection