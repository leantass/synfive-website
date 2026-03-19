<section class="min-h-[60vh] flex items-center justify-center px-6">
    <div class="text-center max-w-xl">
        <img
            src="<?= e(SITE_LOGO) ?>"
            alt="Logo de <?= e(SITE_NAME) ?>"
            class="h-14 w-auto mx-auto mb-8"
            loading="eager"
            fetchpriority="high"
            decoding="async"
        >

        <h1 class="text-5xl font-bold mb-4">404</h1>

        <p class="text-xl text-gray-400 mb-10">
            La página que buscás no está disponible o cambió de ubicación.
        </p>

        <div class="flex flex-wrap justify-center gap-4">
            <a
                href="<?= e(absolute_url()) ?>"
                class="bg-blue-600 px-6 py-3 rounded-lg text-white hover:bg-blue-500 transition"
            >
                Volver al inicio
            </a>

            <a
                href="<?= e(absolute_url('infraestructura/')) ?>"
                class="border border-gray-700 px-6 py-3 rounded-lg text-white hover:bg-gray-900 transition"
            >
                Infraestructura
            </a>

            <a
                href="<?= e(absolute_url('contacto')) ?>"
                class="border border-gray-700 px-6 py-3 rounded-lg text-white hover:bg-gray-900 transition"
            >
                Contacto
            </a>

            <a
                href="<?= e(whatsapp_url('Hola SynFive, llegué a un 404 y necesito ayuda.')) ?>"
                class="border border-gray-700 px-6 py-3 rounded-lg text-white hover:bg-gray-900 transition"
                target="_blank"
                rel="noopener noreferrer"
            >
                Hablar con SynFive
            </a>
        </div>
    </div>
</section>