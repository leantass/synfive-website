<?php
$logoAlt = 'Logo de ' . SITE_NAME;
$homeUrl = absolute_url();
$contactWhatsapp = whatsapp_url('Hola SynFive, quiero hacer una consulta.');
?>

<header class="border-b border-gray-800 bg-slate-950/95 backdrop-blur supports-[backdrop-filter]:bg-slate-950/80 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between gap-6 py-4">
            <a href="<?= e($homeUrl) ?>" class="flex items-center shrink-0" aria-label="Ir al inicio de <?= e(SITE_NAME) ?>">
                <img
                    src="<?= e(SITE_LOGO) ?>"
                    class="h-10 w-auto"
                    alt="<?= e($logoAlt) ?>"
                    loading="eager"
                    fetchpriority="high"
                    decoding="async"
                >
            </a>

            <button
                type="button"
                class="md:hidden inline-flex items-center justify-center rounded-lg border border-gray-700 px-3 py-2 text-sm text-white hover:bg-slate-800 transition-colors"
                aria-label="Abrir menú de navegación"
                aria-controls="site-navigation"
                aria-expanded="false"
                data-mobile-nav-toggle
            >
                Menú
            </button>

            <div class="hidden md:flex items-center gap-6">
                <?php
                $isMobileNav = false;
                require LAYOUT_PATH . '/navigation.php';
                ?>

                <a
                    href="<?= e($contactWhatsapp) ?>"
                    class="bg-blue-600 px-4 py-2 rounded-lg text-sm font-medium text-white hover:bg-blue-500 transition-colors inline-flex items-center gap-2"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Hablar con <?= e(SITE_NAME) ?> por WhatsApp"
                >
                    Hablar con SynFive
                    <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>

        <div
            id="site-navigation"
            class="md:hidden hidden pb-4"
            data-mobile-nav-panel
        >
            <div class="flex flex-col gap-4 border-t border-gray-800 pt-4">
                <?php
                $isMobileNav = true;
                require LAYOUT_PATH . '/navigation.php';
                ?>

                <a
                    href="<?= e($contactWhatsapp) ?>"
                    class="bg-blue-600 px-4 py-3 rounded-lg text-sm font-medium text-white hover:bg-blue-500 transition-colors inline-flex items-center justify-center gap-2"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Hablar con <?= e(SITE_NAME) ?> por WhatsApp"
                >
                    Hablar con SynFive
                    <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </div>
</header>