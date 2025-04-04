<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-4xl text-white dark:text-gray-200 leading-tight text-center" style="margin: 2% auto">
          PREGUNTAS FRECUENTES
        </h2>
    </x-slot>

   


    <section class="bg-black py-16 px-4 sm:px-8 lg:px-16">
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Mockup de celular -->
            <div class="flex justify-center">
                <div class="relative mx-auto border-gray-800 bg-black border-[14px] rounded-[2.5rem] h-[600px] w-[300px]">
                    <div class="h-[32px] w-[3px] bg-gray-800 absolute -start-[17px] top-[72px] rounded-s-lg"></div>
                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -start-[17px] top-[124px] rounded-s-lg"></div>
                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -start-[17px] top-[178px] rounded-s-lg"></div>
                    <div class="h-[64px] w-[3px] bg-gray-800 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
                    <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-white">
                        <img src="{{ asset('images/app1.jpeg') }}" class="w-[272px] h-[572px]" alt="App móvil">
                    </div>
                </div>
            </div>
    
            <!-- Texto a la derecha -->
            <div class="text-white space-y-6">
                <h2 class="text-3xl sm:text-4xl font-bold text-green-500">Control desde tu celular</h2>
                <p class="text-base sm:text-lg text-gray-300">
                    Con nuestra aplicación móvil desarrollada con Ionic, puedes iniciar sesión y registrarte para:
                </p>
                <ul class="list-disc list-inside text-gray-300 space-y-2">
                    <li>Visitar el blog del ACC - 001</li>
                    <li>Comentar como usuario acerca del carro</li>
                    <li>Encontrar más información sobre el carro</li>
                    
                    
                </ul>
                <p class="text-gray-400 italic">
                    ¡Mantente conectado con la tecnología sustentable en la palma de tu mano!
                </p>
            </div>
        </div>
    </section>



    <section class="bg-black py-16 px-4 sm:px-8 lg:px-16">
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Texto a la izquierda -->
            <div class="text-white space-y-6">
                <h2 class="text-3xl sm:text-4xl font-bold text-green-500">Registro rápido y seguro</h2>
                <p class="text-base sm:text-lg text-gray-300">
                    Desde nuestra aplicación móvil, puedes crear tu cuenta de manera rápida y sencilla. Solo necesitas ingresar tu nombre, correo electrónico y una contraseña segura para comenzar a explorar todo lo que Bison tiene para ti. </p>
              
            </div>
    
            <!-- Mockup de celular a la derecha -->
            <div class="flex justify-center">
                <div class="relative mx-auto border-gray-800 bg-black border-[14px] rounded-[2.5rem] h-[600px] w-[300px]">
                    <div class="h-[32px] w-[3px] bg-gray-800 absolute -start-[17px] top-[72px] rounded-s-lg"></div>
                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -start-[17px] top-[124px] rounded-s-lg"></div>
                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -start-[17px] top-[178px] rounded-s-lg"></div>
                    <div class="h-[64px] w-[3px] bg-gray-800 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
                    <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-white">
                        <img src="{{ asset('images/app2.jpeg') }}" class="w-[272px] h-[572px]" alt="App móvil">
                    </div>
                </div>
            </div>
        </div>
    </section>
    



    <section class="bg-black py-16 px-4 sm:px-8 lg:px-16">
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Mockup de celular -->
            <div class="flex justify-center">
                <div class="relative mx-auto border-gray-800 bg-black border-[14px] rounded-[2.5rem] h-[600px] w-[300px]">
                    <div class="h-[32px] w-[3px] bg-gray-800 absolute -start-[17px] top-[72px] rounded-s-lg"></div>
                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -start-[17px] top-[124px] rounded-s-lg"></div>
                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -start-[17px] top-[178px] rounded-s-lg"></div>
                    <div class="h-[64px] w-[3px] bg-gray-800 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
                    <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-white">
                        <img src="{{ asset('images/app3.jpeg') }}" class="w-[272px] h-[572px]" alt="App móvil">
                    </div>
                </div>
            </div>
    
            <!-- Texto a la derecha -->
            <div class="text-white space-y-6">
                <h2 class="text-3xl sm:text-4xl font-bold text-green-500">Inicio de sesión seguro y sin complicaciones</h2>
                <p class="text-base sm:text-lg text-gray-300">
                    ¿Ya tienes cuenta? Inicia sesión fácilmente desde nuestra app móvil o la plataforma web. Solo necesitas tu correo electrónico y contraseña para acceder a tu panel personalizado.

Nuestro sistema garantiza que tu información esté siempre protegida, con autenticación segura y cifrado de datos.</p>
                
            </div>
        </div>
    </section>
    


<div class="bg-black h-12"></div>

<div class="bg-black h-12"></div>

    @include('components.footer')
</x-app-layout>
