<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-4xl text-white bg-black leading-tight text-center">
            QUIÉNES SOMOS
        </h2>
    </x-slot>

    <!-- Sección 1: Historia -->
    <div class="flex flex-col lg:flex-row h-auto w-full bg-black">
        <div class="w-full lg:w-1/2 flex items-center justify-center p-6">
            <img class="w-full h-auto max-h-[500px] object-contain" src="{{ asset('images/logo.png') }}" alt="Imagen grande">
        </div>
        <div class="w-full lg:w-1/2 flex flex-col justify-center px-6 lg:px-16 py-8 text-white">
            <h2 class="text-4xl font-bold mb-6">Nuestra Historia</h2>
            <p class="text-lg mb-8">
                Bison es una empresa tecnológica líder en el mercado, especializada en soluciones innovadoras que
                transforman la forma en que las empresas operan y se conectan con sus clientes. Nuestro enfoque se centra
                en ofrecer tecnología de vanguardia que impulse el crecimiento de nuestros clientes y genere impacto en
                la sociedad. Con un equipo altamente capacitado y una pasión por la excelencia, estamos comprometidos en
                brindar soluciones de calidad que impulsen el éxito de nuestros socios comerciales.
            </p>
        </div>
    </div>

    <!-- Sección 2: Tecnología -->
    <div class="flex flex-col-reverse lg:flex-row h-auto w-full bg-black">
        <div class="w-full lg:w-1/2 flex flex-col justify-center px-6 lg:px-16 py-8 text-white">
            <h2 class="text-4xl font-bold mb-6">Nuestra Tecnología</h2>
            <p class="text-lg mb-8">
                En Bison, nos esforzamos por mantenernos a la vanguardia de la innovación tecnológica. Nuestra dedicación a la excelencia nos impulsa a desarrollar soluciones avanzadas que aborden las necesidades cambiantes del mercado. Desde la programación hasta la innovación en la IA, nuestra tecnología de última generación está diseñada para optimizar operaciones, mejorar la eficiencia y potenciar el crecimiento empresarial.
            </p>
        </div>
        <div class="w-full lg:w-1/2 flex items-center justify-center p-6">
            <img class="w-full h-auto max-h-[500px] object-contain" src="{{ asset('images/program.jpg') }}" alt="Imagen grande">
        </div>
    </div>

    <!-- Espacio decorativo -->
    <div class="bg-black h-12"></div>

    <!-- Sección de Contacto -->
    <section class="py-12 bg-black text-white">
        <div class="grid max-w-6xl grid-cols-1 px-6 mx-auto lg:px-8 md:grid-cols-2 md:divide-x">
            <div class="py-6 md:py-0 md:px-6">
                <h1 class="text-4xl font-bold pb-1">Contacto</h1>
                <p class="pt-2 pb-6">Servicio de atención 24/7</p>
                <div class="space-y-4">
                    <p class="flex items-center pb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                        <span>Papantla de Olarte, Zona Centro.</span>
                    </p>
                    <p class="flex items-center pb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        <span>784-201-4045</span>
                    </p>
                    <p class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                        <span>contactobison@gmail.com</span>
                    </p>
                </div>
            </div>

            <div class="py-6 md:py-0 md:px-6 flex flex-col justify-center">
                <h2 class="text-2xl font-semibold mb-4">Encuéntranos aquí</h2>
                <p class="mb-4">Estamos ubicados en una zona accesible. Puedes visitarnos en la siguiente dirección:</p>
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

    <div class="bg-black h-12"></div>

    @include('components.footer')
</x-app-layout>
