<?php

declare(strict_types=1);

require_once __DIR__ . '/config/bootstrap.php';

$title = 'Política de cookies | SynFive';
$description = 'Política de cookies de SynFive. Información sobre el uso de cookies y tecnologías similares en este sitio web.';
$canonical = '/cookies';
$currentSection = '';
$ogType = 'website';

renderPage(INCLUDES_PATH . '/views/pages/cookies-content.php');