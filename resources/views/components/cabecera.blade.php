@props([
    'titulo',
    'descripcion',
    'imagen',
    'colorTitulo' => '#333',
    'tamanoTitulo' => 'text-3xl md:text-4xl',
    'tamanoDescripcion' => 'text-base',
    'colorFondoDerecha' => '#B3B3B3',
    'fondoContenido' => '#F1F3F6', // color por defecto del fondo del contenedor
    'altoImagen' => 'max-h-60',
    'margenTopContenido' => 'mt-20',
    'paddingContenido' => 'px-6 md:px-8 lg:px-12',
    'claseContenedor' => 'max-w-7xl', // Nuevo: valor por defecto
    'estiloImagen' => '',
    'paddingContenidoInterno' => 'p-6 md:p-10',
    'sinPaddingInferior' => false,
])

<div class="relative w-full h-auto bg-white overflow-hidden">
    <!-- Fondo gris al lado derecho -->
    <div class="absolute top-0 right-0 h-full w-[35%]" style="background-color: {{ $colorFondoDerecha }}"></div>

    <!-- Contenedor del contenido -->
    @php
        $paddingVertical = $sinPaddingInferior ? 'pt-12' : 'py-12';
    @endphp

    <div
        class="relative z-10 max-w-7xl {{ $margenTopContenido }} mx-auto {{ $paddingContenido ?? 'px-40' }} {{ $paddingVertical }}">

        @php
            $soloImagen = !$titulo && !$descripcion;
        @endphp

        <div class="w-full shadow-none rounded-none {{ $paddingContenidoInterno ?? 'p-6 md:p-10' }}
    {{ $soloImagen ? 'flex justify-center items-center' : 'flex flex-col md:flex-row items-center gap-6' }}"
    style="background-color: {{ $fondoContenido }};">

            <!-- Texto -->
            @if ($titulo || $descripcion)
                <div class="w-full md:w-2/3 text-justify">
                    @if ($titulo)
                        <h1 class="{{ $tamanoTitulo }} font-extrabold mb-2" style="color: {{ $colorTitulo }}">
                            {!! nl2br(e($titulo)) !!}
                        </h1>
                    @endif

                    @if ($descripcion)
                        <p class="{{ $tamanoDescripcion }} text-[#555]">{!! nl2br(e($descripcion)) !!}</p>
                    @endif
                </div>
            @endif

            <!-- Imagen grande y protagonista -->
            <div
                class="{{ $soloImagen ? 'w-full flex justify-center' : 'w-full md:w-1/2 flex justify-center items-start' }}">
                <img src="{{ asset($imagen) }}" alt="Decoración" class="object-contain"
                    style="{{ $soloImagen ? 'max-height: 60rem;' : $estiloImagen }}">
            </div>


        </div>
    </div>
</div>
