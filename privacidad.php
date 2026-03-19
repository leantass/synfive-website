<?php

declare(strict_types=1);

require_once __DIR__ . '/config/bootstrap.php';

$title = 'Política de privacidad | SynFive';
$description = 'Política de privacidad de SynFive. Información sobre el uso de datos compartidos a través de canales de contacto y consultas comerciales.';
$canonical = '/privacidad';
$currentSection = '';
$ogType = 'website';

renderPage(INCLUDES_PATH . '/views/pages/privacidad-content.php');