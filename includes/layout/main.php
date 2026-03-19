<?php

if (!isset($pageContent) || !is_string($pageContent) || $pageContent === '') {
    http_response_code(500);
    exit('Error interno: contenido de página no definido.');
}

if (!is_file($pageContent)) {
    http_response_code(500);
    exit('Error interno: archivo de contenido no encontrado.');
}
?>
<!DOCTYPE html>
<html lang="<?= defined('SITE_LANGUAGE') ? e(SITE_LANGUAGE) : 'es' ?>">
<head>
    <?php require LAYOUT_PATH . '/head.php'; ?>
</head>
<body class="<?= e($bodyClass ?? '') ?>">
    <?php require LAYOUT_PATH . '/header.php'; ?>

    <main>
        <?php require $pageContent; ?>
    </main>

    <?php require LAYOUT_PATH . '/footer.php'; ?>
    <?php require LAYOUT_PATH . '/cookie-banner.php'; ?>
</body>
</html>