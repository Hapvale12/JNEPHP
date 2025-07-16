@php
    $segments = request()->segments();
    $url = '';
@endphp

<div 
    x-data="{ show: true, lastScroll: 0 }"
    x-init="lastScroll = window.scrollY;
        window.addEventListener('scroll', () => {
            const current = window.scrollY;
            show = current < lastScroll || current < 50;
            lastScroll = current;
        })"
    x-show="show"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 transform translate-y-0"
    x-transition:leave-end="opacity-0 transform -translate-y-4"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform -translate-y-4"
    x-transition:enter-end="opacity-100 transform translate-y-0"
    class="w-full z-40 relative"
>
    <div class="flex items-center py-3 px-4 overflow-x-auto whitespace-nowrap max-w-7xl mx-auto">

        <!-- Inicio -->
        <a href="{{ url('/') }}" class="text-gray-600 hover:text-[#BE1717] transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
        </a>

        @foreach ($segments as $index => $segment)
            @php
                $url .= '/' . $segment;
                $isLast = $index === array_key_last($segments);
                $label = ucwords(str_replace(['-', '_'], ' ', $segment));
            @endphp

            <!-- Flecha -->
            <span class="mx-5 text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </span>

            @if ($isLast)
                <span class="text-gray-600 font-semibold">{{ $label }}</span>
            @else
                <a href="{{ url($url) }}" class="text-gray-600 hover:underline transition-colors">
                    {{ $label }}
                </a>
            @endif
        @endforeach
    </div>
</div>
