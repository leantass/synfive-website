<div
    id="cookie-banner"
    class="fixed bottom-4 left-4 right-4 z-50 hidden rounded-2xl border border-white/10 bg-gray-900/95 backdrop-blur-md shadow-2xl p-5 md:max-w-3xl md:left-6 md:right-6"
    role="dialog"
    aria-labelledby="cookie-banner-title"
    aria-describedby="cookie-banner-description"
    aria-live="polite"
    aria-modal="false"
>
    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
        <div>
            <p id="cookie-banner-title" class="text-white font-semibold mb-2">
                Uso de cookies
            </p>

            <p id="cookie-banner-description" class="text-sm text-gray-400 leading-relaxed">
                Utilizamos cookies para mejorar la experiencia de navegación y analizar el uso del sitio.
                Podés aceptar o rechazar las cookies no esenciales.
                Más información en nuestra
                <a href="<?= e(absolute_url('cookies')) ?>" class="text-blue-400 hover:text-blue-300 underline">
                    Política de cookies
                </a>.
            </p>
        </div>

        <div class="flex flex-wrap gap-3">
            <button
                id="reject-cookies"
                class="rounded-lg border border-white/10 px-4 py-2 text-sm text-white hover:bg-white/5 transition"
                type="button"
            >
                Rechazar
            </button>

            <button
                id="accept-cookies"
                class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-500 transition"
                type="button"
            >
                Aceptar
            </button>
        </div>
    </div>
</div>