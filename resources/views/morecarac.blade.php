<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-4xl text-white dark:text-gray-200 leading-tight text-center" style="margin: 2% auto">
          CARACTERÍSTICAS
        </h2>
    </x-slot>
    

    <!-- Imagenes -->

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 bg-black">
        <article class="relative  rounded-lg shadow-sm transition hover:shadow-lg mx-auto max-w-xs">
          <img
            alt=""
            src="{{ asset ('images/sensorr.jpg') }}"
            class="absolute inset-0 h-full w-full object-cover"
          />
          <div class="relative bg-gradient-to-t h-full from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
            <div class="p-4 sm:p-6">
              <time datetime="2022-10-10" class="block text-xs text-white/90">1 de Febrero de 2025</time>
              <a href="#">
                <h3 class="mt-0.5 text-lg text-white">Sistema de control inteligente</h3>
              </a>
              <p class="mt-2 line-clamp-3 text-sm/relaxed text-white/95">
                Plataforma arduino: Controla el funcionamiento del robot mediante código
                optimizado para tareas de limpieza.
                
              </p>
            </div>
          </div>
        </article>
      
        <article class="relative overflow-hidden rounded-lg shadow-sm transition hover:shadow-lg mx-auto max-w-xs">
          <img
            alt=""
            src="{{ asset('images/arduino9.jpg') }}"
            class="absolute inset-0 h-full w-full object-cover"
          />
          <div class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 h-full pt-32 sm:pt-48 lg:pt-64">
            <div class="p-4 sm:p-6">
              <time datetime="2022-10-10" class="block text-xs text-white/90">10 de Febrero de 2025</time>
              <a href="#">
                <h3 class="mt-0.5 text-lg text-white">Sensores y navegación</h3>
              </a>
              <p class="mt-2 line-clamp-3 text-sm/relaxed text-white/95">
                Sensor de distancia: Alerta a los usuarios cuando el contenedor de basura
                se encuentre completamente lleno.
              </p>
            </div>
          </div>
        </article>
      
        <article class="relative overflow-hidden rounded-lg shadow-sm transition hover:shadow-lg mx-auto max-w-xs">
          <img
            alt=""
            src="{{ asset ('images/carro.jpeg') }}"
            class="absolute inset-0 h-full w-full object-cover"
          />
          <div class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
            <div class="p-4 sm:p-6">
              <time datetime="2022-10-10" class="block text-xs text-white/90">1 de Marzo de 2025</time>
              <a href="#">
                <h3 class="mt-0.5 text-lg text-white">Sistema de limpieza</h3>
              </a>
              <p class="mt-2 line-clamp-3 text-sm/relaxed text-white/95">
                Almacenamiento de suciedad: Puede ser un pequeño depósito la basura se
                acumule, carga hasta más de 1 KG.
              </p>
            </div>
          </div>
        </article>
      </div>

      <div class="bg-black h-12">
    

      </div>

      <div class="bg-black h-12">
      </div>
      <div class="bg-black h-12">
    </div>
    <div class="bg-black h-12">
    </div>
      <h2 class="font-bold bg-black text-4xl text-white dark:text-gray-200 leading-tight text-center">
    DESARROLLO
      </h2>
      <div class="bg-black h-12">
    </div>

    
      

    <blockquote class="text-center text-2xl font-semibold text-white italic bg-black">
        El cambio comienza con una
        <span class="relative">
          <span class="absolute -inset-1 block -skew-y-3 bg-green-600" aria-hidden="true"></span>
          <span class="relative text-white">recolección</span>
        </span>
          a la vez
      </blockquote>


      <div class="bg-black h-12">
    </div>


    <section class="overflow-hidden bg-gray-50 sm:grid sm:grid-cols-2">
        <div class="p-8 md:p-12 lg:px-16 lg:py-32">
          <div class="mx-auto max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
            <h2 class="text-2xl font-bold text-black md:text-3xl">
              Desarrollo del primer prototipo ACC-001
            </h2>
      
            <p class="hidden text-black md:mt-4 md:block ">
                En nuestra empresa, usamos software para desarrollar un robot autónomo recolector
                 de basura, diseñado para la gestión de residuos en espacios cerrados y, en el futuro, 
                 en áreas públicas.

                El proceso comienza en la fase de diseño y fabricación, donde utilizamos modelado 3D e impresión 
                en materiales resistentes para construir la estructura del robot, 
                una garra robótica impresa en 3D y sensores de peso que optimizan la recolección. La electrónica está 
                basada en Arduino, integrando sensores y motores desempeño autónomo.
                
                Para complementar su funcionalidad, desarrollamos una plataforma web en Laravel, 
                donde los usuarios pueden saber más sobre el robot. Además, creamos una
                 app móvil en Ionic, permitiendo el control remoto y la supervisión en tiempo real de la
                  actividad del robot.
            </p>
      
            <div class="mt-4 md:mt-8">
              <a
                href="#"
                class="inline-block rounded-sm bg-black px-12 py-3 text-sm font-medium text-white transition hover:bg-green-600 focus:ring-3 focus:ring-yellow-400 focus:outline-hidden"
              >
                ¡Ver Robots!
              </a>
            </div>
          </div>
        </div>
      
        <img
          alt=""
          src="{{ asset ('images/desarrollo.png') }}"
          class=" w-full object-cover aspect-[3/3]"
        />


        
      </section>


      <div class="bg-black h-12">
    

      </div>

      <!-- Comentarios de equipo-->

<!-- SEPARADORRRR -->





<h2 class="font-bold bg-black text-4xl text-white dark:text-gray-200 leading-tight text-center">
  VOCES BISON
    </h2>

    <div class="bg-black h-12">
    

    </div>
    

    <div class="flex flex-wrap justify-center gap-x-32 gap-y-10 bg-black p-8 text-center">
      <!-- Tarjeta 1 -->
      <article class="rounded-lg border border-black bg-white w-80 p-6 shadow-md">
        <a href="nosotros" class="block">
          <img
            alt="Avatar"
            src="{{ asset('images/perfil.jpg') }}"
            class="w-20 h-20 rounded-lg object-cover mx-auto"
          />
        </a>
    
        <div class="mt-4">
          <h3 class="text-base font-semibold leading-tight">
            <a href="nosotros" class="hover:underline">Angel De Gabriel</a>
          </h3>
          <p class="text-[14px] text-blue-600 font-medium">Miembro de Bison</p>
          <p class="text-[13px] text-gray-600 mt-2">
            Considero que Bison no es solo una empresa, es un estilo de vida.
          </p>
        </div>
      </article>
    
      <!-- Tarjeta 2 -->
      <article class="rounded-lg border border-black bg-white w-80 p-6 shadow-md">
        <a href="nosotros" class="block">
          <img
            alt="Avatar"
            src="{{ asset('images/emilio.jpeg') }}"
            class="w-20 h-20 rounded-lg object-cover mx-auto"
          />
        </a>
    
        <div class="mt-4">
          <h3 class="text-base font-semibold leading-tight">
            <a href="nosotros" class="hover:underline">Andrey Emilio</a>
          </h3>
          <p class="text-[14px] text-blue-600 font-medium">Miembro de Bison</p>
          <p class="text-[13px] text-gray-600 mt-2">
            La tecnología es buena o mala, solo depende de quien la esté usando.
          </p>
        </div>
      </article>
    </div>
    
      
      
      <div class="bg-black h-12">
    

      </div>


      
      

<!-- Acaban los comentarios de equipo -->












 

    
@include('components.footer')




          
       
</x-app-layout>



<!--<article class="rounded-xl border-2 border-gray-100 bg-white">
  <div class="flex items-start gap-4 p-4 sm:p-6 lg:p-8">
    <a href="#" class="block shrink-0">
      <img
        alt=""
        src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8YXZhdGFyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60"
        class="size-14 rounded-lg object-cover"
      />
    </a>

    <div>
      <h3 class="font-medium sm:text-lg">
        <a href="#" class="hover:underline"> Question about Livewire Rendering-3 and Alpine JS </a>
      </h3>

      <p class="line-clamp-2 text-sm text-gray-700">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus, accusantium temporibus
        iure delectus ut totam natus nesciunt ex? Ducimus, enim.
      </p>

      <div class="mt-2 sm:flex sm:items-center sm:gap-2">
        <div class="flex items-center gap-1 text-gray-500">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="size-4"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"
            />
          </svg>

          <p class="text-xs">14 comments</p>
        </div>

        <span class="hidden sm:block" aria-hidden="true">&middot;</span>

        <p class="hidden sm:block sm:text-xs sm:text-gray-500">
          Posted by
          <a href="#" class="font-medium underline hover:text-gray-700"> John </a>
        </p>
      </div>
    </div>
  </div>

  <div class="flex justify-end">
    <strong
      class="-me-[2px] -mb-[2px] inline-flex items-center gap-1 rounded-ss-xl rounded-ee-xl bg-green-600 px-3 py-1.5 text-white"
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="size-4"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        stroke-width="2"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"
        />
      </svg>

      <span class="text-[10px] font-medium sm:text-xs">Solved!</span>
    </strong>
  </div>
</article>
