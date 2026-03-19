<section class="relative min-h-[90vh] overflow-hidden pt-28 flex items-center">
    <div class="network-bg"></div>
    <canvas id="networkCanvas" class="absolute inset-0 opacity-50 pointer-events-none" aria-hidden="true"></canvas>

    <div class="relative z-10 max-w-7xl mx-auto w-full px-6 grid lg:grid-cols-[1.1fr_.9fr] gap-14 items-center">
        <div>
            <p class="mb-4 inline-flex items-center gap-2 rounded-full border border-blue-400/20 bg-blue-400/10 px-4 py-1.5 text-xs uppercase tracking-[0.2em] text-blue-200">
                Infraestructura principal
            </p>

            <h1 class="text-4xl md:text-6xl font-bold tracking-tight leading-tight mb-6 max-w-4xl">
                Nube privada para operaciones que necesitan control real
            </h1>

            <p class="max-w-2xl text-lg md:text-xl leading-relaxed text-gray-400 mb-8">
                Diseñamos e implementamos entornos cloud privados e híbridos para plataformas digitales, operaciones críticas y cargas que exigen estabilidad, rendimiento y soberanía tecnológica.
            </p>

            <div class="flex flex-wrap gap-4">
                <a
                    href="<?= e(whatsapp_url('Hola SynFive, quiero consultar por Cloud Privada.')) ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="rounded-lg bg-blue-600 px-6 py-3 font-medium text-white transition hover:bg-blue-500"
                >
                    Solicitar diagnóstico
                </a>

                <a
                    href="#arquitectura"
                    class="rounded-lg border border-white/10 px-6 py-3 text-white transition hover:bg-white/5"
                >
                    Ver arquitectura
                </a>
            </div>
        </div>

        <div class="relative">
            <div class="w-full h-80 bg-gradient-to-br from-blue-500/20 to-cyan-500/20 rounded-xl blur-2xl absolute"></div>

            <div class="relative border border-white/10 rounded-2xl p-8 bg-gray-900/60 backdrop-blur-sm shadow-2xl">
                <p class="text-sm text-gray-400 mb-2">Modelo</p>
                <p class="text-lg font-semibold">Cloud privada e híbrida</p>

                <p class="text-sm text-gray-400 mt-4 mb-2">Prioridad</p>
                <p class="text-lg font-semibold">Control y estabilidad</p>

                <p class="text-sm text-gray-400 mt-4 mb-2">Escenario ideal</p>
                <p class="text-lg font-semibold">Operaciones críticas</p>
            </div>
        </div>
    </div>
</section>

<section class="border-t border-gray-800 py-24">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-semibold mb-6">
            Cuando la operación crece, depender de infraestructura genérica deja de alcanzar
        </h2>

        <p class="text-gray-400 text-lg max-w-3xl leading-relaxed">
            Una nube privada permite construir una base tecnológica con mayor control, personalización y consistencia operativa.
        </p>
    </div>
</section>

<section class="border-t border-gray-800 py-24" id="arquitectura">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-12">
            Beneficios de una nube privada bien diseñada
        </h2>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
            <div class="card-hover rounded-2xl border border-gray-800 bg-white/[0.02] p-6">
                <h3 class="text-xl font-semibold mb-3">Control operativo</h3>
                <p class="text-sm text-gray-400">
                    Definición precisa de recursos, políticas de acceso y comportamiento general de la infraestructura.
                </p>
            </div>

            <div class="card-hover rounded-2xl border border-gray-800 bg-white/[0.02] p-6">
                <h3 class="text-xl font-semibold mb-3">Performance estable</h3>
                <p class="text-sm text-gray-400">
                    Infraestructura dedicada y predecible para cargas que no toleran variaciones innecesarias.
                </p>
            </div>

            <div class="card-hover rounded-2xl border border-gray-800 bg-white/[0.02] p-6">
                <h3 class="text-xl font-semibold mb-3">Escalabilidad</h3>
                <p class="text-sm text-gray-400">
                    Crecimiento planificado sin desorden técnico ni dependencia total de entornos genéricos.
                </p>
            </div>

            <div class="card-hover rounded-2xl border border-gray-800 bg-white/[0.02] p-6">
                <h3 class="text-xl font-semibold mb-3">Soberanía tecnológica</h3>
                <p class="text-sm text-gray-400">
                    Mayor control sobre dónde viven los datos, cómo circulan y cómo se administra la plataforma.
                </p>
            </div>

            <div class="card-hover rounded-2xl border border-gray-800 bg-white/[0.02] p-6">
                <h3 class="text-xl font-semibold mb-3">Integración híbrida</h3>
                <p class="text-sm text-gray-400">
                    Posibilidad de combinar infraestructura propia con servicios externos según el caso de uso.
                </p>
            </div>

            <div class="card-hover rounded-2xl border border-gray-800 bg-white/[0.02] p-6">
                <h3 class="text-xl font-semibold mb-3">Continuidad operativa</h3>
                <p class="text-sm text-gray-400">
                    Base más sólida para sostener servicios críticos, procesos sensibles y evolución a largo plazo.
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
                SynFive también diseña arquitecturas orientadas a backend SaaS,
                microservicios, almacenamiento masivo, redes distribuidas y plataformas de datos.
            </p>
        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
            <a href="<?= e(absolute_url('infraestructura/backend-saas')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Backend SaaS</h3>
                <p class="text-sm text-gray-400">Arquitecturas backend para productos digitales con autenticación, APIs e integraciones.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/microservicios')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Microservicios</h3>
                <p class="text-sm text-gray-400">Arquitecturas desacopladas para crecer con mayor flexibilidad y resiliencia.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/almacenamiento-masivo')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Almacenamiento masivo</h3>
                <p class="text-sm text-gray-400">Entornos preparados para grandes volúmenes de datos con redundancia y disponibilidad.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/redes-distribuidas')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Redes distribuidas</h3>
                <p class="text-sm text-gray-400">Diseño de servicios resilientes para operaciones con múltiples nodos.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/plataformas-de-datos')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Plataformas de datos</h3>
                <p class="text-sm text-gray-400">Infraestructura orientada al procesamiento, análisis y disponibilidad de información crítica.</p>
            </a>
        </div>
    </div>
</section>

<section class="py-20 border-t border-gray-800">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-10">
            Preguntas frecuentes sobre nube privada
        </h2>

        <div class="space-y-8 text-gray-400">
            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿Qué ventajas tiene una nube privada frente a una solución pública?
                </h3>
                <p>
                    Una nube privada ofrece mayor control sobre recursos, políticas, rendimiento, seguridad y evolución técnica de la infraestructura.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿Cuándo conviene implementar una nube privada?
                </h3>
                <p>
                    Conviene cuando una operación necesita estabilidad, soberanía tecnológica, mayor previsibilidad de performance o una arquitectura adaptada a requerimientos específicos.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿SynFive trabaja con entornos híbridos?
                </h3>
                <p>
                    Sí. SynFive diseña e implementa entornos cloud privados e híbridos según la necesidad operativa de cada plataforma.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿La nube privada sirve solo para grandes empresas?
                </h3>
                <p>
                    No. También es útil para productos digitales y operaciones en crecimiento que necesitan una base técnica más controlada y preparada para escalar.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 border-t border-gray-800">
    <div class="max-w-5xl mx-auto text-center px-6">
        <p class="mb-4 inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-1.5 text-xs uppercase tracking-[0.2em] text-gray-300">
            <span class="h-2 w-2 rounded-full bg-blue-400"></span>
            Nube privada
        </p>

        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight mb-6">
            La infraestructura crítica necesita una base que puedas controlar de verdad
        </h2>

        <p class="text-gray-400 text-lg mb-10 max-w-2xl mx-auto leading-relaxed">
            Diseñemos un entorno cloud preparado para crecer con estabilidad, criterio técnico y control operativo real.
        </p>

        <div class="flex flex-wrap items-center justify-center gap-4">
            <a
                href="<?= e(whatsapp_url('Hola SynFive, quiero consultar por Cloud Privada.')) ?>"
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