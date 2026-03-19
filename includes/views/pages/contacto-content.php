<section class="py-24">
    <div class="max-w-6xl mx-auto px-6">
        <p class="text-sm uppercase tracking-[0.2em] text-gray-500 mb-4">
            Contacto
        </p>

        <h1 class="text-4xl md:text-5xl font-bold mb-6">
            Hablemos de tu infraestructura o tu producto
        </h1>

        <p class="text-xl text-gray-400 max-w-3xl leading-relaxed">
            Si querés consultar sobre infraestructura, automatización, inteligencia artificial o productos propios, podés escribirnos directamente.
        </p>
    </div>
</section>

<section class="border-t border-gray-800 py-20">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-14">
        <div>
            <h2 class="text-3xl font-semibold mb-6">
                Canales de contacto
            </h2>

            <p class="text-gray-400 leading-relaxed mb-8">
                Trabajamos sobre proyectos de infraestructura, automatización, IA y productos propios. Si querés conversar una idea, un proyecto o una posible integración, escribinos.
            </p>

            <div class="grid gap-6">
                <div class="border border-gray-800 rounded-xl p-6">
                    <h3 class="font-semibold mb-2">WhatsApp</h3>
                    <p class="text-gray-400 text-sm mb-4">
                        Canal directo para consultas comerciales o técnicas.
                    </p>
                    <a
                        href="<?= e(whatsapp_url('Hola SynFive, quiero hacer una consulta.')) ?>"
                        class="text-blue-400 hover:text-blue-300 transition-colors"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        +54 9 11 6277 2377
                    </a>
                </div>

                <div class="border border-gray-800 rounded-xl p-6">
                    <h3 class="font-semibold mb-2">Email</h3>
                    <p class="text-gray-400 text-sm mb-4">
                        Para consultas comerciales o propuestas de trabajo.
                    </p>
                    <a href="<?= e(CONTACT_EMAIL_LINK) ?>" class="text-blue-400 hover:text-blue-300 transition-colors">
                        <?= e(SITE_EMAIL) ?>
                    </a>
                </div>

                <div class="border border-gray-800 rounded-xl p-6">
                    <h3 class="font-semibold mb-2">Ubicación operativa</h3>
                    <p class="text-gray-400 text-sm">
                        Buenos Aires, Argentina
                    </p>
                </div>
            </div>
        </div>

        <div>
            <h2 class="text-3xl font-semibold mb-6">
                Qué podemos conversar
            </h2>

            <div class="grid gap-6">
                <div class="border border-gray-800 rounded-xl p-6">
                    <h3 class="font-semibold mb-2">Infraestructura</h3>
                    <p class="text-gray-400 text-sm">
                        Nube privada, backend SaaS, microservicios, almacenamiento, redes distribuidas y plataformas de datos.
                    </p>
                </div>

                <div class="border border-gray-800 rounded-xl p-6">
                    <h3 class="font-semibold mb-2">Capacidades</h3>
                    <p class="text-gray-400 text-sm">
                        IA, automatización, ciberseguridad y desarrollo de plataformas.
                    </p>
                </div>

                <div class="border border-gray-800 rounded-xl p-6">
                    <h3 class="font-semibold mb-2">Productos</h3>
                    <p class="text-gray-400 text-sm">
                        FLOE, Scarlett y Stockia, tanto para implementación directa como para partners.
                    </p>
                </div>

                <div class="border border-gray-800 rounded-xl p-6">
                    <h3 class="font-semibold mb-2">Partners y mayoristas</h3>
                    <p class="text-gray-400 text-sm">
                        Modelos de colaboración para empresas que quieran sumar nuestras soluciones a su portfolio.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="border-t border-gray-800 py-20">
    <div class="max-w-4xl mx-auto text-center px-6">
        <h2 class="text-3xl font-semibold mb-6">
            Si hay una idea seria, vale la pena hablarla bien
        </h2>

        <p class="text-gray-400 mb-10 leading-relaxed">
            Podemos ayudarte a diseñar infraestructura, automatizar procesos o implementar productos propios de SynFive.
        </p>

        <a
            href="<?= e(whatsapp_url('Hola SynFive, quiero hacer una consulta.')) ?>"
            class="bg-blue-600 px-8 py-4 rounded-lg text-white hover:bg-blue-500 transition-colors inline-block"
            target="_blank"
            rel="noopener noreferrer"
        >
            Hablar con SynFive
        </a>
    </div>
</section>