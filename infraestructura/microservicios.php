<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/config/bootstrap.php';

$title = 'Microservicios | SynFive';
$description = 'Arquitecturas basadas en microservicios para plataformas escalables, resilientes y desacopladas, preparadas para crecer sin fricción.';
$canonical = '/infraestructura/microservicios';
$currentSection = 'infraestructura';
$ogType = 'website';

$schemaMarkup = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Microservicios',
        'description' => 'Arquitecturas basadas en microservicios para plataformas escalables, resilientes y desacopladas, preparadas para crecer sin fricción.',
        'url' => absolute_url('infraestructura/microservicios'),
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
        'category' => 'Arquitecturas basadas en microservicios',
    ],
    [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => '¿Qué es una arquitectura de microservicios?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Es un enfoque donde una plataforma se divide en servicios independientes, cada uno con una responsabilidad específica, permitiendo escalar, desplegar y evolucionar partes del sistema por separado.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Cuándo conviene usar microservicios?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Conviene cuando una plataforma necesita crecer de forma modular, soportar múltiples equipos, escalar componentes específicos o reducir dependencia de un sistema monolítico.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Qué ventajas tienen los microservicios frente a un monolito?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Permiten escalabilidad independiente, mayor resiliencia, despliegues más controlados y una evolución técnica más flexible según la necesidad de cada servicio.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿SynFive puede diseñar una arquitectura de microservicios?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. SynFive diseña arquitecturas desacopladas con foco en escalabilidad, resiliencia, integración entre servicios y operación sostenida.',
                ],
            ],
        ],
    ],
];

renderPage(INCLUDES_PATH . '/views/infraestructura/microservicios-content.php');