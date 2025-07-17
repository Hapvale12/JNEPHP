@props(['noticias'])

<div x-data="{
    current: 0,
    // Calcula el número de elementos visibles según el tamaño de la pantalla
    get itemsVisible() {
        if (window.innerWidth >= 1024) { // 'lg' breakpoint para Desktop (3 tarjetas)
            return 3;
        }
        if (window.innerWidth >= 768) { // 'md' breakpoint para Tablets (2 tarjetas)
            return 2;
        }
        return 1; // Por defecto para móviles (1 tarjeta)
    },
    // Calcula la transformación X para el carrusel
    get translateXValue() {
        // En móviles, se mueve el 100% del ancho de un elemento
        // En tablets/PC, se mueve el 100% del ancho de un elemento, pero el carrusel muestra 3
        return this.current * (100 / this.itemsVisible);
    },
    // Limita el índice 'current' para evitar desplazamiento excesivo
    get maxCurrent() {
        // Si hay menos noticias que las visibles, no hay desplazamiento
        if (this.itemsVisible >= {{ count($noticias) }}) {
            return 0;
        }
        // Calcula el máximo en función del número de items visibles
        return {{ count($noticias) }} - this.itemsVisible;
    }
}"
class="relative w-full max-w-6xl mx-auto overflow-hidden">
    <div class="flex transition-transform duration-500"
         :style="'transform: translateX(-' + translateXValue + '%)'"
         style="width: {{ count($noticias) * 100 }}%;">
        @foreach ($noticias as $noticia)
            <div class="w-full md:w-1/2 lg:w-1/3 p-4 flex-shrink-0">
                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden flex flex-col min-h-[420px]">
                    <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                         src="{{ $noticia['imagen'] }}" alt="imagen noticia">
                    <div class="p-6 flex flex-col flex-grow">
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">
                            {{ $noticia['titulo'] }}
                        </h1>
                        <p class="leading-relaxed mb-3 flex-grow">
                            {{ $noticia['descripcion'] }}
                        </p>
                        {{-- Contenedor de Fecha y Botón --}}
                        <div class="flex justify-between items-center mt-auto"> {{-- justify-between para separar, items-center para alinear verticalmente --}}
                            {{-- Espacio para la fecha --}}
                            <span class="text-gray-600 text-sm">
                                {{ $noticia['fecha'] ?? 'Fecha no disponible' }} {{-- Asume que hay un campo 'fecha' --}}
                            </span>
                            {{-- Botón "Leer más" --}}
                            <a href="{{ $noticia['enlace'] ?? '#' }}" target="_blank"
                               class="text-white bg-[#BE1717] hover:bg-red-800 font-bold py-2 px-4 rounded transition-colors duration-200">
                                Leer más
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="absolute top-1/2 -translate-y-1/2 left-0">
        <button @click="current = Math.max(0, current - 1)"
                class="bg-[#BE1717] text-white px-2 py-1 rounded-l hover:bg-red-800">‹</button>
    </div>
    <div class="absolute top-1/2 -translate-y-1/2 right-0">
        <button @click="current = Math.min(maxCurrent, current + 1)"
                class="bg-[#BE1717] text-white px-2 py-1 rounded-r hover:bg-red-800">›</button>
    </div>
</div>