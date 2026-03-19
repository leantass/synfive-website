<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/config/bootstrap.php';

$title = 'Desarrollo | SynFive';
$description = 'Desarrollo de plataformas, sistemas backend, integraciones y soluciones técnicas para operaciones digitales exigentes.';
$canonical = '/capacidades/desarrollo';
$currentSection = 'capacidades';
$ogType = 'website';

$schemaMarkup = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Desarrollo',
        'description' => 'Desarrollo de plataformas, sistemas backend, integraciones y soluciones técnicas para operaciones digitales exigentes.',
        'url' => absolute_url('capacidades/desarrollo'),
        'image' => absolute_url(SITE_LOGO),
        'provider' => [
            '@type' => 'Organization',
            'name' => SITE_NAME,
            'url' => absolute_url(),
        ],
        'areaServed' => [
            '@type' => 'Place',
            'name' => 'Latinoamérica',
        ],
        'category' => 'Desarrollo de plataformas y sistemas técnicos',
    ],
    [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => '¿Qué tipo de desarrollo realiza SynFive?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'SynFive desarrolla plataformas web, sistemas backend, integraciones, automatización de procesos, productos SaaS y soluciones personalizadas para operaciones digitales.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿El desarrollo se integra con infraestructura y datos?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. El enfoque de SynFive conecta desarrollo con infraestructura, datos, automatización y operación técnica real.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Cuándo conviene construir una solución a medida?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Conviene cuando una operación necesita integraciones específicas, lógica de negocio propia o una plataforma preparada para evolucionar sin depender de herramientas genéricas.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿SynFive desarrolla plataformas SaaS?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. SynFive desarrolla productos y plataformas SaaS preparados para escalar, integrarse con otros sistemas y sostener operación continua.',
                ],
            ],
        ],
    ],
];

renderPage(INCLUDES_PATH . '/views/capacidades/desarrollo-content.php');