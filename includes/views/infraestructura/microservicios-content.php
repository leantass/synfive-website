<section class="min-h-screen flex items-center pt-24 relative overflow-hidden">
    <div class="network-bg"></div>
    <canvas id="networkCanvas" class="absolute inset-0 opacity-60 pointer-events-none" aria-hidden="true"></canvas>

    <div class="relative z-10 max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <p class="text-sm uppercase tracking-[0.2em] text-gray-500 mb-4">
                Infraestructura
            </p>

            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                Arquitecturas basadas en microservicios para plataformas escalables
            </h1>

            <p class="text-gray-400 text-lg mb-8 leading-relaxed">
                Diseñamos sistemas desacoplados que permiten a las plataformas evolucionar sin fricción, separando responsabilidades y permitiendo escalar servicios de forma independiente.
            </p>

            <div class="flex flex-wrap gap-4">
                <a
                    href="<?= e(whatsapp_url('Hola SynFive, quiero consultar sobre microservicios.')) ?>"
                    class="bg-blue-600 px-6 py-3 rounded-lg font-medium text-white hover:bg-blue-500 transition-colors"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Solicitar diagnóstico
                </a>

                <a
                    href="#arquitectura"
                    class="border border-gray-700 px-6 py-3 rounded-lg text-white hover:bg-gray-900 transition-colors"
                >
                    Ver arquitectura
                </a>
            </div>
        </div>

        <div class="relative">
            <div class="w-full h-80 bg-gradient-to-br from-violet-500/20 to-blue-500/20 rounded-xl blur-2xl absolute"></div>

            <div class="relative border border-white/10 rounded-2xl p-8 bg-gray-900/60 backdrop-blur-sm shadow-2xl">
                <p class="text-sm text-gray-400 mb-2">Arquitectura</p>
                <p class="text-lg font-semibold">Servicios desacoplados</p>

                <p class="text-sm text-gray-400 mt-4 mb-2">Escalabilidad</p>
                <p class="text-lg font-semibold">Crecimiento independiente</p>

                <p class="text-sm text-gray-400 mt-4 mb-2">Operación</p>
                <p class="text-lg font-semibold">Resiliencia y control</p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-6">
            Por qué las plataformas modernas usan microservicios
        </h2>

        <p class="text-gray-400 max-w-3xl text-lg leading-relaxed">
            En sistemas monolíticos, cada cambio impacta en toda la aplicación. Las arquitecturas basadas en microservicios separan funciones en servicios independientes que pueden desarrollarse, escalarse y desplegarse sin afectar al resto del sistema.
        </p>
    </div>
</section>

<section class="py-24 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-12">
            Beneficios de una arquitectura desacoplada
        </h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-violet-400 transition">
                <h3 class="font-semibold mb-3">Escalabilidad independiente</h3>
                <p class="text-gray-400 text-sm">
                    Cada servicio puede escalar según su demanda específica sin afectar el resto del sistema.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-blue-400 transition">
                <h3 class="font-semibold mb-3">Mayor resiliencia</h3>
                <p class="text-gray-400 text-sm">
                    Un fallo en un servicio no necesariamente afecta toda la plataforma.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-cyan-400 transition">
                <h3 class="font-semibold mb-3">Desarrollo más ágil</h3>
                <p class="text-gray-400 text-sm">
                    Los equipos pueden trabajar en diferentes servicios en paralelo sin generar conflictos estructurales.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="arquitectura" class="py-24 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-12">
            Cómo se estructura una arquitectura de microservicios
        </h2>

        <div class="grid md:grid-cols-2 gap-10">
            <div class="border border-white/10 rounded-xl p-6">
                <h3 class="font-semibold mb-3">Gateway de API</h3>
                <p class="text-gray-400 text-sm">
                    Punto de entrada único que dirige solicitudes hacia los servicios correctos.
                </p>
            </div>

            <div class="border border-white/10 rounded-xl p-6">
                <h3 class="font-semibold mb-3">Servicios independientes</h3>
                <p class="text-gray-400 text-sm">
                    Cada microservicio maneja una responsabilidad específica.
                </p>
            </div>

            <div class="border border-white/10 rounded-xl p-6">
                <h3 class="font-semibold mb-3">Comunicación entre servicios</h3>
                <p class="text-gray-400 text-sm">
                    Los servicios se comunican mediante APIs o eventos.
                </p>
            </div>

            <div class="border border-white/10 rounded-xl p-6">
                <h3 class="font-semibold mb-3">Observabilidad</h3>
                <p class="text-gray-400 text-sm">
                    Monitoreo, métricas y trazabilidad del sistema.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 border-t border-gray-800">
    <div class="max-w-5xl mx-auto text-center px-6">
        <p class="mb-4 inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-1.5 text-xs uppercase tracking-[0.2em] text-gray-300">
            <span class="h-2 w-2 rounded-full bg-blue-400"></span>
            Microservicios
        </p>

        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight mb-6">
            Una plataforma modular crece mejor que una estructura rígida
        </h2>

        <p class="text-gray-400 text-lg mb-10 max-w-2xl mx-auto leading-relaxed">
            Diseñemos una arquitectura desacoplada preparada para crecer con flexibilidad y control.
        </p>

        <div class="flex flex-wrap items-center justify-center gap-4">
            <a
                href="<?= e(whatsapp_url('Hola SynFive, quiero consultar sobre microservicios.')) ?>"
                class="bg-blue-600 px-8 py-4 rounded-lg font-medium text-white hover:bg-blue-500 transition-colors inline-block"
                target="_blank"
                rel="noopener noreferrer"
            >
                Hablar con SynFive
            </a>

            <a
                href="<?= e(absolute_url()) ?>"
                class="rounded-lg border border-white/10 px-8 py-4 text-white transition hover:bg-white/5"
            >
                Volver al inicio
            </a>
        </div>
    </div>
</section>