<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-4xl text-white dark:text-gray-200 leading-tight text-center" style="margin: 2% auto">
            POLÍTICAS Y PRIVACIDAD
        </h2>
    </x-slot>

    <div class="bg-black py-12 px-6 text-white">
        <div class="max-w-4xl mx-auto space-y-8 text-justify text-sm sm:text-base">

            <section>
                <h3 class="text-xl font-semibold text-green-500 mb-2">1. Uso de información personal</h3>
                <p class="text-gray-300">
                    En Bison, respetamos tu privacidad. Toda la información recopilada a través de formularios o registros será utilizada únicamente con fines internos, como mejorar la experiencia del usuario o brindar soporte técnico.
                </p>
            </section>

            <section>
                <h3 class="text-xl font-semibold text-green-500 mb-2">2. Seguridad de tus datos</h3>
                <p class="text-gray-300">
                    Implementamos medidas de seguridad para proteger tus datos personales y evitar accesos no autorizados. Tu información está cifrada y almacenada de forma segura en nuestros servidores.
                </p>
            </section>

            <section>
                <h3 class="text-xl font-semibold text-green-500 mb-2">3. Cookies y seguimiento</h3>
                <p class="text-gray-300">
                    Este sitio puede utilizar cookies para mejorar la experiencia de navegación. No recopilamos información personal sin tu consentimiento explícito.
                </p>
            </section>

            <section>
                <h3 class="text-xl font-semibold text-green-500 mb-2">4. Derechos del usuario</h3>
                <p class="text-gray-300">
                    Puedes acceder, modificar o eliminar tus datos personales en cualquier momento. Solo contáctanos a través de nuestros canales oficiales.
                </p>
            </section>

            <section>
                <h3 class="text-xl font-semibold text-green-500 mb-2">5. Cambios en esta política</h3>
                <p class="text-gray-300">
                    Nos reservamos el derecho de modificar esta política de privacidad. Te recomendamos revisarla periódicamente para mantenerte informado.
                </p>
            </section>
        </div>
    </div>

    <div class="bg-black h-12"></div>

    @include('components.footer')
</x-app-layout>
