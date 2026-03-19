<section class="min-h-screen flex items-center pt-24 relative overflow-hidden">
    <div class="network-bg"></div>
    <canvas id="networkCanvas" class="absolute inset-0 opacity-60 pointer-events-none" aria-hidden="true"></canvas>

    <div class="relative z-10 max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <p class="text-sm uppercase tracking-[0.2em] text-gray-500 mb-4">
                Capacidades
            </p>

            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                Ciberseguridad para infraestructuras digitales críticas
            </h1>

            <p class="text-gray-400 text-lg mb-8 leading-relaxed">
                La seguridad no es un módulo adicional. Forma parte de la arquitectura. Diseñamos entornos protegidos, monitoreados y preparados para resistir incidentes de seguridad.
            </p>

            <div class="flex flex-wrap gap-4">
                <a
                    href="<?= e(whatsapp_url('Hola SynFive, quiero consultar sobre ciberseguridad.')) ?>"
                    class="bg-blue-600 px-6 py-3 rounded-lg font-medium text-white hover:bg-blue-500 transition-colors"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Solicitar diagnóstico
                </a>

                <a
                    href="#servicios"
                    class="border border-gray-700 px-6 py-3 rounded-lg text-white hover:bg-gray-900 transition-colors"
                >
                    Ver servicios
                </a>
            </div>
        </div>

        <div class="relative">
            <div class="w-full h-80 bg-gradient-to-br from-red-500/20 to-indigo-500/20 rounded-xl blur-2xl absolute"></div>

            <div class="relative border border-white/10 rounded-2xl p-8 bg-gray-900/60 backdrop-blur-sm shadow-2xl">
                <p class="text-sm text-gray-400 mb-2">Objetivo</p>
                <p class="text-lg font-semibold">Protección operativa</p>

                <p class="text-sm text-gray-400 mt-4 mb-2">Estrategia</p>
                <p class="text-lg font-semibold">Defensa en profundidad</p>

                <p class="text-sm text-gray-400 mt-4 mb-2">Resultado</p>
                <p class="text-lg font-semibold">Continuidad del servicio</p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-6">
            La seguridad es parte del diseño de la infraestructura
        </h2>

        <p class="text-gray-400 max-w-3xl text-lg leading-relaxed">
            Las plataformas digitales modernas requieren un enfoque de seguridad integrado. Desde redes y servidores hasta aplicaciones y datos, cada capa del sistema debe estar protegida.
        </p>
    </div>
</section>

<section id="servicios" class="py-24 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-12">
            Servicios de ciberseguridad
        </h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-red-400 transition">
                <h3 class="font-semibold mb-3">Hardening de infraestructura</h3>
                <p class="text-gray-400 text-sm">
                    Refuerzo de servidores, redes y sistemas para reducir superficies de ataque.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-orange-400 transition">
                <h3 class="font-semibold mb-3">Monitoreo de seguridad</h3>
                <p class="text-gray-400 text-sm">
                    Supervisión continua de eventos, accesos y actividad anómala en sistemas.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-yellow-400 transition">
                <h3 class="font-semibold mb-3">Gestión de accesos</h3>
                <p class="text-gray-400 text-sm">
                    Control de identidades, permisos y autenticación en plataformas críticas.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-purple-400 transition">
                <h3 class="font-semibold mb-3">Protección de datos</h3>
                <p class="text-gray-400 text-sm">
                    Estrategias de cifrado, backup y resguardo de información sensible.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-blue-400 transition">
                <h3 class="font-semibold mb-3">Análisis de vulnerabilidades</h3>
                <p class="text-gray-400 text-sm">
                    Identificación de puntos débiles en infraestructura o aplicaciones.
                </p>
            </div>

            <div class="card-hover border border-gray-800 p-6 rounded-lg hover:border-cyan-400 transition">
                <h3 class="font-semibold mb-3">Arquitectura segura</h3>
                <p class="text-gray-400 text-sm">
                    Diseño de sistemas preparados para operar bajo principios de seguridad.
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
                La ciberseguridad se potencia cuando trabaja junto con infraestructura,
                automatización y desarrollo orientado a operación real.
            </p>
        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
            <a href="<?= e(absolute_url('infraestructura/nube-privada')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Nube privada</h3>
                <p class="text-sm text-gray-400">Infraestructura dedicada para operaciones que requieren mayor control y resguardo.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/backend-saas')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Backend SaaS</h3>
                <p class="text-sm text-gray-400">Arquitecturas backend con autenticación, permisos e integraciones para productos digitales.</p>
            </a>

            <a href="<?= e(absolute_url('capacidades/ia')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">IA y automatización</h3>
                <p class="text-sm text-gray-400">Procesos inteligentes que mejoran capacidad de respuesta y operación técnica.</p>
            </a>

            <a href="<?= e(absolute_url('capacidades/desarrollo')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Desarrollo</h3>
                <p class="text-sm text-gray-400">Soporte técnico para plataformas, integraciones y soluciones orientadas a negocio.</p>
            </a>

            <a href="<?= e(absolute_url('infraestructura/redes-distribuidas')) ?>" class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:bg-white/[0.05] transition">
                <h3 class="text-lg font-semibold text-white mb-2">Redes distribuidas</h3>
                <p class="text-sm text-gray-400">Entornos resilientes preparados para coordinación entre nodos y continuidad operativa.</p>
            </a>
        </div>
    </div>
</section>

<section class="py-20 border-t border-gray-800">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-3xl font-semibold mb-10">
            Preguntas frecuentes sobre ciberseguridad
        </h2>

        <div class="space-y-8 text-gray-400">
            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿Qué incluye un servicio de ciberseguridad para infraestructura?
                </h3>
                <p>
                    Puede incluir hardening, monitoreo, gestión de accesos, protección de datos, análisis de vulnerabilidades y diseño de arquitectura segura.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿Cuándo conviene reforzar la ciberseguridad de una infraestructura?
                </h3>
                <p>
                    Conviene cuando una operación depende de disponibilidad continua, maneja información sensible o necesita reducir superficie de riesgo en servidores, redes, aplicaciones y accesos.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿La seguridad debe pensarse al final del proyecto?
                </h3>
                <p>
                    No. La seguridad debe formar parte del diseño de la arquitectura desde el inicio para evitar debilidades estructurales y problemas operativos futuros.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-2">
                    ¿SynFive diseña entornos con enfoque de seguridad integrado?
                </h3>
                <p>
                    Sí. SynFive trabaja la seguridad como parte de la infraestructura, integrando protección, monitoreo, control de acceso y criterios de continuidad operativa.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 border-t border-gray-800">
    <div class="max-w-5xl mx-auto text-center px-6">
        <p class="mb-4 inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-1.5 text-xs uppercase tracking-[0.2em] text-gray-300">
            <span class="h-2 w-2 rounded-full bg-blue-400"></span>
            Ciberseguridad
        </p>

        <h2 class="text-3xl font-semibold md:text-5xl tracking-tight mb-6">
            La seguridad es lo que mantiene viva una plataforma cuando algo falla
        </h2>

        <p class="text-gray-400 text-lg mb-10 max-w-2xl mx-auto leading-relaxed">
            Diseñemos una infraestructura preparada para resistir incidentes y proteger lo que realmente importa.
        </p>

        <div class="flex flex-wrap items-center justify-center gap-4">
            <a
                href="<?= e(whatsapp_url('Hola SynFive, quiero consultar sobre ciberseguridad.')) ?>"
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