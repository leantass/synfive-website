<?php

declare(strict_types=1);

require_once __DIR__ . '/config/bootstrap.php';

$title = 'SynFive | Infraestructura para plataformas digitales';
$description = 'SynFive diseña y opera infraestructura técnica para plataformas digitales exigentes: nube privada, backend SaaS, microservicios, almacenamiento masivo y sistemas distribuidos.';
$canonical = '/';
$currentSection = '';
$ogType = 'website';

$schemaMarkup = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => SITE_NAME,
        'url' => absolute_url(),
        'logo' => [
            '@type' => 'ImageObject',
            'url' => absolute_url(SITE_LOGO),
        ],
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => '+5491162772377',
            'contactType' => 'sales',
            'areaServed' => 'AR',
            'availableLanguage' => ['es', 'en'],
        ],
    ],
    [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => SITE_NAME,
        'url' => absolute_url(),
        'inLanguage' => 'es',
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

renderPage(INCLUDES_PATH . '/views/pages/inicio-content.php');