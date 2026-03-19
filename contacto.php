<?php

declare(strict_types=1);

require_once __DIR__ . '/config/bootstrap.php';

$title = 'Contacto | SynFive';
$description = 'Contactá a SynFive para conversar sobre infraestructura, automatización, inteligencia artificial, ciberseguridad y productos propios.';
$canonical = '/contacto';
$currentSection = 'contacto';
$ogType = 'website';

$schemaMarkup = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'ContactPage',
        'name' => 'Contacto | SynFive',
        'url' => absolute_url('contacto'),
        'description' => $description,
    ],
];

renderPage(INCLUDES_PATH . '/views/pages/contacto-content.php');