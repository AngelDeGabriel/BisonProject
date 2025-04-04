<x-app-layout>
   
    
      


    <section class="bg-black lg:grid lg:h-screen lg:place-content-center">
        <div class="mx-auto w-screen max-w-screen-xl px-16 py-16 sm:px-6 sm:py-24 lg:px-9 lg:py-32">
          <div class="mx-auto max-w-prose text-center">
            <h1 class="text-4xl font-bold text-white sm:text-6xl">
              
              <strong class="text-white"> ACC - 001 </strong>
            
            </h1>
      
            <p class="mt-4 text-base text-pretty text-white sm:text-lg/relaxed">
                Carro robot recolector de basura de última generación, diseñado para optimizar tareas de 
                limpieza en espacios escolares. Equipado con sensores inteligentes 
                , garantizando una recolección eficaz y segura. Gracias a su sistema de navegación 
                automatizada, el Acc - 001 los desechos en su entorno los almacena en su compartimento 
                interno, todo mientras evita colisiones o caídas. Su tecnología de “limpieza pura” no solo permite 
                recolectar basura visible, sino que también deja las superficies libres de residuos 
            </p>
      
            
            </div>
          </div>
        </div>
      </section>

    <div class="relative flex items-center justify-center bg-black w-full dark:text-gray-900">
        <button aria-label="Slide back" type="button" class="absolute left-0 z-30 p-2 ml-10 bg-opacity-50 rounded-full focus:outline-none focus:dark:bg-gray-600 focus:ring-2 focus:ring-offset-2 focus:dark:ring-gray-600 dark:bg-gray-50">
            <svg width="8" height="14" fill="none" viewBox="0 0 8 14" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4">
                <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </button>
        <div class="flex items-center justify-start w-full h-full gap-6 py-4 mx-auto overflow-auto lg:gap-8">
            <div class="relative flex flex-shrink-0 w-full sm:w-auto">
                <img class="object-cover object-center dark:bg-gray-500 h-96 aspect-square" src="{{ asset ('images/carroiot.png') }}" alt="Image 1">
            </div>
            <div class="relative flex flex-shrink-0 w-full sm:w-auto">
                <img class="object-cover object-center dark:bg-gray-500 h-96 aspect-square" src="{{ asset ('images/carro4.png') }}" alt="Image 2">
            </div>
            <div class="relative flex flex-shrink-0 w-full sm:w-auto">
                <img class="object-cover object-center dark:bg-gray-500 h-96 aspect-square" src="{{ asset ('images/carro5.png') }}" alt="Image 3">
            </div>
            <div class="relative flex flex-shrink-0 w-full sm:w-auto">
                <img class="object-cover object-center dark:bg-gray-500 h-96 aspect-square" src="{{ asset ('images/carro6.png') }}" alt="Image 4">
            </div>
            <div class="relative flex flex-shrink-0 w-full sm:w-auto">
                <img class="object-cover object-center dark:bg-gray-500 h-96 aspect-square" src="{{ asset ('images/carrp7.png') }}" alt="Image 5">
            </div>
        </div>
        <button aria-label="Slide forward" id="next" class="absolute right-0 z-30 p-2 mr-10 bg-opacity-50 rounded-full focus:outline-none focus:dark:bg-gray-600 focus:ring-2 focus:ring-offset-2 focus:dark:ring-gray-600 dark:bg-gray-50">
            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4">
                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </button>
    </div>

    
</x-app-layout>
