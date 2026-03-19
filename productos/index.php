<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/config/bootstrap.php';

$title = 'Productos | SynFive';
$description = 'Plataformas desarrolladas por SynFive: productos propios orientados a inteligencia artificial, automatización, análisis técnico y operación digital.';
$canonical = '/productos/';
$currentSection = 'productos';
$ogType = 'website';

$schemaMarkup = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'CollectionPage',
        'name' => 'Productos | SynFive',
        'url' => absolute_url('productos/'),
        'description' => 'Plataformas desarrolladas por SynFive: productos propios orientados a inteligencia artificial, automatización, análisis técnico y operación digital.',
        'isPartOf' => [
            '@type' => 'WebSite',
            'name' => SITE_NAME,
            'url' => absolute_url(),
        ],
        'publisher' => [
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

renderPage(INCLUDES_PATH . '/views/productos/index-content.php');