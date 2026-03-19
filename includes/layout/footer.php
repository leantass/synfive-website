<?php
require_once LAYOUT_PATH . '/navigation-data.php';

$contactWhatsapp = whatsapp_url('Hola SynFive, quiero hacer una consulta.');
?>

<footer class="border-t border-gray-800 py-12 bg-slate-950">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-5 gap-10 text-sm text-gray-400">

        <!-- MARCA -->
        <div>
            <div class="flex items-center gap-3 mb-4">
                <a href="<?= e(absolute_url()) ?>" aria-label="Ir al inicio de <?= e(SITE_NAME) ?>">
                    <img
                        src="<?= e(SITE_LOGO) ?>"
                        class="h-9 w-auto"
                        alt="Logo de <?= e(SITE_NAME) ?>"
                        loading="lazy"
                        decoding="async"
                    >
                </a>
            </div>

            <p class="mb-4">
                Infraestructura técnica para plataformas digitales exigentes.
            </p>

            <a
                href="<?= e($contactWhatsapp) ?>"
                class="inline-flex items-center gap-2 text-blue-400 hover:text-blue-300 transition-colors"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Contactar a <?= e(SITE_NAME) ?> por WhatsApp"
            >
                Contacto directo
                <span aria-hidden="true">→</span>
            </a>
        </div>

        <!-- INFRAESTRUCTURA -->
        <div>
            <h2 class="text-white font-semibold mb-4 text-sm">Infraestructura</h2>

            <ul class="space-y-2">
                <?php foreach ($NAV_INFRA as $item): ?>
                    <li>
                        <a href="<?= e(absolute_url($item['url'])) ?>" class="hover:text-white transition-colors">
                            <?= e($item['label']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- CAPACIDADES -->
        <div>
            <h2 class="text-white font-semibold mb-4 text-sm">Capacidades</h2>

            <ul class="space-y-2">
                <?php foreach ($NAV_CAPACIDADES as $item): ?>
                    <li>
                        <a href="<?= e(absolute_url($item['url'])) ?>" class="hover:text-white transition-colors">
                            <?= e($item['label']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- PRODUCTOS -->
        <div>
            <h2 class="text-white font-semibold mb-4 text-sm">Productos</h2>

            <ul class="space-y-2">
                <?php foreach ($NAV_PRODUCTOS as $item): ?>
                    <li>
                        <a href="<?= e(absolute_url($item['url'])) ?>" class="hover:text-white transition-colors">
                            <?= e($item['label']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- LEGAL -->
        <div>
            <h2 class="text-white font-semibold mb-4 text-sm">Legal</h2>

            <ul class="space-y-2">
                <?php foreach ($NAV_LEGAL as $item): ?>
                    <li>
                        <a href="<?= e(absolute_url($item['url'])) ?>" class="hover:text-white transition-colors">
                            <?= e($item['label']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>

    <div class="max-w-7xl mx-auto px-6 mt-10 pt-6 border-t border-gray-800 text-xs text-gray-500 flex flex-col md:flex-row justify-between gap-4">
        <p>
            © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Todos los derechos reservados.
        </p>

        <p>
            Infraestructura para plataformas digitales y sistemas distribuidos.
        </p>
    </div>
</footer>