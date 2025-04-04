<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-4xl text-white dark:text-gray-200 leading-tight text-center" style="margin: 2% auto">
          PREGUNTAS FRECUENTES
        </h2>
    </x-slot>

    <div class="bg-black py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto space-y-8">
            <!-- Pregunta 1 -->
            <details class="bg-gray-800 text-white rounded-lg shadow-md p-6">
                <summary class="cursor-pointer text-lg font-semibold">
                    ¿Qué es el ACC-001?
                </summary>
                <p class="mt-3 text-sm text-gray-300">
                    El ACC-001 es un robot recolector de basura autónomo desarrollado por Bison, equipado con sensores inteligentes y diseñado para mantener limpias áreas interiores y, próximamente, espacios exteriores.
                </p>
            </details>

            <!-- Pregunta 2 -->
            <details class="bg-gray-800 text-white rounded-lg shadow-md p-6">
                <summary class="cursor-pointer text-lg font-semibold">
                    ¿Dónde puede operar el robot?
                </summary>
                <p class="mt-3 text-sm text-gray-300">
                    Actualmente, está diseñado para operar en interiores como oficinas, escuelas, y áreas industriales. En versiones futuras, se adaptará para exteriores y espacios públicos.
                </p>
            </details>

            <!-- Pregunta 3 -->
            <details class="bg-gray-800 text-white rounded-lg shadow-md p-6">
                <summary class="cursor-pointer text-lg font-semibold">
                    ¿Cómo se controla el ACC-001?
                </summary>
                <p class="mt-3 text-sm text-gray-300">
                    El robot puede funcionar de manera autónoma o ser controlado mediante una app móvil desarrollada en Ionic, permitiendo monitoreo y operación en tiempo real.
                </p>
            </details>

            <!-- Pregunta 4 -->
            <details class="bg-gray-800 text-white rounded-lg shadow-md p-6">
                <summary class="cursor-pointer text-lg font-semibold">
                    ¿Cuál es la capacidad de recolección del robot?
                </summary>
                <p class="mt-3 text-sm text-gray-300">
                    El ACC-001 puede almacenar más de 1 KG de residuos, gracias a su compartimento interno diseñado para residuos sólidos y succión de partículas pequeñas.
                </p>
            </details>

            <!-- Pregunta 5 -->
            <details class="bg-gray-800 text-white rounded-lg shadow-md p-6">
                <summary class="cursor-pointer text-lg font-semibold">
                    ¿Cómo puedo adquirir un robot Bison?
                </summary>
                <p class="mt-3 text-sm text-gray-300">
                    Actualmente estamos en etapa de desarrollo y pruebas. Pronto podrás hacer pedidos a través de nuestra página web oficial y redes sociales.
                </p>
            </details>
        </div>
    </div>

    <div class="bg-black h-12"></div>

    @include('components.footer')
</x-app-layout>
