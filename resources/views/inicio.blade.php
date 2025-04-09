<x-app-layout>
  <!-- Imagen Inicio Carro -->
  <div class="grid gap-4 px-4">
      <div>
          <img class="w-full h-auto rounded-lg max-w-screen-lg mx-auto" src="{{ asset('images/carro.jpeg') }}" alt="">
      </div>
  </div>

  <!-- Caracteristicas Carro -->
<div class="flex flex-col md:flex-row w-full bg-black text-white">
  <!-- Contenido a la derecha -->
  <div class="w-full md:w-3/5 flex flex-col justify-center px-4 md:px-16 py-6 md:py-0">
      <h2 class="text-2xl md:text-4xl font-bold mb-4 md:mb-6 text-center md:text-left">Nuestra Tecnología</h2>
      <p class="text-sm md:text-lg mb-6 md:mb-8 text-center md:text-left">
          En Bison, nos esforzamos por mantenernos a la vanguardia...
      </p>
      <div class="text-center md:text-left">
          <a
              class="group relative inline-block overflow-hidden border border-white px-6 py-2 md:px-8 md:py-3 focus:ring-3 focus:outline-hidden"
              href="morecarac"
          >
              <span class="absolute inset-x-0 bottom-0 h-[2px] bg-white transition-all group-hover:h-full"></span>
              <span class="relative text-sm font-medium text-white transition-colors group-hover:text-black">
                  Ver más
              </span>
          </a>
      </div>
  </div>

  <!-- Imagen a la izquierda -->
  <div class="w-full md:w-1/2 flex items-center justify-center md:justify-end py-6 md:py-0">
      <img class="w-4/5 md:w-auto h-64 md:h-full object-contain" src="{{ asset('images/arduino2.jpg') }}" alt="Imagen grande">
  </div>
</div>


  <!-- Espacios -->
  <div class="bg-black h-6 md:h-12"></div>

  <!-- Título Productos -->
  <h2 class="font-bold text-3xl md:text-4xl text-white text-center bg-black leading-tight">PRODUCTOS</h2>

  <div class="bg-black h-6 md:h-12"></div>

  <!-- Tarjetas -->
  <div class="flex flex-wrap justify-center gap-8 bg-black p-4 md:p-6">
      <!-- Tarjeta 1 -->
      <div class="w-full max-w-xs bg-white border border-white rounded-lg shadow-sm">
          <img class="p-6 rounded-t-lg" src="{{ asset('images/carro3.png') }}" alt="product image" />
          <div class="px-4 pb-4">
              <h5 class="text-lg font-semibold tracking-tight text-gray-900">ACC - 001</h5>
              <div class="flex items-center mt-2.5 mb-3">
                  <div class="flex text-yellow-300">★★★★★</div>
                  <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-0.5 rounded ml-3">5.0</span>
              </div>
              <div class="flex items-center justify-between">
                  <a href="productos" class="text-white bg-black hover:bg-blue-900 rounded-lg text-sm px-4 py-2">Ver más</a>
              </div>
          </div>
      </div>

      <!-- Tarjeta 2 -->
      <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-sm">
          <img class="p-6 rounded-t-lg" src="{{ asset('images/carro3.png') }}" alt="product image" />
          <div class="px-4 pb-4">
              <h5 class="text-lg font-semibold tracking-tight text-gray-900">ACC - 002</h5>
              <div class="flex items-center justify-between">
                  <span class="text-2xl font-bold text-gray-900">PRÓXIMAMENTE</span>
              </div>
          </div>
      </div>

      <!-- Tarjeta 3 -->
      <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-sm">
          <img class="p-6 rounded-t-lg" src="{{ asset('images/carro3.png') }}" alt="product image" />
          <div class="px-4 pb-4">
              <h5 class="text-lg font-semibold tracking-tight text-gray-900">ACC - 003</h5>
              <div class="flex items-center justify-between">
                  <span class="text-2xl font-bold text-gray-900">PRÓXIMAMENTE</span>
              </div>
          </div>
      </div>
  </div>

  <!-- Espacios -->
  <div class="bg-black h-12"></div>

  <!-- Sección Contacto -->
  <section class="py-6 bg-white text-gray-900">
      <div class="container mx-auto flex flex-col items-center justify-center space-y-6 md:space-y-0 md:flex-row md:justify-between px-4">
          <h1 class="text-2xl md:text-3xl font-semibold text-center md:text-left">¿Tienes alguna duda? Contáctanos</h1>
          <a href="nosotros">
              <button class="px-8 py-3 text-lg font-semibold rounded bg-black text-white">Contacto</button>
          </a>
      </div>
  </section>

  <div class="bg-black h-12"></div>

  @include('components.footer')
</x-app-layout>
