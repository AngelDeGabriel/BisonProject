<x-app-layout>
    <!-- Inicio -->
    


    



<!-- Imagen Inicio Carro -->
    <div class="grid gap-4">
        <div>
            <img class="w-full max-w-[1550px] h-auto rounded-lg " style="margin: 0 auto" src="{{ asset('images/carroinicio.PNG') }}" alt="">

        </div>
       
    </div>
    

<!-- Caracteristicas Carro -->
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
      

<!-- Bottom -->

<a
class="group relative inline-block overflow-hidden border border-white px-8 py-3 focus:ring-3 focus:outline-hidden"
href="morecarac"
>
<span
  class="absolute inset-x-0 bottom-0 h-[2px] bg-white transition-all group-hover:h-full"
></span>

<span
  class="relative text-sm font-medium text-white transition-colors group-hover:text-black"
>
  Ver más
</span>
</a>



        
    </div>
<!-- Imagen a la izquierda, pero sin recortar -->
    <div class="w-1/2 flex items-center justify-end bg-black">
        <img class="w-auto h-full object-full" src="{{ asset('images/arduino.png') }}" alt="Imagen grande">
    </div>
</div>
<!-- Aqui acaban las caracteristicas -->


<div class="bg-black h-12">
</div>
    
  </div>
  <h2 class="font-bold bg-black text-4xl text-white dark:text-gray-200 leading-tight text-center">
    PRODUCTOS
  </h2>
  
  <div class="bg-black h-12">
  </div>
    
  

  <div class="flex flex-wrap justify-center gap-8 bg-black p-6">
    <!-- Tarjeta 1 -->
    <div class="w-full max-w-xs bg-white border border-white rounded-lg shadow-sm">
      
        <img class="p-6 rounded-t-lg" src="{{ asset('images/carro3.png') }}" alt="product image" />
      </a>
      <div class="px-4 pb-4">
        
          <h5 class="text-lg font-semibold tracking-tight text-gray-900">ACC - 001</h5>
        </a>
        <div class="flex items-center mt-2.5 mb-3">
          <div class="flex text-yellow-300">
            ★★★★★
          </div>
          <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-0.5 rounded ml-3">5.0</span>
        </div>
        <div class="flex items-center justify-between">
          
          <a href="productos" class="text-white bg-black hover:bg-blue-900 rounded-lg text-sm px-4 py-2">Ver más</a>
        </div>
      </div>
    </div>
  
    <!-- Tarjeta 2 -->
    <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-sm">
      <a href="#">
        <img class="p-6 rounded-t-lg" src="{{ asset('images/carro3.png') }}" alt="product image" />
      </a>
      <div class="px-4 pb-4">
        <a href="#">
          <h5 class="text-lg font-semibold tracking-tight text-gray-900">ACC - 002</h5>
        </a>
        
        <div class="flex items-center justify-between">
          <span class="text-2xl font-bold text-gray-900 justify-end">PROXIMAMENTE</span>
          
        </div>
      </div>
    </div>
  
    <!-- Tarjeta 3 -->
    <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-sm">
      <a href="#">
        <img class="p-6 rounded-t-lg" src="{{ asset('images/carro3.png') }}" alt="product image" />
      </a>
      <div class="px-4 pb-4">
        <a href="#">
          <h5 class="text-lg font-semibold tracking-tight text-gray-900">ACC - 003</h5>
        </a>
        
        <div class="flex items-center justify-between">
          <span class="text-2xl font-bold text-gray-900 justify-end">PROXIMAMENTE</span>
          
        </div>
      </div>
    </div>


  </div>

  <div class="bg-black h-12">
  </div>

  <div class="bg-black h-12">
  </div>

  <div class="bg-black h-12">
  </div>


    <section class="py-6 bg-white dark:text-gray-900">
      <div class="container mx-auto flex flex-col items-center justify-end p-4 space-y-8 md:p-1 lg:space-y-0 lg:flex-row lg:justify-between">
        <h1 class="text-3xl font-semibold leading-tight text-medium lg:text-left">¿Tienes alguna duda? Contáctanos</h1>
        <a href="nosotros">
        <button class="px-8 py-3 text-lg font-semibold rounded bg-black text-white">Contacto</button>
        </a>
      </div>
    </section>


    <div class="bg-black h-12">
    </div>


 
  

<div class="bg-black h-12">
</div>

<div class="bg-black h-12">
</div>


  
      
    

   @include('components.footer')
    
</x-app-layout>
