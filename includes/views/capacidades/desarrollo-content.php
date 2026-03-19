<section class="min-h-screen flex items-center pt-24 relative overflow-hidden">
    <div class="network-bg"></div>
    <canvas id="networkCanvas" class="absolute inset-0 opacity-60 pointer-events-none" aria-hidden="true"></canvas>

    <div class="relative z-10 max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <p class="text-sm uppercase tracking-[0.2em] text-gray-500 mb-4">
                Capacidades
            </p>

            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                Desarrollo de plataformas y sistemas técnicos
            </h1>

            <p class="text-gray-400 text-lg mb-8 leading-relaxed">
                Construimos aplicaciones, sistemas backend y plataformas digitales diseñadas para integrarse con infraestructura, datos y automatización.
            </p>

            <div class="flex flex-wrap gap-4">
                <a
                    href="<?= e(whatsapp_url('Hola SynFive, quiero consultar sobre desarrollo.')) ?>"
                    class="bg-blue-600 px-6 py-3 rounded-lg font-medium text-white hover:bg-blue-500 transition-colors"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Solicitar diagnóstico
                </a>

                <a
                    href="#tipos"
                    class="border border-gray-700 px-6 py-3 rounded-lg text-white hover:bg-gray-900 transition-colors"
                >
                    Ver tipos de desarrollo
                </a>
            </div>
        </div>

        <div class="relative">
            <div class="w-full h-80 bg-gradient-to-br from-blue-500/20 to-indigo-500/20 rounded-xl blur-2xl absolute"></div>

            <div class="relative border border-white/10 rounded-2xl p-8 bg-gray-900/60 backdrop-blur-sm shadow-2xl">
                <p class="text-sm text-gray-400 mb-2">Objetivo</p>
                <p class="text-lg font-semibold">Plataformas robustas</p>

                <p class="text-sm text-gray-400 mt-4 mb-2">Arquitectura</p>
                <p class="text-lg font-semibold">Backend + Infraestructura</p>

                <p class="text-sm text-gray-400 mt-4 mb-2">Integración</p>
                <p class="text-lg font-semibold">APIs y automatización</p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-6">
            El desarrollo es la capa que conecta todo
        </h2>

        <p class="text-gray-400 max-w-3xl text-lg leading-relaxed">
            Las plataformas digitales actuales requieren sistemas bien diseñados que conecten infraestructura, datos, inteligencia artificial y operaciones. Nuestro enfoque de desarrollo prioriza arquitectura, estabilidad y evolución a largo plazo.
        </p>
    </div>
</section>

<section id="tipos" class="py-24 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-12">
            Tipos de desarrollo que realizamos
        </h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-blue-400 transition">
                <h3 class="font-semibold mb-3">Plataformas web</h3>
                <p class="text-gray-400 text-sm">
                    Desarrollo de aplicaciones web orientadas a productos digitales o sistemas internos.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-indigo-400 transition">
                <h3 class="font-semibold mb-3">Backend de sistemas</h3>
                <p class="text-gray-400 text-sm">
                    Arquitecturas backend diseñadas para manejar lógica de negocio, APIs y procesamiento.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-cyan-400 transition">
                <h3 class="font-semibold mb-3">Integraciones</h3>
                <p class="text-gray-400 text-sm">
                    Conexión entre sistemas, plataformas externas y servicios de terceros.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-purple-400 transition">
                <h3 class="font-semibold mb-3">Automatización de procesos</h3>
                <p class="text-gray-400 text-sm">
                    Desarrollo de sistemas que automatizan flujos operativos y tareas complejas.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-teal-400 transition">
                <h3 class="font-semibold mb-3">Plataformas SaaS</h3>
                <p class="text-gray-400 text-sm">
                    Construcción de productos digitales escalables basados en modelo SaaS.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-sky-400 transition">
                <h3 class="font-semibold mb-3">Sistemas personalizados</h3>
                <p class="text-gray-400 text-sm">
                    Soluciones específicas diseñadas para necesidades operativas concretas.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-10 max-w-3xl">
            <h2 class="text-3xl font-semibold mb-4">
                Explorá otras capacidades de SynFive
            </h2>
            <p class="text-gray-400">
                El desarrollo técnico se potencia cuando trabaja integrado con infraestructura,
                automatización, ciberseguridad y plataformas orientadas a datos.
            </p>
        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
            <a href="<?= e(absolute_url('infraestructura/backend-saas')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Backend SaaS</h3>
                <p class="text-sm text-gray-400">Arquitecturas backend preparadas para escalar, integrar y sostener productos digitales.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/plataformas-de-datos')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Plataformas de datos</h3>
                <p class="text-sm text-gray-400">Infraestructura orientada a capturar, organizar y explotar información crítica.</p>
            </a>

            <a href="<?= e(absolute_url('capacidades/ia')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">IA y automatización</h3>
                <p class="text-sm text-gray-400">Procesos inteligentes para ampliar capacidad operativa y reducir fricción.</p>
            </a>

            <a href="<?= e(absolute_url('capacidades/ciberseguridad')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Ciberseguridad</h3>
                <p class="text-sm text-gray-400">Protección operativa, control de accesos y arquitectura segura desde el diseño.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/nube-privada')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Nube privada</h3>
                <p class="text-sm text-gray-400">Infraestructura dedicada para operaciones que requieren control real y continuidad.</p>
            </a>
        </div>
    </div>
</section>

<section class="py-20 border-t border-gray-800">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-10">
            Preguntas frecuentes sobre desarrollo
        </h2>

        <div class="space-y-8 text-gray-400">
            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿Qué tipo de desarrollo realiza SynFive?
                </h3>
                <p>
                    SynFive desarrolla plataformas web, sistemas backend, integraciones, automatización de procesos, productos SaaS y soluciones personalizadas para operaciones digitales.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿El desarrollo se integra con infraestructura y datos?
                </h3>
                <p>
                    Sí. El enfoque de SynFive conecta desarrollo con infraestructura, datos, automatización y operación técnica real.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿Cuándo conviene construir una solución a medida?
                </h3>
                <p>
                    Conviene cuando una operación necesita integraciones específicas, lógica de negocio propia o una plataforma preparada para evolucionar sin depender de herramientas genéricas.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿SynFive desarrolla plataformas SaaS?
                </h3>
                <p>
                    Sí. SynFive desarrolla productos y plataformas SaaS preparados para escalar, integrarse con otros sistemas y sostener operación continua.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 border-t border-gray-800">
    <div class="max-w-5xl mx-auto text-center px-6">
        <p class="mb-4 inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-1.5 text-xs uppercase tracking-[0.2em] text-gray-300">
            <span class="h-2 w-2 rounded-full bg-blue-400"></span>
            Desarrollo
        </p>

        <h2 class="text-3xl font-semibold md:text-5xl tracking-tight mb-6">
            Las plataformas robustas nacen de una buena arquitectura
        </h2>

        <p class="text-gray-400 text-lg mb-10 max-w-2xl mx-auto leading-relaxed">
            Construyamos sistemas preparados para evolucionar, escalar y soportar operaciones reales.
        </p>

        <div class="flex flex-wrap items-center justify-center gap-4">
            <a
                href="<?= e(whatsapp_url('Hola SynFive, quiero consultar sobre desarrollo de plataformas.')) ?>"
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