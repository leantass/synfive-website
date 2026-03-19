<?php

declare(strict_types=1);

http_response_code(404);

require_once __DIR__ . '/config/bootstrap.php';

$title = 'Página no encontrada | SynFive';
$description = 'La página que buscás no existe o fue movida. Volvé al inicio de SynFive para seguir navegando.';
$canonical = '/404';
$robots = 'noindex, follow';
$currentSection = '';
$ogType = 'website';
$bodyClass = 'error-page';

renderPage(INCLUDES_PATH . '/views/errors/404-content.php');