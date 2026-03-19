<?php

declare(strict_types=1);

require_once __DIR__ . '/config/bootstrap.php';

$title = 'Nosotros | SynFive';
$description = 'Conocé a SynFive, una empresa enfocada en infraestructura técnica, automatización, inteligencia artificial y productos propios para plataformas digitales.';
$canonical = '/nosotros';
$currentSection = 'nosotros';
$ogType = 'website';

$schemaMarkup = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'AboutPage',
        'name' => 'Nosotros | SynFive',
        'url' => absolute_url('nosotros'),
        'description' => $description,
        'about' => [
            '@type' => 'Organization',
            'name' => SITE_NAME,
            'url' => absolute_url(),
            'logo' => [
                '@type' => 'ImageObject',
                'url' => absolute_url(SITE_LOGO),
            ],
        ],
    ],
];

renderPage(INCLUDES_PATH . '/views/pages/nosotros-content.php');