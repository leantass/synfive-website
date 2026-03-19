<section id="inicio" class="relative min-h-screen overflow-hidden pt-24 flex items-center">
    <div class="network-bg"></div>
    <canvas id="networkCanvas" class="absolute inset-0 opacity-60 pointer-events-none" aria-hidden="true"></canvas>

    <div class="relative z-10 max-w-7xl mx-auto w-full px-6 grid md:grid-cols-2 gap-14 items-center">
        <div>
            <p class="mb-4 inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-1.5 text-xs uppercase tracking-[0.2em] text-gray-300">
                <span class="h-2 w-2 rounded-full bg-blue-400"></span>
                Infraestructura técnica premium
            </p>

            <h1 class="text-4xl md:text-6xl font-bold tracking-tight leading-tight mb-6 max-w-3xl">
                Nube privada, backend y arquitectura para operaciones críticas
            </h1>

            <p class="max-w-2xl text-lg md:text-xl leading-relaxed text-gray-400 mb-8">
                Diseñamos y operamos infraestructura para plataformas digitales, microservicios,
                entornos distribuidos, almacenamiento masivo y automatización técnica de alto nivel.
            </p>

            <div class="flex flex-wrap gap-4">
                <a
                    href="<?= e(whatsapp_url('Hola SynFive, quiero hacer una consulta sobre infraestructura.')) ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="rounded-lg bg-blue-600 px-6 py-3 font-medium text-white transition hover:bg-blue-500 shadow-lg shadow-blue-600/20"
                >
                    Solicitar diagnóstico
                </a>

                <a
                    href="#capacidades"
                    class="rounded-lg border border-white/10 px-6 py-3 text-white transition hover:bg-white/5"
                >
                    Explorar capacidades
                </a>
            </div>

            <div class="mt-8 flex flex-wrap gap-3 text-sm text-gray-400">
                <a href="<?= e(absolute_url('infraestructura/nube-privada')) ?>" class="rounded-full border border-white/10 px-3 py-1 transition hover:bg-white/5 hover:text-white">Nube privada</a>
                <a href="<?= e(absolute_url('infraestructura/microservicios')) ?>" class="rounded-full border border-white/10 px-3 py-1 transition hover:bg-white/5 hover:text-white">Microservicios</a>
                <a href="<?= e(absolute_url('capacidades/ia')) ?>" class="rounded-full border border-white/10 px-3 py-1 transition hover:bg-white/5 hover:text-white">Automatización técnica</a>
            </div>
        </div>

        <div class="relative">
            <div class="absolute inset-0 rounded-3xl bg-gradient-to-br from-blue-500/20 via-violet-500/10 to-cyan-400/20 blur-3xl"></div>

            <div class="relative overflow-hidden rounded-2xl border border-white/10 bg-slate-900/70 p-8 shadow-2xl backdrop-blur-md">
                <div class="flex items-center gap-2 mb-6" aria-hidden="true">
                    <span class="h-2.5 w-2.5 rounded-full bg-blue-400"></span>
                    <span class="h-2.5 w-2.5 rounded-full bg-violet-400"></span>
                    <span class="h-2.5 w-2.5 rounded-full bg-cyan-400"></span>
                </div>

                <div class="space-y-6">
                    <a href="<?= e(absolute_url('infraestructura/nube-privada')) ?>" class="block rounded-xl border border-white/10 bg-white/[0.03] p-4 transition hover:bg-white/[0.06]">
                        <p class="mb-2 text-xs uppercase tracking-[0.2em] text-gray-500">Infraestructura</p>
                        <p class="text-lg font-semibold">Nube privada</p>
                    </a>

                    <a href="<?= e(absolute_url('infraestructura/microservicios')) ?>" class="block rounded-xl border border-white/10 bg-white/[0.03] p-4 transition hover:bg-white/[0.06]">
                        <p class="mb-2 text-xs uppercase tracking-[0.2em] text-gray-500">Arquitectura</p>
                        <p class="text-lg font-semibold">Microservicios</p>
                    </a>

                    <a href="<?= e(absolute_url('infraestructura/backend-saas')) ?>" class="block rounded-xl border border-white/10 bg-white/[0.03] p-4 transition hover:bg-white/[0.06]">
                        <p class="mb-2 text-xs uppercase tracking-[0.2em] text-gray-500">Operación</p>
                        <p class="text-lg font-semibold">Backend SaaS</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="border-t border-gray-800 py-24">
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-[1.2fr_.8fr] gap-12 items-center">
        <div>
            <h2 class="text-3xl md:text-4xl font-semibold tracking-tight mb-6 max-w-3xl">
                La base técnica detrás de plataformas que necesitan crecer sin perder control
            </h2>

            <p class="max-w-3xl text-gray-400 text-lg leading-relaxed">
                SynFive desarrolla infraestructura pensada para productos, servicios y operaciones digitales
                que requieren estabilidad, performance y evolución sostenida. Combinamos arquitectura,
                operación técnica y criterio de implementación para construir entornos sólidos, ágiles
                y preparados para escalar.
            </p>
        </div>

        <div class="relative">
            <div class="absolute inset-0 rounded-3xl bg-gradient-to-br from-blue-500/10 to-cyan-400/10 blur-3xl"></div>
            <div class="relative grid grid-cols-2 gap-4">
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                    <p class="text-sm text-gray-500 mb-2">Entornos</p>
                    <p class="font-semibold">Privados e híbridos</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                    <p class="text-sm text-gray-500 mb-2">Escalabilidad</p>
                    <p class="font-semibold">Operación sostenida</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                    <p class="text-sm text-gray-500 mb-2">Datos</p>
                    <p class="font-semibold">Volumen y disponibilidad</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                    <p class="text-sm text-gray-500 mb-2">Arquitectura</p>
                    <p class="font-semibold">Criterio técnico real</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="infraestructura" class="border-t border-gray-800 py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-16">
            <h2 class="text-3xl md:text-4xl font-semibold tracking-tight mb-4">
                Infraestructura diseñada para escalar con criterio
            </h2>

            <p class="max-w-2xl text-gray-400 text-lg">
                Nuestro foco principal está en la construcción y operación de entornos técnicos preparados
                para cargas exigentes, evolución continua y control operativo real.
            </p>
        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
            <a href="<?= e(absolute_url('infraestructura/nube-privada')) ?>" class="block">
                <div class="card-hover rounded-2xl border border-gray-800 p-6 transition hover:border-blue-500 bg-white/[0.02]">
                    <div class="mb-4 h-1.5 w-14 rounded-full bg-blue-500/80"></div>
                    <h3 class="mb-3 text-xl font-semibold">Nube privada</h3>
                    <p class="text-sm leading-relaxed text-gray-400">
                        Entornos propios con mayor control operativo, flexibilidad y una base más sólida para plataformas críticas.
                    </p>
                </div>
            </a>

            <a href="<?= e(absolute_url('infraestructura/microservicios')) ?>" class="block">
                <div class="card-hover rounded-2xl border border-gray-800 p-6 transition hover:border-violet-500 bg-white/[0.02]">
                    <div class="mb-4 h-1.5 w-14 rounded-full bg-violet-500/80"></div>
                    <h3 class="mb-3 text-xl font-semibold">Microservicios</h3>
                    <p class="text-sm leading-relaxed text-gray-400">
                        Arquitecturas desacopladas que permiten crecer con resiliencia, modularidad y mejor capacidad de evolución.
                    </p>
                </div>
            </a>

            <a href="<?= e(absolute_url('infraestructura/backend-saas')) ?>" class="block">
                <div class="card-hover rounded-2xl border border-gray-800 p-6 transition hover:border-cyan-400 bg-white/[0.02]">
                    <div class="mb-4 h-1.5 w-14 rounded-full bg-cyan-400/80"></div>
                    <h3 class="mb-3 text-xl font-semibold">Backend SaaS</h3>
                    <p class="text-sm leading-relaxed text-gray-400">
                        Estructuras backend preparadas para productos digitales con integraciones, lógica de negocio y evolución continua.
                    </p>
                </div>
            </a>

            <a href="<?= e(absolute_url('infraestructura/almacenamiento-masivo')) ?>" class="block">
                <div class="card-hover rounded-2xl border border-gray-800 p-6 transition hover:border-teal-400 bg-white/[0.02]">
                    <div class="mb-4 h-1.5 w-14 rounded-full bg-teal-400/80"></div>
                    <h3 class="mb-3 text-xl font-semibold">Almacenamiento masivo</h3>
                    <p class="text-sm leading-relaxed text-gray-400">
                        Infraestructura preparada para grandes volúmenes de información, acceso eficiente y continuidad operativa.
                    </p>
                </div>
            </a>

            <a href="<?= e(absolute_url('infraestructura/redes-distribuidas')) ?>" class="block">
                <div class="card-hover rounded-2xl border border-gray-800 p-6 transition hover:border-indigo-400 bg-white/[0.02]">
                    <div class="mb-4 h-1.5 w-14 rounded-full bg-indigo-400/80"></div>
                    <h3 class="mb-3 text-xl font-semibold">Redes distribuidas</h3>
                    <p class="text-sm leading-relaxed text-gray-400">
                        Diseño e implementación de entornos distribuidos y nodos conectados para operaciones complejas.
                    </p>
                </div>
            </a>

            <a href="<?= e(absolute_url('infraestructura/plataformas-de-datos')) ?>" class="block">
                <div class="card-hover rounded-2xl border border-gray-800 p-6 transition hover:border-sky-400 bg-white/[0.02]">
                    <div class="mb-4 h-1.5 w-14 rounded-full bg-sky-400/80"></div>
                    <h3 class="mb-3 text-xl font-semibold">Plataformas de datos</h3>
                    <p class="text-sm leading-relaxed text-gray-400">
                        Infraestructura orientada al manejo, organización y disponibilidad de datos para distintos modelos de operación.
                    </p>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="border-t border-gray-800 py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-14 max-w-3xl">
            <h2 class="text-3xl md:text-4xl font-semibold tracking-tight mb-4">
                Una arquitectura no se vende por nombre. Se entiende por cómo resuelve.
            </h2>
            <p class="text-gray-400 text-lg">
                Traducimos infraestructura compleja en capas operativas claras. Desde la base de almacenamiento
                y datos hasta microservicios, backend, automatización y seguridad, cada componente cumple
                una función dentro de un ecosistema técnico coherente.
            </p>
        </div>

        <div class="grid lg:grid-cols-[1.1fr_.9fr] gap-10 items-start">
            <div class="rounded-3xl border border-white/10 bg-white/[0.03] p-6 md:p-8">
                <div class="space-y-4">
                    <div class="card-hover rounded-2xl border border-cyan-400/20 bg-cyan-400/5 p-5">
                        <p class="text-xs uppercase tracking-[0.2em] text-cyan-300 mb-2">Capa 01</p>
                        <h3 class="text-lg font-semibold mb-2">Apps y operación de usuario</h3>
                        <p class="text-sm text-gray-400">Interfaces, puntos de acceso y flujos de interacción que dependen de una base estable.</p>
                    </div>

                    <div class="card-hover rounded-2xl border border-sky-400/20 bg-sky-400/5 p-5 ml-4 md:ml-10">
                        <p class="text-xs uppercase tracking-[0.2em] text-sky-300 mb-2">Capa 02</p>
                        <h3 class="text-lg font-semibold mb-2">Backend y lógica de negocio</h3>
                        <p class="text-sm text-gray-400">APIs, autenticación, integraciones y núcleo operativo de la plataforma.</p>
                    </div>

                    <div class="card-hover rounded-2xl border border-violet-400/20 bg-violet-400/5 p-5 ml-8 md:ml-20">
                        <p class="text-xs uppercase tracking-[0.2em] text-violet-300 mb-2">Capa 03</p>
                        <h3 class="text-lg font-semibold mb-2">Microservicios y desacople</h3>
                        <p class="text-sm text-gray-400">Servicios modulares para escalar con resiliencia, flexibilidad y mejor mantenibilidad.</p>
                    </div>

                    <div class="card-hover rounded-2xl border border-teal-400/20 bg-teal-400/5 p-5 ml-4 md:ml-10">
                        <p class="text-xs uppercase tracking-[0.2em] text-teal-300 mb-2">Capa 04</p>
                        <h3 class="text-lg font-semibold mb-2">Datos y almacenamiento</h3>
                        <p class="text-sm text-gray-400">Persistencia, organización, disponibilidad y volumen como base real de la operación.</p>
                    </div>

                    <div class="card-hover rounded-2xl border border-rose-400/20 bg-rose-400/5 p-5">
                        <p class="text-xs uppercase tracking-[0.2em] text-rose-300 mb-2">Capa 05</p>
                        <h3 class="text-lg font-semibold mb-2">Seguridad y endurecimiento</h3>
                        <p class="text-sm text-gray-400">Control, reducción de superficie de riesgo y estabilidad sobre infraestructura crítica.</p>
                    </div>
                </div>
            </div>

            <div class="space-y-5">
                <a href="<?= e(absolute_url('infraestructura/backend-saas')) ?>" class="block rounded-2xl border border-white/10 bg-white/[0.03] p-6 transition hover:bg-white/[0.06]">
                    <h3 class="text-xl font-semibold mb-3">Backend</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Lógica de negocio, APIs, autenticación, integraciones y operación central de plataformas digitales.
                    </p>
                </a>

                <a href="<?= e(absolute_url('infraestructura/microservicios')) ?>" class="block rounded-2xl border border-white/10 bg-white/[0.03] p-6 transition hover:bg-white/[0.06]">
                    <h3 class="text-xl font-semibold mb-3">Microservicios</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Servicios desacoplados para entornos que requieren modularidad, evolución continua y resiliencia.
                    </p>
                </a>

                <a href="<?= e(absolute_url('infraestructura/plataformas-de-datos')) ?>" class="block rounded-2xl border border-white/10 bg-white/[0.03] p-6 transition hover:bg-white/[0.06]">
                    <h3 class="text-xl font-semibold mb-3">Datos</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Flujos, almacenamiento, procesamiento y disponibilidad de información crítica para la operación.
                    </p>
                </a>

                <a href="<?= e(absolute_url('capacidades/ia')) ?>" class="block rounded-2xl border border-white/10 bg-white/[0.03] p-6 transition hover:bg-white/[0.06]">
                    <h3 class="text-xl font-semibold mb-3">Automatización</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Procesos técnicos que reducen fricción operativa, mejoran tiempos y amplían capacidad de respuesta.
                    </p>
                </a>

                <a href="<?= e(absolute_url('infraestructura/nube-privada')) ?>" class="block rounded-2xl border border-white/10 bg-white/[0.03] p-6 transition hover:bg-white/[0.06]">
                    <h3 class="text-xl font-semibold mb-3">Infraestructura</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        La base que sostiene disponibilidad, rendimiento, seguridad y crecimiento controlado.
                    </p>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="capacidades" class="border-t border-gray-800 py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-16">
            <h2 class="text-3xl md:text-4xl font-semibold tracking-tight mb-4">
                Capacidades que fortalecen la infraestructura
            </h2>
            <p class="max-w-2xl text-gray-400 text-lg">
                Además del núcleo de infraestructura, integramos capas técnicas que amplían, automatizan,
                protegen y hacen evolucionar la operación.
            </p>
        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
            <a href="<?= e(absolute_url('capacidades/ia')) ?>" class="block">
                <div class="card-hover rounded-2xl border border-gray-800 bg-white/[0.02] p-6">
                    <div class="mb-4 h-1.5 w-14 rounded-full bg-slate-300/80"></div>
                    <h3 class="font-semibold text-xl mb-3">IA y automatizaciones</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Automatización técnica e inteligencia operativa para optimizar procesos, integraciones y capacidad de respuesta.
                    </p>
                </div>
            </a>

            <a href="<?= e(absolute_url('infraestructura/plataformas-de-datos')) ?>" class="block">
                <div class="card-hover rounded-2xl border border-gray-800 bg-white/[0.02] p-6">
                    <div class="mb-4 h-1.5 w-14 rounded-full bg-cyan-400/80"></div>
                    <h3 class="font-semibold text-xl mb-3">Plataformas de datos</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Diseño de entornos orientados al manejo, organización y disponibilidad de datos para distintos modelos de operación.
                    </p>
                </div>
            </a>

            <a href="<?= e(absolute_url('capacidades/ciberseguridad')) ?>" class="block">
                <div class="card-hover rounded-2xl border border-gray-800 bg-white/[0.02] p-6">
                    <div class="mb-4 h-1.5 w-14 rounded-full bg-red-500/80"></div>
                    <h3 class="font-semibold text-xl mb-3">Ciberseguridad</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Capas de protección, revisión y endurecimiento sobre infraestructuras y entornos críticos.
                    </p>
                </div>
            </a>

            <a href="<?= e(absolute_url('capacidades/desarrollo')) ?>" class="block">
                <div class="card-hover rounded-2xl border border-gray-800 bg-white/[0.02] p-6">
                    <div class="mb-4 h-1.5 w-14 rounded-full bg-violet-500/80"></div>
                    <h3 class="font-semibold text-xl mb-3">Desarrollo</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Soporte de desarrollo orientado a plataformas, integraciones y necesidades técnicas específicas.
                    </p>
                </div>
            </a>

            <a href="<?= e(absolute_url('contacto')) ?>" class="block">
                <div class="card-hover rounded-2xl border border-gray-800 bg-white/[0.02] p-6">
                    <div class="mb-4 h-1.5 w-14 rounded-full bg-amber-400/80"></div>
                    <h3 class="font-semibold text-xl mb-3">Operaciones especiales</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Acompañamiento técnico para escenarios no estándar, integraciones complejas y despliegues con necesidades específicas.
                    </p>
                </div>
            </a>
        </div>
    </div>
</section>

<section id="productos" class="py-24 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-6">
            Productos desarrollados por SynFive
        </h2>

        <p class="text-gray-400 max-w-2xl mb-16">
            Además de implementar soluciones técnicas, desarrollamos plataformas propias basadas en inteligencia artificial e infraestructura avanzada.
        </p>

        <div class="grid md:grid-cols-3 gap-8">
            <a href="<?= e(absolute_url('productos/floe')) ?>" class="card-hover border border-gray-800 p-6 rounded-lg hover:border-blue-500 transition">
                <h3 class="font-semibold mb-3">FLOE</h3>
                <p class="text-gray-400 text-sm">
                    Plataforma de análisis técnico orientada a optimizar la visibilidad de sitios web frente a motores de búsqueda e inteligencias artificiales.
                </p>
            </a>

            <a href="<?= e(absolute_url('productos/scarlett')) ?>" class="card-hover border border-gray-800 p-6 rounded-lg hover:border-purple-500 transition">
                <h3 class="font-semibold mb-3">Scarlett</h3>
                <p class="text-gray-400 text-sm">
                    Asistente inteligente multicanal capaz de integrarse con plataformas digitales, canales de atención y procesos automatizados.
                </p>
            </a>

            <a href="<?= e(absolute_url('productos/stockia')) ?>" class="card-hover border border-gray-800 p-6 rounded-lg hover:border-cyan-400 transition">
                <h3 class="font-semibold mb-3">Stockia</h3>
                <p class="text-gray-400 text-sm">
                    Sistema orientado a la gestión inteligente de inventario y operaciones basadas en información estructurada.
                </p>
            </a>
        </div>
    </div>
</section>

<section class="border-t border-gray-800 py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-16">
            <h2 class="text-3xl md:text-4xl font-semibold tracking-tight mb-4">
                Pensado para operaciones concretas
            </h2>
            <p class="max-w-2xl text-gray-400 text-lg">
                La infraestructura importa de verdad cuando el negocio deja de poder improvisar.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-8">
            <a href="<?= e(absolute_url('infraestructura/backend-saas')) ?>" class="block">
                <div class="card-hover rounded-2xl border border-white/10 bg-white/[0.03] p-7">
                    <h3 class="text-xl font-semibold mb-3">Plataformas SaaS en crecimiento</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Cuando el producto crece y la arquitectura empieza a exigir más control, integración y capacidad de escalar sin romperse.
                    </p>
                </div>
            </a>

            <a href="<?= e(absolute_url('infraestructura/plataformas-de-datos')) ?>" class="block">
                <div class="card-hover rounded-2xl border border-white/10 bg-white/[0.03] p-7">
                    <h3 class="text-xl font-semibold mb-3">Operaciones con alto volumen de datos</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Cuando almacenar, consultar y mover información deja de ser un detalle técnico menor.
                    </p>
                </div>
            </a>

            <a href="<?= e(absolute_url('infraestructura/nube-privada')) ?>" class="block">
                <div class="card-hover rounded-2xl border border-white/10 bg-white/[0.03] p-7">
                    <h3 class="text-xl font-semibold mb-3">Entornos privados o híbridos</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Cuando la operación necesita soberanía, personalización o mayor control técnico.
                    </p>
                </div>
            </a>

            <a href="<?= e(absolute_url('infraestructura/redes-distribuidas')) ?>" class="block">
                <div class="card-hover rounded-2xl border border-white/10 bg-white/[0.03] p-7">
                    <h3 class="text-xl font-semibold mb-3">Sistemas distribuidos</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Cuando una solución depende de múltiples nodos, capas o servicios trabajando de forma coordinada.
                    </p>
                </div>
            </a>
        </div>
    </div>
</section>

<section id="metodo" class="border-t border-gray-800 py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-16">
            <h2 class="text-3xl md:text-4xl font-semibold tracking-tight mb-4">
                Cómo trabajamos
            </h2>
            <p class="max-w-2xl text-gray-400 text-lg">
                No vendemos infraestructura como una caja cerrada. Diseñamos soluciones a partir de contexto,
                necesidad operativa y criterio técnico real.
            </p>
        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-5 gap-6 text-sm">
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <p class="mb-3 text-xs uppercase tracking-[0.2em] text-gray-500">01</p>
                <h4 class="mb-2 text-base font-semibold">Diagnóstico técnico</h4>
                <p class="text-gray-400">Analizamos necesidad, contexto, restricciones y objetivo operativo.</p>
            </div>

            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <p class="mb-3 text-xs uppercase tracking-[0.2em] text-gray-500">02</p>
                <h4 class="mb-2 text-base font-semibold">Diseño de arquitectura</h4>
                <p class="text-gray-400">Definimos una estructura técnica coherente para sostener la operación.</p>
            </div>

            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <p class="mb-3 text-xs uppercase tracking-[0.2em] text-gray-500">03</p>
                <h4 class="mb-2 text-base font-semibold">Implementación</h4>
                <p class="text-gray-400">Construimos, configuramos e integramos los componentes necesarios.</p>
            </div>

            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <p class="mb-3 text-xs uppercase tracking-[0.2em] text-gray-500">04</p>
                <h4 class="mb-2 text-base font-semibold">Seguridad y endurecimiento</h4>
                <p class="text-gray-400">Reducimos superficie de riesgo y reforzamos estabilidad operativa.</p>
            </div>

            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <p class="mb-3 text-xs uppercase tracking-[0.2em] text-gray-500">05</p>
                <h4 class="mb-2 text-base font-semibold">Evolución y soporte</h4>
                <p class="text-gray-400">Acompañamos la operación con criterio de mejora continua.</p>
            </div>
        </div>
    </div>
</section>

<section class="border-t border-gray-800 py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-[1fr_.9fr] gap-10 items-start">
            <div>
                <h2 class="text-3xl md:text-4xl font-semibold tracking-tight mb-4">
                    Infraestructura pensada para entornos reales
                </h2>
                <p class="text-gray-400 text-lg max-w-3xl">
                    Trabajamos sobre operaciones que requieren estabilidad, disponibilidad, escalabilidad y criterio de implementación.
                    Nuestro enfoque combina arquitectura técnica, control operativo y capacidad de adaptación a distintos escenarios.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 gap-4">
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                    <h3 class="font-semibold mb-2">Arquitecturas desacopladas</h3>
                    <p class="text-sm text-gray-400">Diseños preparados para crecer sin rigidizar la operación.</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                    <h3 class="font-semibold mb-2">Entornos privados o híbridos</h3>
                    <p class="text-sm text-gray-400">Mayor control técnico según necesidad operativa.</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                    <h3 class="font-semibold mb-2">Integraciones complejas</h3>
                    <p class="text-sm text-gray-400">Capacidad de conectar capas, sistemas y procesos críticos.</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                    <h3 class="font-semibold mb-2">Seguridad y automatización</h3>
                    <p class="text-sm text-gray-400">Operación más robusta, eficiente y sostenible.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contacto" class="border-t border-gray-800 py-24">
    <div class="max-w-5xl mx-auto text-center px-6">
        <p class="mb-4 inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-1.5 text-xs uppercase tracking-[0.2em] text-gray-300">
            <span class="h-2 w-2 rounded-full bg-blue-400"></span>
            Contacto técnico
        </p>

        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight mb-6">
            Cuando la operación crece, la infraestructura deja de ser un detalle
        </h2>

        <p class="text-gray-400 text-lg mb-10 max-w-2xl mx-auto">
            Diseñemos una base técnica preparada para sostener la evolución real de tu plataforma.
        </p>

        <div class="flex flex-wrap items-center justify-center gap-4">
            <a
                href="<?= e(whatsapp_url('Hola SynFive, quiero hacer una consulta sobre infraestructura.')) ?>"
                target="_blank"
                rel="noopener noreferrer"
                class="rounded-lg bg-blue-600 px-8 py-4 font-medium text-white transition hover:bg-blue-500 shadow-lg shadow-blue-600/20"
            >
                Hablar con SynFive
            </a>

            <a
                href="#inicio"
                class="rounded-lg border border-white/10 px-8 py-4 text-white transition hover:bg-white/5"
            >
                Volver arriba
            </a>
        </div>
    </div>
</section>