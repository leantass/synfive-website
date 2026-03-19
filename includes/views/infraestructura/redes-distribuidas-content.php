<section class="min-h-screen flex items-center pt-24 relative overflow-hidden">
    <div class="network-bg"></div>
    <canvas id="networkCanvas" class="absolute inset-0 opacity-60 pointer-events-none" aria-hidden="true"></canvas>

    <div class="relative z-10 max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <p class="text-sm uppercase tracking-[0.2em] text-gray-500 mb-4">
                Infraestructura
            </p>

            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                Infraestructura para redes distribuidas y nodos conectados
            </h1>

            <p class="text-gray-400 text-lg mb-8 leading-relaxed">
                Diseñamos arquitecturas distribuidas preparadas para coordinar múltiples servicios, nodos o puntos de operación, con foco en escalabilidad, resiliencia y consistencia del sistema.
            </p>

            <div class="flex flex-wrap gap-4">
                <a
                    href="<?= e(whatsapp_url('Hola SynFive, quiero consultar sobre redes distribuidas.')) ?>"
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
            <div class="w-full h-80 bg-gradient-to-br from-indigo-500/20 to-cyan-500/20 rounded-xl blur-2xl absolute"></div>

            <div class="relative border border-white/10 rounded-2xl p-8 bg-gray-900/60 backdrop-blur-sm shadow-2xl">
                <p class="text-sm text-gray-400 mb-2">Topología</p>
                <p class="text-lg font-semibold">Nodos distribuidos</p>

                <p class="text-sm text-gray-400 mt-4 mb-2">Objetivo</p>
                <p class="text-lg font-semibold">Resiliencia y coordinación</p>

                <p class="text-sm text-gray-400 mt-4 mb-2">Escalabilidad</p>
                <p class="text-lg font-semibold">Crecimiento horizontal</p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-6">
            Cuando una operación depende de múltiples puntos, la arquitectura deja de ser simple
        </h2>

        <p class="text-gray-400 max-w-3xl text-lg leading-relaxed">
            Las redes distribuidas permiten que distintos nodos, servicios o componentes trabajen de forma coordinada. Este tipo de arquitectura es clave en plataformas de alta escala, infraestructuras híbridas, sistemas con múltiples ubicaciones y modelos que no pueden depender de un único punto central.
        </p>
    </div>
</section>

<section class="py-24 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-12">
            Ventajas de una arquitectura distribuida bien diseñada
        </h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-indigo-400 transition">
                <h3 class="font-semibold mb-3">Mayor resiliencia</h3>
                <p class="text-gray-400 text-sm">
                    La caída de un nodo no implica necesariamente la interrupción total del sistema.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-cyan-400 transition">
                <h3 class="font-semibold mb-3">Escalado horizontal</h3>
                <p class="text-gray-400 text-sm">
                    Permite sumar nodos o servicios según la demanda sin rediseñar toda la infraestructura.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-violet-400 transition">
                <h3 class="font-semibold mb-3">Distribución geográfica</h3>
                <p class="text-gray-400 text-sm">
                    Facilita operar sobre distintas ubicaciones o entornos con mayor flexibilidad.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-sky-400 transition">
                <h3 class="font-semibold mb-3">Mejor tolerancia a fallos</h3>
                <p class="text-gray-400 text-sm">
                    Los sistemas distribuidos pueden diseñarse para absorber interrupciones parciales sin colapsar.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-teal-400 transition">
                <h3 class="font-semibold mb-3">Capacidad de expansión</h3>
                <p class="text-gray-400 text-sm">
                    Acompañan mejor el crecimiento de plataformas con múltiples componentes interdependientes.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-emerald-400 transition">
                <h3 class="font-semibold mb-3">Flexibilidad operativa</h3>
                <p class="text-gray-400 text-sm">
                    Se adaptan mejor a modelos híbridos, edge, nodos específicos o despliegues especiales.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="arquitectura" class="py-24 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-12">
            Cómo se estructura una red distribuida
        </h2>

        <div class="grid md:grid-cols-2 gap-10">
            <div class="border border-white/10 rounded-xl p-6">
                <h3 class="font-semibold mb-3">Nodos</h3>
                <p class="text-gray-400 text-sm">
                    Puntos de ejecución, almacenamiento o procesamiento distribuidos dentro del entorno.
                </p>
            </div>

            <div class="border border-white/10 rounded-xl p-6">
                <h3 class="font-semibold mb-3">Comunicación</h3>
                <p class="text-gray-400 text-sm">
                    Canales y protocolos que permiten coordinación entre servicios o nodos.
                </p>
            </div>

            <div class="border border-white/10 rounded-xl p-6">
                <h3 class="font-semibold mb-3">Sincronización</h3>
                <p class="text-gray-400 text-sm">
                    Mecanismos de consistencia, replicación o distribución de carga según el modelo del sistema.
                </p>
            </div>

            <div class="border border-white/10 rounded-xl p-6">
                <h3 class="font-semibold mb-3">Observabilidad</h3>
                <p class="text-gray-400 text-sm">
                    Monitoreo, trazabilidad y métricas para entender el comportamiento de toda la red.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-12">
            Escenarios donde una red distribuida cobra sentido
        </h2>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-indigo-400 transition">
                <h3 class="font-semibold mb-3">Plataformas con múltiples nodos</h3>
                <p class="text-gray-400 text-sm">
                    Aplicaciones o servicios que dependen de más de un punto operativo para sostener su funcionamiento.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-cyan-400 transition">
                <h3 class="font-semibold mb-3">Entornos híbridos</h3>
                <p class="text-gray-400 text-sm">
                    Infraestructuras que combinan componentes locales, privados y externos.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-violet-400 transition">
                <h3 class="font-semibold mb-3">Modelos con edge o cercanía operativa</h3>
                <p class="text-gray-400 text-sm">
                    Escenarios donde acercar el procesamiento a distintos puntos mejora tiempos o disponibilidad.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-sky-400 transition">
                <h3 class="font-semibold mb-3">Sistemas con alta necesidad de continuidad</h3>
                <p class="text-gray-400 text-sm">
                    Cuando depender de un único punto central representa demasiado riesgo.
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
                almacenamiento masivo, microservicios y plataformas de datos.
            </p>
        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
            <a href="<?= e(absolute_url('infraestructura/nube-privada')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Nube privada</h3>
                <p class="text-sm text-gray-400">Infraestructura dedicada e híbrida para operaciones con mayor control técnico.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/backend-saas')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Backend SaaS</h3>
                <p class="text-sm text-gray-400">Arquitecturas backend para productos SaaS con APIs, usuarios e integraciones.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/almacenamiento-masivo')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Almacenamiento masivo</h3>
                <p class="text-sm text-gray-400">Entornos robustos para grandes volúmenes de información con redundancia y disponibilidad.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/microservicios')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Microservicios</h3>
                <p class="text-sm text-gray-400">Servicios desacoplados para plataformas con mayor flexibilidad y resiliencia.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/plataformas-de-datos')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Plataformas de datos</h3>
                <p class="text-sm text-gray-400">Infraestructura orientada a capturar, organizar y explotar información crítica.</p>
            </a>
        </div>
    </div>
</section>

<section class="py-20 border-t border-gray-800">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-10">
            Preguntas frecuentes sobre redes distribuidas
        </h2>

        <div class="space-y-8 text-gray-400">
            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿Qué es una red distribuida?
                </h3>
                <p>
                    Es una arquitectura en la que múltiples nodos, servicios o componentes trabajan coordinadamente para sostener una operación sin depender de un único punto central.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿Cuándo conviene diseñar una red distribuida?
                </h3>
                <p>
                    Conviene cuando una operación necesita resiliencia, tolerancia a fallos, escalado horizontal, distribución geográfica o coordinación entre múltiples componentes.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿Qué ventajas tiene una arquitectura distribuida frente a una centralizada?
                </h3>
                <p>
                    Permite reducir riesgos de caída total, facilitar crecimiento horizontal, mejorar tolerancia a fallos y adaptarse mejor a operaciones complejas o híbridas.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿SynFive diseña infraestructuras distribuidas completas?
                </h3>
                <p>
                    Sí. SynFive diseña arquitecturas distribuidas orientadas a resiliencia, escalabilidad, observabilidad y coordinación consistente entre nodos y servicios.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 border-t border-gray-800">
    <div class="max-w-5xl mx-auto text-center px-6">
        <p class="mb-4 inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-1.5 text-xs uppercase tracking-[0.2em] text-gray-300">
            <span class="h-2 w-2 rounded-full bg-blue-400"></span>
            Redes distribuidas
        </p>

        <h2 class="text-3xl font-semibold md:text-5xl tracking-tight mb-6">
            Si tu operación depende de varios componentes, necesitás una red que los coordine con criterio
        </h2>

        <p class="text-gray-400 text-lg mb-10 max-w-2xl mx-auto leading-relaxed">
            Diseñemos una arquitectura distribuida preparada para crecer, tolerar fallos y sostener operaciones complejas.
        </p>

        <div class="flex flex-wrap items-center justify-center gap-4">
            <a
                href="<?= e(whatsapp_url('Hola SynFive, quiero consultar sobre redes distribuidas.')) ?>"
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