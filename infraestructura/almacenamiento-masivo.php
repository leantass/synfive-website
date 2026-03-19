<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/config/bootstrap.php';

$title = 'Almacenamiento masivo | SynFive';
$description = 'Infraestructura para almacenamiento masivo de datos: entornos escalables, redundantes y confiables para operaciones críticas y grandes volúmenes de información.';
$canonical = '/infraestructura/almacenamiento-masivo';
$currentSection = 'infraestructura';
$ogType = 'website';

$schemaMarkup = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Almacenamiento masivo',
        'description' => 'Infraestructura para almacenamiento masivo de datos con escalabilidad, redundancia, disponibilidad y seguridad para plataformas digitales exigentes.',
        'url' => absolute_url('infraestructura/almacenamiento-masivo'),
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
        'category' => 'Infraestructura para almacenamiento masivo de datos',
    ],
    [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => '¿Qué es una infraestructura de almacenamiento masivo?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Es una arquitectura diseñada para almacenar, organizar y disponibilizar grandes volúmenes de información de forma escalable, redundante y confiable.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Cuándo conviene implementar almacenamiento masivo?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Conviene cuando una plataforma debe manejar grandes volúmenes de datos, garantizar disponibilidad constante, sostener crecimiento continuo o reducir riesgos de pérdida de información.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Qué diferencias hay entre almacenamiento masivo y almacenamiento tradicional?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'El almacenamiento tradicional suele estar pensado para volúmenes más limitados o entornos simples. El almacenamiento masivo está diseñado para escalar, mantener redundancia, optimizar acceso y sostener operaciones críticas.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿SynFive puede diseñar una arquitectura de almacenamiento masivo?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. SynFive diseña infraestructuras de almacenamiento orientadas a volumen, disponibilidad, integración, seguridad y evolución sostenida según la necesidad real de cada operación.',
                ],
            ],
        ],
    ],
];

renderPage(INCLUDES_PATH . '/views/infraestructura/almacenamiento-masivo-content.php');