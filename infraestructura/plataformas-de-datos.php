<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/config/bootstrap.php';

$title = 'Plataformas de datos | SynFive';
$description = 'Plataformas de datos para operaciones que dependen de información crítica: almacenamiento, organización, disponibilidad, trazabilidad y explotación de datos.';
$canonical = '/infraestructura/plataformas-de-datos';
$currentSection = 'infraestructura';
$ogType = 'website';

$schemaMarkup = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Plataformas de datos',
        'description' => 'Infraestructura para capturar, organizar, disponibilizar y explotar información crítica con escalabilidad y criterio técnico real.',
        'url' => absolute_url('infraestructura/plataformas-de-datos'),
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
        'category' => 'Infraestructura de datos',
    ],
    [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => '¿Qué es una plataforma de datos?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Una plataforma de datos es una arquitectura que permite capturar, organizar, almacenar, procesar y disponibilizar información para distintos sistemas, procesos o análisis.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Cuándo conviene construir una plataforma de datos?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Conviene cuando una organización depende de múltiples fuentes de información, necesita consolidar datos o requiere analítica confiable para la operación.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Una plataforma de datos es lo mismo que una base de datos?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No. Una base de datos es solo una parte. Una plataforma de datos incluye ingesta, transformación, almacenamiento, disponibilidad y consumo de información.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿SynFive diseña plataformas de datos completas?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. SynFive diseña arquitecturas de datos que permiten capturar, organizar, disponibilizar y explotar información con escalabilidad y confiabilidad.',
                ],
            ],
        ],
    ],
];

renderPage(INCLUDES_PATH . '/views/infraestructura/plataformas-de-datos-content.php');