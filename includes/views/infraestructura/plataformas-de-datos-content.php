<section class="min-h-screen flex items-center pt-24 relative overflow-hidden">
    <div class="network-bg"></div>
    <canvas id="networkCanvas" class="absolute inset-0 opacity-60 pointer-events-none" aria-hidden="true"></canvas>

    <div class="relative z-10 max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <p class="text-sm uppercase tracking-[0.2em] text-gray-500 mb-4">
                Infraestructura
            </p>

            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                Plataformas de datos para operaciones que dependen de información crítica
            </h1>

            <p class="text-gray-400 text-lg mb-8 leading-relaxed">
                Diseñamos entornos orientados al almacenamiento, organización, disponibilidad y explotación de datos, preparados para analítica, reporting, trazabilidad y crecimiento sostenido.
            </p>

            <div class="flex flex-wrap gap-4">
                <a
                    href="<?= e(whatsapp_url('Hola SynFive, quiero consultar sobre plataformas de datos.')) ?>"
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
            <div class="w-full h-80 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 rounded-xl blur-2xl absolute"></div>

            <div class="relative border border-white/10 rounded-2xl p-8 bg-gray-900/60 backdrop-blur-sm shadow-2xl">
                <p class="text-sm text-gray-400 mb-2">Estructura</p>
                <p class="text-lg font-semibold">Fuentes, procesos y almacenamiento</p>

                <p class="text-sm text-gray-400 mt-4 mb-2">Objetivo</p>
                <p class="text-lg font-semibold">Disponibilidad y explotación</p>

                <p class="text-sm text-gray-400 mt-4 mb-2">Escala</p>
                <p class="text-lg font-semibold">Crecimiento sostenido</p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-6">
            Cuando los datos pasan a ser parte central del negocio, la infraestructura también cambia
        </h2>

        <p class="text-gray-400 max-w-3xl text-lg leading-relaxed">
            No alcanza con guardar información. Una plataforma de datos bien diseñada permite capturar, organizar, consultar, transformar y disponibilizar datos de forma consistente para distintos procesos, áreas o sistemas.
        </p>
    </div>
</section>

<section class="py-24 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-12">
            Qué resuelve una plataforma de datos sólida
        </h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-cyan-400 transition">
                <h3 class="font-semibold mb-3">Disponibilidad de información</h3>
                <p class="text-gray-400 text-sm">
                    Acceso consistente a los datos para sistemas, usuarios o procesos que dependen de ellos.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-blue-500 transition">
                <h3 class="font-semibold mb-3">Organización y estructura</h3>
                <p class="text-gray-400 text-sm">
                    Ordenamiento de fuentes, modelos y flujos para evitar caos operativo y duplicidad.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-indigo-400 transition">
                <h3 class="font-semibold mb-3">Escalabilidad</h3>
                <p class="text-gray-400 text-sm">
                    Preparación para crecimiento de volumen, consultas y nuevos procesos asociados.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-violet-400 transition">
                <h3 class="font-semibold mb-3">Integración entre sistemas</h3>
                <p class="text-gray-400 text-sm">
                    Capacidad de conectar múltiples fuentes, procesos y capas de consumo de datos.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-teal-400 transition">
                <h3 class="font-semibold mb-3">Trazabilidad</h3>
                <p class="text-gray-400 text-sm">
                    Mayor claridad sobre el recorrido, transformación y utilización de la información.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-sky-400 transition">
                <h3 class="font-semibold mb-3">Base para analítica y reporting</h3>
                <p class="text-gray-400 text-sm">
                    Infraestructura preparada para dashboards, análisis y toma de decisiones basada en datos.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="arquitectura" class="py-24 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-12">
            Cómo se estructura una plataforma de datos
        </h2>

        <div class="grid md:grid-cols-2 gap-10">
            <div class="border border-white/10 rounded-xl p-6">
                <h3 class="font-semibold mb-3">Fuentes de datos</h3>
                <p class="text-gray-400 text-sm">
                    Sistemas, aplicaciones, procesos o eventos desde donde se origina la información.
                </p>
            </div>

            <div class="border border-white/10 rounded-xl p-6">
                <h3 class="font-semibold mb-3">Ingesta y procesamiento</h3>
                <p class="text-gray-400 text-sm">
                    Mecanismos que capturan, transforman o preparan los datos para su uso posterior.
                </p>
            </div>

            <div class="border border-white/10 rounded-xl p-6">
                <h3 class="font-semibold mb-3">Almacenamiento y organización</h3>
                <p class="text-gray-400 text-sm">
                    Capas de persistencia orientadas a disponibilidad, volumen y estructura adecuada.
                </p>
            </div>

            <div class="border border-white/10 rounded-xl p-6">
                <h3 class="font-semibold mb-3">Consumo y explotación</h3>
                <p class="text-gray-400 text-sm">
                    Uso de los datos en reportes, analítica, productos, automatizaciones o procesos internos.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-12">
            Cuándo conviene construir una plataforma de datos
        </h2>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-cyan-400 transition">
                <h3 class="font-semibold mb-3">Múltiples fuentes de información</h3>
                <p class="text-gray-400 text-sm">
                    Cuando los datos vienen de distintos sistemas y hace falta consolidarlos con criterio.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-blue-500 transition">
                <h3 class="font-semibold mb-3">Necesidad de reporting consistente</h3>
                <p class="text-gray-400 text-sm">
                    Cuando la operación depende de tableros, consultas o métricas confiables.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-indigo-400 transition">
                <h3 class="font-semibold mb-3">Procesos basados en datos</h3>
                <p class="text-gray-400 text-sm">
                    Cuando la toma de decisiones o la automatización requieren información bien estructurada.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-violet-400 transition">
                <h3 class="font-semibold mb-3">Crecimiento sostenido del volumen</h3>
                <p class="text-gray-400 text-sm">
                    Cuando la cantidad de información deja de poder manejarse de forma improvisada.
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
                almacenamiento masivo, microservicios y redes distribuidas.
            </p>
        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
            <a href="<?= e(absolute_url('infraestructura/nube-privada')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Nube privada</h3>
                <p class="text-sm text-gray-400">Infraestructura dedicada e híbrida para operaciones con mayor control operativo.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/backend-saas')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Backend SaaS</h3>
                <p class="text-sm text-gray-400">Arquitecturas backend para productos SaaS con integraciones, usuarios y escalabilidad.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/almacenamiento-masivo')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Almacenamiento masivo</h3>
                <p class="text-sm text-gray-400">Entornos robustos para grandes volúmenes de información con redundancia y disponibilidad.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/microservicios')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Microservicios</h3>
                <p class="text-sm text-gray-400">Servicios desacoplados para plataformas con mayor flexibilidad, resiliencia y evolución.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/redes-distribuidas')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Redes distribuidas</h3>
                <p class="text-sm text-gray-400">Diseño de entornos resilientes para operaciones con múltiples nodos y capas conectadas.</p>
            </a>
        </div>
    </div>
</section>

<section class="py-20 border-t border-gray-800">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-10">
            Preguntas frecuentes sobre plataformas de datos
        </h2>

        <div class="space-y-8 text-gray-400">
            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿Qué es una plataforma de datos?
                </h3>
                <p>
                    Una plataforma de datos es una arquitectura que permite capturar, organizar, almacenar, procesar y disponibilizar información para distintos sistemas, procesos o análisis.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿Cuándo conviene construir una plataforma de datos?
                </h3>
                <p>
                    Conviene cuando una organización depende de múltiples fuentes de información, necesita consolidar datos o requiere analítica confiable para la operación.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿Una plataforma de datos es lo mismo que una base de datos?
                </h3>
                <p>
                    No. Una base de datos es solo una parte. Una plataforma de datos incluye ingesta, transformación, almacenamiento, disponibilidad y consumo de información.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿SynFive diseña plataformas de datos completas?
                </h3>
                <p>
                    Sí. SynFive diseña arquitecturas de datos que permiten capturar, organizar, disponibilizar y explotar información con escalabilidad y confiabilidad.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 border-t border-gray-800">
    <div class="max-w-5xl mx-auto text-center px-6">
        <p class="mb-4 inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-1.5 text-xs uppercase tracking-[0.2em] text-gray-300">
            <span class="h-2 w-2 rounded-full bg-blue-400"></span>
            Plataformas de datos
        </p>

        <h2 class="text-3xl font-semibold md:text-5xl tracking-tight mb-6">
            Si tu operación depende de datos, necesitás una plataforma pensada para sostenerlos
        </h2>

        <p class="text-gray-400 text-lg mb-10 max-w-2xl mx-auto leading-relaxed">
            Diseñemos una base preparada para organizar, disponibilizar y explotar información con criterio técnico real.
        </p>

        <div class="flex flex-wrap items-center justify-center gap-4">
            <a
                href="<?= e(whatsapp_url('Hola SynFive, quiero consultar sobre plataformas de datos.')) ?>"
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