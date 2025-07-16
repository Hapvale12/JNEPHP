@props(['images'])

<div x-data="{ currentImage: 0, images: @js($images) }" class="relative w-full overflow-hidden mb-6">
    {{-- CAMBIO CLAVE AQUÍ: Usamos un enfoque de relación de aspecto con altura máxima --}}
    <div class="relative w-full aspect-video max-h-[600px] md:max-h-[500px] lg:max-h-[800px]"> 
        <template x-for="(image, index) in images" :key="index">
            <img :src="image"
                 :class="{ 'opacity-100': currentImage === index, 'opacity-0': currentImage !== index }"
                 class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700 ease-in-out"
                 alt="Noticia Imagen">
        </template>
    </div>

    {{-- Navegación del slider --}}
    <div class="absolute inset-x-0 bottom-4 flex justify-center space-x-2 z-10">
        <template x-for="(image, index) in images" :key="index">
            <button @click="currentImage = index"
                    :class="{ 'bg-white': currentImage === index, 'bg-gray-400': currentImage !== index }"
                    class="w-3 h-3 rounded-full focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 transition-colors duration-300"></button>
        </template>
    </div>

    {{-- Flechas de navegación --}}
    <button @click="currentImage = (currentImage - 1 + images.length) % images.length"
            class="absolute left-4 top-1/2 -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full z-10 hover:bg-opacity-75 transition-colors duration-300">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
    </button>
    <button @click="currentImage = (currentImage + 1) % images.length"
            class="absolute right-4 top-1/2 -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full z-10 hover:bg-opacity-75 transition-colors duration-300">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
    </button>
</div>