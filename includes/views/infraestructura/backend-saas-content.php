<section class="min-h-screen flex items-center pt-24 relative overflow-hidden">
    <div class="network-bg"></div>
    <canvas id="networkCanvas" class="absolute inset-0 opacity-60 pointer-events-none" aria-hidden="true"></canvas>

    <div class="relative z-10 max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <p class="text-sm uppercase tracking-[0.2em] text-gray-500 mb-4">
                Infraestructura
            </p>

            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                Backend robusto para plataformas SaaS
            </h1>

            <p class="text-gray-400 text-lg mb-8 leading-relaxed">
                Diseñamos y desarrollamos arquitecturas backend preparadas para productos digitales, con APIs, autenticación, gestión de usuarios, escalabilidad y operación continua.
            </p>

            <div class="flex flex-wrap gap-4">
                <a
                    href="<?= e(whatsapp_url('Hola SynFive, quiero consultar sobre backend SaaS.')) ?>"
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
                <p class="text-sm text-gray-400 mb-2">Arquitectura</p>
                <p class="text-lg font-semibold">APIs escalables</p>

                <p class="text-sm text-gray-400 mt-4 mb-2">Usuarios</p>
                <p class="text-lg font-semibold">Autenticación y roles</p>

                <p class="text-sm text-gray-400 mt-4 mb-2">Modelo SaaS</p>
                <p class="text-lg font-semibold">Multi-tenant</p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-6">
            El backend es el verdadero corazón de una plataforma SaaS
        </h2>

        <p class="text-gray-400 max-w-3xl text-lg leading-relaxed">
            Mientras la interfaz es lo que el usuario ve, el backend es lo que sostiene la lógica de negocio, las integraciones, los usuarios y el flujo de datos. Una arquitectura backend sólida permite que el producto evolucione sin romperse.
        </p>
    </div>
</section>

<section class="py-24 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-12">
            Componentes clave de un backend SaaS
        </h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-blue-500 transition">
                <h3 class="font-semibold mb-3">APIs robustas</h3>
                <p class="text-gray-400 text-sm">
                    Interfaces claras y escalables que permiten conectar aplicaciones, servicios y sistemas externos.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-cyan-400 transition">
                <h3 class="font-semibold mb-3">Gestión de usuarios</h3>
                <p class="text-gray-400 text-sm">
                    Autenticación, permisos, roles y control de acceso para plataformas con múltiples perfiles.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-indigo-400 transition">
                <h3 class="font-semibold mb-3">Modelo multi-tenant</h3>
                <p class="text-gray-400 text-sm">
                    Arquitectura que permite que múltiples clientes utilicen la misma plataforma de forma aislada.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-violet-400 transition">
                <h3 class="font-semibold mb-3">Integraciones</h3>
                <p class="text-gray-400 text-sm">
                    Conexión con APIs externas, sistemas de pago, CRM, ERP y otros servicios.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-teal-400 transition">
                <h3 class="font-semibold mb-3">Gestión de datos</h3>
                <p class="text-gray-400 text-sm">
                    Persistencia, consultas optimizadas y modelos de datos preparados para crecimiento.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-emerald-400 transition">
                <h3 class="font-semibold mb-3">Escalabilidad</h3>
                <p class="text-gray-400 text-sm">
                    Infraestructura y arquitectura capaces de soportar crecimiento sostenido.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="arquitectura" class="py-24 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-12">
            Cómo se estructura un backend SaaS moderno
        </h2>

        <div class="grid md:grid-cols-2 gap-10">
            <div class="border border-white/10 rounded-xl p-6">
                <h3 class="font-semibold mb-3">Capa de API</h3>
                <p class="text-gray-400 text-sm">
                    Capa que expone servicios y lógica de negocio a aplicaciones web, móviles u otros sistemas.
                </p>
            </div>

            <div class="border border-white/10 rounded-xl p-6">
                <h3 class="font-semibold mb-3">Lógica de negocio</h3>
                <p class="text-gray-400 text-sm">
                    Módulos que implementan la lógica específica del producto o servicio SaaS.
                </p>
            </div>

            <div class="border border-white/10 rounded-xl p-6">
                <h3 class="font-semibold mb-3">Capa de datos</h3>
                <p class="text-gray-400 text-sm">
                    Bases de datos y sistemas de almacenamiento diseñados para escalar.
                </p>
            </div>

            <div class="border border-white/10 rounded-xl p-6">
                <h3 class="font-semibold mb-3">Integraciones</h3>
                <p class="text-gray-400 text-sm">
                    Conexión con sistemas externos como pagos, notificaciones o servicios de terceros.
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
                SynFive también diseña arquitecturas orientadas a nube privada, almacenamiento masivo,
                microservicios, redes distribuidas y plataformas de datos.
            </p>
        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
            <a href="<?= e(absolute_url('infraestructura/nube-privada')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Nube privada</h3>
                <p class="text-sm text-gray-400">Infraestructura dedicada e híbrida para operaciones con mayor control técnico.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/almacenamiento-masivo')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Almacenamiento masivo</h3>
                <p class="text-sm text-gray-400">Entornos preparados para grandes volúmenes de datos con redundancia y disponibilidad.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/microservicios')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Microservicios</h3>
                <p class="text-sm text-gray-400">Arquitecturas desacopladas para productos digitales con mayor flexibilidad.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/redes-distribuidas')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Redes distribuidas</h3>
                <p class="text-sm text-gray-400">Diseño de servicios resilientes para operaciones con múltiples nodos y capas.</p>
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
            Preguntas frecuentes sobre backend SaaS
        </h2>

        <div class="space-y-8 text-gray-400">
            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿Qué es un backend SaaS?
                </h3>
                <p>
                    Es la arquitectura que sostiene la lógica de negocio, las APIs, la autenticación, la gestión de usuarios, las integraciones y la operación central de una plataforma SaaS.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿Cuándo conviene diseñar una arquitectura backend SaaS a medida?
                </h3>
                <p>
                    Conviene cuando el producto necesita escalar, integrar múltiples servicios, gestionar usuarios y clientes de forma aislada o sostener una evolución continua sin comprometer estabilidad.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿Qué significa que un backend sea multi-tenant?
                </h3>
                <p>
                    Significa que una misma plataforma puede servir a múltiples clientes o cuentas manteniendo aislamiento lógico, seguridad y control sobre los datos de cada uno.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿SynFive puede diseñar un backend SaaS completo?
                </h3>
                <p>
                    Sí. SynFive diseña arquitecturas backend para productos SaaS con foco en APIs, autenticación, escalabilidad, integraciones, multi-tenant y evolución sostenida.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 border-t border-gray-800">
    <div class="max-w-5xl mx-auto text-center px-6">
        <p class="mb-4 inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-1.5 text-xs uppercase tracking-[0.2em] text-gray-300">
            <span class="h-2 w-2 rounded-full bg-blue-400"></span>
            Backend SaaS
        </p>

        <h2 class="text-3xl md:text-5xl font-semibold tracking-tight mb-6">
            Si tu producto es SaaS, el backend define hasta dónde puede crecer
        </h2>

        <p class="text-gray-400 text-lg mb-10 max-w-2xl mx-auto leading-relaxed">
            Diseñemos una arquitectura backend que permita que tu plataforma escale sin perder estabilidad.
        </p>

        <div class="flex flex-wrap items-center justify-center gap-4">
            <a
                href="<?= e(whatsapp_url('Hola SynFive, quiero consultar sobre backend SaaS.')) ?>"
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