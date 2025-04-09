<x-app-layout>
  <section class="bg-black lg:grid lg:h-screen lg:place-content-center">
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 sm:py-24 lg:px-9 lg:py-32">
      <div class="mx-auto max-w-prose text-center">
        <h1 class="text-4xl font-bold text-white sm:text-5xl leading-tight">
          Bison no es solo
          <strong class="text-blue-700"> tecnología </strong>
          es talento humano en acción.
        </h1>
        <p class="mt-4 text-white text-base sm:text-lg">
          En BISON, nuestra misión es llevar la tecnología al siguiente nivel mediante soluciones
          innovadoras. Uno de nuestros proyectos más ambiciosos es el Carro Robot Autónomo,
          desarrollado por un equipo multidisciplinario de expertos en software, robótica e
          inteligencia artificial.
        </p>
      </div>
    </div>
  </section>

  <section class="py-12 px-4 bg-gray-100 dark:bg-gray-900 dark:text-white">
    <div class="container mx-auto text-center">
      <p class="text-sm font-semibold tracking-wider uppercase text-blue-600 dark:text-blue-400">Equipo de desarrollo</p>
      <h2 class="text-3xl sm:text-4xl font-bold mt-2">El talento detrás de Bison</h2>

      <div class="mt-10 grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 place-items-center">
        @php
          $equipo = [
            ['nombre' => 'Ángel', 'img' => 'perfil.jpg', 'rol' => 'Desarrollador Web'],
            ['nombre' => 'Emilio', 'img' => 'emilio.jpeg', 'rol' => 'Mobile App Developer'],
            ['nombre' => 'Josue', 'img' => 'topo.png', 'rol' => 'CTO'],
            ['nombre' => 'Baldo', 'img' => 'baldomero.jpeg', 'rol' => 'DEspecialista en Sistemas Autónomos']
          ];
        @endphp

        @foreach ($equipo as $persona)
        <div class="relative w-full max-w-xs p-4 rounded-2xl shadow-xl backdrop-blur-sm bg-white/10 border border-white/20 transition transform hover:scale-105 duration-300">
          <div class="flex flex-col items-center">
            <img class="w-24 h-24 rounded-full object-cover ring-2 ring-white shadow-md" src="{{ asset('images/' . $persona['img']) }}" alt="{{ $persona['nombre'] }}">
            <div class="mt-4 text-center">
              <h3 class="text-xl font-semibold text-white">{{ $persona['nombre'] }}</h3>
              <p class="text-gray-300 text-sm">{{ $persona['rol'] }}</p>
            </div>
            <div class="flex justify-center gap-4 mt-4 text-gray-400">
              <a href="#" title="Email" class="hover:text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m0 0l4-4m-4 4l4 4" />
                </svg>
              </a>
              <a href="#" title="Twitter" class="hover:text-blue-500">
                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0012 7.5v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>
                </svg>
              </a>
              <a href="#" title="LinkedIn" class="hover:text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                  <path d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM0 8h5V24H0V8zm7.5 0h4.7v2.6h.1c.7-1.3 2.4-2.6 5-2.6 5.3 0 6.3 3.5 6.3 8v9h-5V17c0-1.7 0-3.9-2.4-3.9-2.4 0-2.8 1.9-2.8 3.8v7h-5V8z"/>
                </svg>
              </a>
              <a href="#" title="GitHub" class="hover:text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                  <path d="M12 0C5.37 0 0 5.373 0 12c0 5.302 3.438 9.8 8.205 11.387.6.113.82-.26.82-.577v-2.23c-3.338.726-4.033-1.61-4.033-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.084-.729.084-.729 1.205.084 1.84 1.238 1.84 1.238 1.07 1.834 2.809 1.304 3.495.997.107-.776.42-1.304.763-1.604-2.665-.304-5.467-1.332-5.467-5.93 0-1.31.468-2.38 1.236-3.22-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.3 1.23a11.52 11.52 0 013.003-.404c1.018.004 2.045.138 3.003.404 2.29-1.553 3.295-1.23 3.295-1.23.655 1.652.244 2.873.12 3.176.77.84 1.233 1.91 1.233 3.22 0 4.61-2.807 5.624-5.48 5.92.43.37.823 1.102.823 2.222v3.293c0 .32.218.694.825.576C20.565 21.796 24 17.298 24 12c0-6.627-5.373-12-12-12z"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
</x-app-layout>
