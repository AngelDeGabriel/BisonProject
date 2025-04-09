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
            
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
</x-app-layout>
