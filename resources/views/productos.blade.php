<x-app-layout>

    <!-- Sección Descriptiva -->
    <section class="bg-black lg:grid lg:h-screen lg:place-content-center">
        <div class="mx-auto w-screen max-w-screen-xl px-6 py-16 sm:px-8 sm:py-20 lg:px-9 lg:py-32">
            <div class="mx-auto max-w-prose text-center">
                <h1 class="text-4xl font-bold text-white sm:text-5xl md:text-6xl">
                    <strong class="text-white">ACC - 001</strong>
                </h1>

                <p class="mt-6 text-base sm:text-lg text-white text-pretty leading-relaxed">
                    Carro robot recolector de basura de última generación, diseñado para optimizar tareas de 
                    limpieza en espacios escolares. Equipado con sensores inteligentes, garantiza una recolección 
                    eficaz y segura. Gracias a su sistema de navegación automatizada, el ACC - 001 detecta y almacena 
                    los desechos en su compartimento interno, mientras evita colisiones o caídas. Su tecnología de 
                    “limpieza pura” permite recolectar basura visible y dejar superficies libres de residuos.
                </p>
            </div>
        </div>
    </section>

    <!-- Carrusel de imágenes -->
    <div class="relative bg-black w-full overflow-hidden">
        <!-- Botón Izquierdo -->
        <button aria-label="Slide back" type="button"
            class="hidden md:flex absolute left-0 z-30 p-2 ml-2 bg-white bg-opacity-10 hover:bg-opacity-30 rounded-full transition">
            <svg width="8" height="14" fill="none" viewBox="0 0 8 14" xmlns="http://www.w3.org/2000/svg"
                class="w-4 h-4 text-white">
                <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>

        <!-- Imágenes -->
        <div class="flex items-center justify-start gap-4 overflow-x-auto scroll-smooth px-4 py-6 sm:gap-6 md:gap-8">
            @foreach (['carroiot.png', 'carro4.png', 'carro5.png', 'carro6.png', 'carrp7.png'] as $image)
                <div class="flex-shrink-0 w-64 sm:w-80 md:w-96 transition-transform hover:scale-105">
                    <img class="object-cover object-center w-full h-64 sm:h-80 md:h-96 rounded-lg shadow-md"
                        src="{{ asset('images/carro.jpeg') }}" alt="Imagen de producto">
                </div>
            @endforeach
        </div>

        <!-- Botón Derecho -->
        <button aria-label="Slide forward" type="button"
            class="hidden md:flex absolute right-0 z-30 p-2 mr-2 bg-white bg-opacity-10 hover:bg-opacity-30 rounded-full transition">
            <svg width="8" height="14" fill="none" viewBox="0 0 8 14" xmlns="http://www.w3.org/2000/svg"
                class="w-4 h-4 text-white">
                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>

    <!-- Espaciado -->
    <div class="bg-black h-12"></div>
    <div class="bg-black h-12"></div>

    @include('components.footer')

</x-app-layout>
