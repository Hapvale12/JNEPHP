<!-- Header completo y fijo -->
<header class="w-full fixed top-0 z-50" x-data="{ isOpen: false }">

    <!-- Franja institucional más gruesa -->
    <div class="w-full bg-[#BE1717] py-4">
        <div class="container mx-auto flex justify-between items-center px-4"></div>
    </div>

    <div class="w-full bg-white shadow-lg shadow-gray-900/60 z-50 relative">

    <div class="container mx-auto px-4 py-6 flex items-center justify-between lg:justify-start"> {{-- CAMBIO: md:justify-start a lg:justify-start --}}

        <a href="{{ route('home') }}" class="flex items-center">
            <img src="{{ asset('/DnefDocumentos/public/img/Mesa-de-trabajo-4.png') }}" alt="Logo DNE" class="h-24 w-auto object-contain">
        </a>

        {{-- CAMBIO: md:hidden a lg:hidden --}}
        <div class="lg:hidden flex flex-col gap-2 w-8 cursor-pointer" @click="isOpen = !isOpen">
            <input type="checkbox" class="peer hidden" :checked="isOpen" readonly />

            <div
                class="rounded-2xl h-[3px] w-1/2 bg-black duration-500 peer-checked:rotate-[225deg] origin-right peer-checked:-translate-x-[12px] peer-checked:-translate-y-[1px]">
            </div>
            <div class="rounded-2xl h-[3px] w-full bg-black duration-500 peer-checked:-rotate-45"></div>
            <div
                class="rounded-2xl h-[3px] w-1/2 bg-black duration-500 place-self-end peer-checked:rotate-[225deg] origin-left peer-checked:translate-x-[12px] peer-checked:-translate-y-[1px]">
            </div>
        </div>

        {{-- CAMBIO: hidden md:ml-auto md:flex a hidden lg:ml-auto lg:flex --}}
        <nav
            class="hidden lg:ml-auto lg:flex lg:items-center space-x-4 text-[#666666] text-lg font-semibold relative">

            <a href="{{ url('/conocenos') }}" class="hover:text-[#BE1717]">CONÓCENOS</a>
            <span class="text-gray-400">│</span>

            <div class="relative group" x-data="{ show: false }" @mouseenter="show = true"
                @mouseleave="show = false">
                <a href="{{ url('/lineas-de-trabajo') }}" class="hover:text-[#BE1717]">LÍNEAS DE TRABAJO</a>

                <div x-show="show" x-transition
                    class="absolute top-full left-0 mt-1 flex-col bg-white shadow-lg rounded-md w-56 z-50 py-2 pointer-events-auto flex flex-col space-y-1"
                    @mouseenter="show = true" @mouseleave="show = false">
                    <a href="{{ url('/lineas-de-trabajo/igualdadPolitica') }}"
                        class="px-4 py-2 hover:bg-gray-100 text-left">Igualdad Política</a>
                    <a href="{{ url('/lineas-de-trabajo/votoInformado') }}"
                        class="px-4 py-2 hover:bg-gray-100 text-left">Voto Informado</a>
                    <a href="{{ url('/lineas-de-trabajo/voluntariadoJNE') }}"
                        class="px-4 py-2 hover:bg-gray-100 text-left">Voluntariado</a>
                    <a href="{{ url('/lineas-de-trabajo/zonaEducativa') }}"
                        class="px-4 py-2 hover:bg-gray-100 text-left">Zona Educativa</a>
                </div>
            </div>

            <span class="text-gray-400">│</span>
            <a href="{{ url('/noticias-y-eventos') }}" class="hover:text-[#BE1717]">NOTICIAS Y EVENTOS</a>
            <span class="text-gray-400">│</span>
            <a href="{{ url('/contactenos') }}" class="hover:text-[#BE1717]">CONTÁCTENOS</a>
        </nav>
    </div>

    {{-- CAMBIO: md:hidden a lg:hidden --}}
    <div x-show="isOpen" x-transition class="lg:hidden bg-white px-4 pb-4 space-y-2">
        <a href="{{ url('/conocenos') }}" class="block py-2 text-[#666666] hover:text-[#BE1717]">CONÓCENOS</a>

        <div x-data="{ openSub: false }">
            <button @click="openSub = !openSub"
                class="w-full text-left py-2 text-[#666666] hover:text-[#BE1717] flex items-center justify-between">
                LÍNEAS DE TRABAJO
                <svg :class="{ 'rotate-180': openSub }" class="w-4 h-4 transition-transform transform"
                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>

            <div x-show="openSub" x-transition class="pl-4 mt-2 space-y-2">
                <a href="{{ url('/lineas-de-trabajo/igualdadPolitica') }}"
                    class="block text-[#666666] hover:text-[#BE1717]">IGUALDAD POLÍTICA</a>
                <a href="{{ url('/lineas-de-trabajo/votoInformado') }}"
                    class="block text-[#666666] hover:text-[#BE1717]">VOTO INFORMADO</a>
                <a href="{{ url('/lineas-de-trabajo/voluntariadoJNE') }}"
                    class="block text-[#666666] hover:text-[#BE1717]">VOLUNTARIADO</a>
                <a href="{{ url('/lineas-de-trabajo/zonaEducativa') }}"
                    class="block text-[#666666] hover:text-[#BE1717]">ZONA EDUCATIVA</a>
            </div>
        </div>

        <a href="{{ url('/noticias-y-eventos') }}" class="block py-2 text-[#666666] hover:text-[#BE1717]">NOTICIAS
            Y EVENTOS</a>
        <a href="{{ url('/contactenos') }}" class="block py-2 text-[#666666] hover:text-[#BE1717]">CONTÁCTENOS</a>
    </div>
</div>

</header>

<!-- Espacio compensatorio para header fijo -->
<div class="pt-36"></div>
