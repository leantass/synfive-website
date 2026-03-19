<?php

declare(strict_types=1);

require_once __DIR__ . '/config/bootstrap.php';

$title = 'Términos de servicio | SynFive';
$description = 'Términos de servicio de SynFive para el uso del sitio web, canales de contacto y servicios o productos ofrecidos.';
$canonical = '/terminos';
$currentSection = '';
$ogType = 'website';

renderPage(INCLUDES_PATH . '/views/pages/terminos-content.php');