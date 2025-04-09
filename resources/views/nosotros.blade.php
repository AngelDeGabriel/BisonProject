<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-4xl text-white bg-black dark:white leading-tight text-center">
          QUIENES SOMOS
        </h2>
    </x-slot>

   
    
    <div class="flex h-screen w-full">
        <!-- Imagen a la izquierda, pero sin recortar -->
        <div class="w-3/5 flex items-center justify-center bg-black">
            <img class="w-auto h-auto max-h-96 object-contain" src="{{ asset('images/logo.png') }}" alt="Imagen grande">
        </div>
    
        <!-- Contenido a la derecha -->
        <div class="w-3/5 flex flex-col justify-center px-16 bg-black text-white">
            <h2 class="text-4xl font-bold mb-6">Nuestra Historia</h2>
            <p class="text-lg mb-8">
                Bison es una empresa tecnológica lider en el mercado, especializada en soluciones innovadoras que 
                transforman la forma en que las empresas operan y se conectan con sus clientes.
                Nuestro enfoque se centra en ofrecer tecnológia de vanguardia que impulse el crecimiento de 
                nuestros clientes y genere impacto en la sociedad. Con un equipo altamente capacitado y una 
                pasión por la excelencia, estamos comprometidos en brindar soluciones de calidad que impulsen 
                el éxito de nuestros socios comerciales.
            </p>
            
        </div>
    </div>




    <div class="flex h-screen w-full">
        
        
    
        <!-- Contenido a la derecha -->
        <div class="w-3/5 flex flex-col justify-center px-16 bg-black text-white">
            <h2 class="text-4xl font-bold mb-6">Nuestra Tecnología</h2>
            <p class="text-lg mb-8">
                En Bison, nos esforzamos por mantenernos a la vanguardia de la innovación tecnológica. Nuestra
                dedicación a la excelencia nos impulsa a desarrollar soluciones avanzadas que aborden las
                necesidades cambiantes del mercado. Desde la programación hasta la innovación en la IA. Nuestra
                tecnología de última generación está diseñada para optimizar operaciones, mejorar la eficiencia
                y potenciar el crecimiento empresarial.
            </p>


            
        </div>
<!-- Imagen a la izquierda, pero sin recortar -->
        <div class="w-1/2 flex items-center justify-center bg-black">
            <img class="w-auto h-full object-full" src="{{ asset('images/program.jpg') }}" alt="Imagen grande">
        </div>
    </div>
    

    <div class="bg-black h-12">
    

    </div>
    


    <section class="py-6 bg-black text-white">
        <div class="grid max-w-6xl grid-cols-1 px-6 mx-auto lg:px-8 md:grid-cols-2 md:divide-x">
            <div class="py-6 md:py-0 md:px-6">
                <h1 class="text-4xl font-bold pb-1">Contacto</h1>
                <p class="pt-2 pb-6">Servicio de atención 24/7</p>
                <div class="space-y-4">
                    <p class="flex items-center pb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2 sm:mr-6">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Papantla de Olarte, Zona Centro.</span>
                    </p>
                    <p class="flex items-center pb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2 sm:mr-6">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        <span>784-201-4045</span>
                    </p>
                    <p class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2 sm:mr-6">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        <span>contactobison@gmail.com</span>
                    </p>
                </div>
            </div>
    
            <div class="py-6 md:py-0 md:px-6 flex flex-col justify-center">
                <h2 class="text-2xl font-semibold mb-4">Encuéntranos aquí</h2>
                <p class="text-white mb-4">Estamos ubicados en una zona accesible. Puedes visitarnos en la siguiente dirección:</p>
                <div class="w-full h-64 rounded-lg overflow-hidden shadow-md">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60390.64623130416!2d-97.34844927326517!3d20.44408429784426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d010f3ae0f1897%3A0xd8b4ef4eb7a3a9eb!2sPapantla%20de%20Olarte%2C%20Ver.!5e0!3m2!1ses-419!2smx!4v1712250878531!5m2!1ses-419!2smx" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
    

    <div class="bg-black h-12">
    

    </div>
    
        
    <div class="bg-black h-12">
    

    </div>
    
    
    
      
<!-- parte de abajo-->
<!--
<div id="bottom-banner" tabindex="-1" class="fixed bottom-0 start-0 z-50 flex justify-between w-full p-4 border-t border-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
    <div class="flex items-center mx-auto">
        <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">
            <span class="inline-flex p-1 me-3 bg-gray-200 rounded-full dark:bg-gray-600 w-6 h-6 items-center justify-center">
                <svg class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M18.435 7.546A2.32 2.32 0 0 1 17.7 5.77a3.354 3.354 0 0 0-3.47-3.47 2.322 2.322 0 0 1-1.776-.736 3.357 3.357 0 0 0-4.907 0 2.281 2.281 0 0 1-1.776.736 3.414 3.414 0 0 0-2.489.981 3.372 3.372 0 0 0-.982 2.49 2.319 2.319 0 0 1-.736 1.775 3.36 3.36 0 0 0 0 4.908A2.317 2.317 0 0 1 2.3 14.23a3.356 3.356 0 0 0 3.47 3.47 2.318 2.318 0 0 1 1.777.737 3.36 3.36 0 0 0 4.907 0 2.36 2.36 0 0 1 1.776-.737 3.356 3.356 0 0 0 3.469-3.47 2.319 2.319 0 0 1 .736-1.775 3.359 3.359 0 0 0 0-4.908ZM8.5 5.5a1 1 0 1 1 0 2 1 1 0 0 1 0-2Zm3 9.063a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm2.207-6.856-6 6a1 1 0 0 1-1.414-1.414l6-6a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="sr-only">Discount</span>
            </span>
            <span>Get 5% commission per sale <a href="https://flowbite.com" class="flex items-center ms-0 text-sm font-medium text-blue-600 md:ms-1 md:inline-flex dark:text-blue-500 hover:underline">Become a partner <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
  </svg></a></span>
        </p>
    </div>
    <div class="flex items-center">
        <button data-dismiss-target="#bottom-banner" type="button" class="shrink-0 inline-flex justify-center w-7 h-7 items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
            <span class="sr-only">Close banner</span>
        </button>
    </div>
</div>
-->
@include('components.footer')




          
       
</x-app-layout>
