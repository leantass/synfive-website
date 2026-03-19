<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/config/bootstrap.php';

$title = 'Ciberseguridad | SynFive';
$description = 'Servicios de ciberseguridad para infraestructuras digitales críticas: hardening, monitoreo, gestión de accesos, protección de datos y arquitectura segura.';
$canonical = '/capacidades/ciberseguridad';
$currentSection = 'capacidades';
$ogType = 'website';

$schemaMarkup = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Ciberseguridad',
        'description' => 'Servicios de ciberseguridad para infraestructuras digitales críticas: hardening, monitoreo, gestión de accesos, protección de datos y arquitectura segura.',
        'url' => absolute_url('capacidades/ciberseguridad'),
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
        'category' => 'Servicios de ciberseguridad',
    ],
    [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => '¿Qué incluye un servicio de ciberseguridad para infraestructura?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Puede incluir hardening, monitoreo, gestión de accesos, protección de datos, análisis de vulnerabilidades y diseño de arquitectura segura.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Cuándo conviene reforzar la ciberseguridad de una infraestructura?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Conviene cuando una operación depende de disponibilidad continua, maneja información sensible o necesita reducir superficie de riesgo en servidores, redes, aplicaciones y accesos.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿La seguridad debe pensarse al final del proyecto?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No. La seguridad debe formar parte del diseño de la arquitectura desde el inicio para evitar debilidades estructurales y problemas operativos futuros.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿SynFive diseña entornos con enfoque de seguridad integrado?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. SynFive trabaja la seguridad como parte de la infraestructura, integrando protección, monitoreo, control de acceso y criterios de continuidad operativa.',
                ],
            ],
        ],
    ],
];

renderPage(INCLUDES_PATH . '/views/capacidades/ciberseguridad-content.php');