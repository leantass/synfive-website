<section class="min-h-screen flex items-center pt-24 relative overflow-hidden">
    <div class="network-bg"></div>
    <canvas id="networkCanvas" class="absolute inset-0 opacity-60 pointer-events-none" aria-hidden="true"></canvas>

    <div class="relative z-10 max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <p class="text-sm uppercase tracking-[0.2em] text-gray-500 mb-4">
                Infraestructura
            </p>

            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                Infraestructura para almacenamiento masivo de datos
            </h1>

            <p class="text-gray-400 text-lg mb-8 leading-relaxed">
                Diseñamos entornos preparados para manejar grandes volúmenes de información, con arquitectura de almacenamiento confiable, escalable y optimizada para operaciones críticas.
            </p>

            <div class="flex flex-wrap gap-4">
                <a
                    href="<?= e(whatsapp_url('Hola SynFive, quiero consultar sobre almacenamiento masivo.')) ?>"
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
            <div class="w-full h-80 bg-gradient-to-br from-teal-500/20 to-cyan-500/20 rounded-xl blur-2xl absolute"></div>

            <div class="relative border border-white/10 rounded-2xl p-8 bg-gray-900/60 backdrop-blur-sm shadow-2xl">
                <p class="text-sm text-gray-400 mb-2">Capacidad</p>
                <p class="text-lg font-semibold">Petabytes de datos</p>

                <p class="text-sm text-gray-400 mt-4 mb-2">Arquitectura</p>
                <p class="text-lg font-semibold">Clusters de almacenamiento</p>

                <p class="text-sm text-gray-400 mt-4 mb-2">Disponibilidad</p>
                <p class="text-lg font-semibold">Alta redundancia</p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-6">
            El almacenamiento es la base de cualquier plataforma moderna
        </h2>

        <p class="text-gray-400 max-w-3xl text-lg leading-relaxed">
            Desde aplicaciones SaaS hasta plataformas de datos, la capacidad de almacenar, recuperar y procesar información es crítica. Una infraestructura de almacenamiento adecuada garantiza disponibilidad, rendimiento y crecimiento sostenido.
        </p>
    </div>
</section>

<section id="arquitectura" class="py-24 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-12">
            Características de una infraestructura de almacenamiento robusta
        </h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-teal-400 transition">
                <h3 class="font-semibold mb-3">Escalabilidad</h3>
                <p class="text-gray-400 text-sm">
                    Capacidad de aumentar almacenamiento sin afectar el funcionamiento del sistema.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-cyan-400 transition">
                <h3 class="font-semibold mb-3">Redundancia</h3>
                <p class="text-gray-400 text-sm">
                    Sistemas replicados que reducen riesgo de pérdida de información.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-indigo-400 transition">
                <h3 class="font-semibold mb-3">Disponibilidad</h3>
                <p class="text-gray-400 text-sm">
                    Acceso permanente a datos para operaciones críticas.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-violet-400 transition">
                <h3 class="font-semibold mb-3">Optimización</h3>
                <p class="text-gray-400 text-sm">
                    Sistemas diseñados para maximizar velocidad y eficiencia en acceso a datos.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-emerald-400 transition">
                <h3 class="font-semibold mb-3">Integración</h3>
                <p class="text-gray-400 text-sm">
                    Compatibilidad con aplicaciones, bases de datos y plataformas analíticas.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-sky-400 transition">
                <h3 class="font-semibold mb-3">Seguridad</h3>
                <p class="text-gray-400 text-sm">
                    Protección y control de acceso para garantizar integridad de la información.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-10 max-w-3xl">
            <h2 class="text-3xl font-semibold mb-4">
                Explorá otras capacidades de infraestructura
            </h2>
            <p class="text-gray-400">
                SynFive también diseña arquitecturas orientadas a nube privada, backend SaaS,
                microservicios, redes distribuidas y plataformas de datos.
            </p>
        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
            <a href="<?= e(absolute_url('infraestructura/nube-privada')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Nube privada</h3>
                <p class="text-sm text-gray-400">Infraestructura dedicada e híbrida para operaciones con mayor control operativo.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/backend-saas')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Backend SaaS</h3>
                <p class="text-sm text-gray-400">Arquitecturas backend para productos SaaS con crecimiento sostenido.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/microservicios')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Microservicios</h3>
                <p class="text-sm text-gray-400">Servicios desacoplados para plataformas con mayor flexibilidad y resiliencia.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/redes-distribuidas')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Redes distribuidas</h3>
                <p class="text-sm text-gray-400">Diseño de entornos resilientes para servicios conectados y distribuidos.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/plataformas-de-datos')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Plataformas de datos</h3>
                <p class="text-sm text-gray-400">Infraestructura orientada al procesamiento, análisis y disponibilidad de datos.</p>
            </a>
        </div>
    </div>
</section>

<section class="py-20 border-t border-gray-800">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-10">
            Preguntas frecuentes sobre almacenamiento masivo
        </h2>

        <div class="space-y-8 text-gray-400">
            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿Qué es una infraestructura de almacenamiento masivo?
                </h3>
                <p>
                    Es una arquitectura diseñada para almacenar, organizar y disponibilizar grandes volúmenes de información de forma escalable, redundante y confiable.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿Cuándo conviene implementar almacenamiento masivo?
                </h3>
                <p>
                    Conviene cuando una plataforma debe manejar grandes volúmenes de datos, garantizar disponibilidad constante, sostener crecimiento continuo o reducir riesgos de pérdida de información.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿Qué diferencias hay entre almacenamiento masivo y almacenamiento tradicional?
                </h3>
                <p>
                    El almacenamiento tradicional suele estar pensado para volúmenes más limitados o entornos simples. El almacenamiento masivo está diseñado para escalar, mantener redundancia, optimizar acceso y sostener operaciones críticas.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿SynFive puede diseñar una arquitectura de almacenamiento masivo?
                </h3>
                <p>
                    Sí. SynFive diseña infraestructuras de almacenamiento orientadas a volumen, disponibilidad, integración, seguridad y evolución sostenida según la necesidad real de cada operación.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 border-t border-gray-800">
    <div class="max-w-5xl mx-auto text-center px-6">
        <p class="mb-4 inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-1.5 text-xs uppercase tracking-[0.2em] text-gray-300">
            <span class="h-2 w-2 rounded-full bg-blue-400"></span>
            Almacenamiento masivo
        </p>

        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight mb-6">
            Los datos crecen constantemente. La infraestructura debe acompañarlos.
        </h2>

        <p class="text-gray-400 text-lg mb-10 max-w-2xl mx-auto leading-relaxed">
            Diseñemos un entorno de almacenamiento preparado para el crecimiento real de tu plataforma.
        </p>

        <div class="flex flex-wrap items-center justify-center gap-4">
            <a
                href="<?= e(whatsapp_url('Hola SynFive, quiero consultar sobre almacenamiento masivo.')) ?>"
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