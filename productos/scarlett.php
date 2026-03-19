<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/config/bootstrap.php';

$title = 'Scarlett | SynFive';
$description = 'Scarlett es la plataforma de asistentes inteligentes multicanal de SynFive, diseñada para operar sobre ventas, atención, APIs y procesos empresariales.';
$canonical = '/productos/scarlett';
$currentSection = 'productos';
$ogType = 'website';

$schemaMarkup = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Scarlett',
        'description' => 'Scarlett es la plataforma de asistentes inteligentes multicanal de SynFive, diseñada para operar sobre ventas, atención, APIs y procesos empresariales.',
        'url' => absolute_url('productos/scarlett'),
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
        'category' => 'Plataforma de asistentes inteligentes multicanal',
    ],
    [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => '¿Qué es Scarlett?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Scarlett es una plataforma de asistentes inteligentes multicanal diseñada para operar sobre ventas, atención, APIs y procesos empresariales.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Scarlett puede integrarse con sistemas existentes?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. Scarlett puede conectarse con CRMs, ERPs, APIs, bases de datos y otros sistemas empresariales para automatizar procesos e interacciones.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Scarlett sirve solo para atención al cliente?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No. Scarlett puede operar en atención al cliente, ventas automatizadas, soporte técnico y flujos internos de consulta o ejecución sobre sistemas empresariales.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Scarlett puede ofrecerse como white-label?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. Scarlett puede implementarse como solución directa o como plataforma white-label para agencias, partners y modelos de colaboración.',
                ],
            ],
        ],
    ],
];

renderPage(INCLUDES_PATH . '/views/productos/scarlett-content.php');