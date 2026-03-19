<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/config/bootstrap.php';

$title = 'Redes distribuidas | SynFive';
$description = 'Infraestructura para redes distribuidas y nodos conectados, diseñada para operaciones complejas que requieren resiliencia, escalabilidad y coordinación entre múltiples componentes.';
$canonical = '/infraestructura/redes-distribuidas';
$currentSection = 'infraestructura';
$ogType = 'website';

$schemaMarkup = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Redes distribuidas',
        'description' => 'Infraestructura para redes distribuidas y nodos conectados, diseñada para operaciones complejas que requieren resiliencia, escalabilidad y coordinación entre múltiples componentes.',
        'url' => absolute_url('infraestructura/redes-distribuidas'),
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
        'category' => 'Infraestructura para redes distribuidas',
    ],
    [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => '¿Qué es una red distribuida?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Es una arquitectura en la que múltiples nodos, servicios o componentes trabajan coordinadamente para sostener una operación sin depender de un único punto central.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Cuándo conviene diseñar una red distribuida?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Conviene cuando una operación necesita resiliencia, tolerancia a fallos, escalado horizontal, distribución geográfica o coordinación entre múltiples componentes.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Qué ventajas tiene una arquitectura distribuida frente a una centralizada?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Permite reducir riesgos de caída total, facilitar crecimiento horizontal, mejorar tolerancia a fallos y adaptarse mejor a operaciones complejas o híbridas.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿SynFive diseña infraestructuras distribuidas completas?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. SynFive diseña arquitecturas distribuidas orientadas a resiliencia, escalabilidad, observabilidad y coordinación consistente entre nodos y servicios.',
                ],
            ],
        ],
    ],
];

renderPage(INCLUDES_PATH . '/views/infraestructura/redes-distribuidas-content.php');