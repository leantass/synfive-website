<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/config/bootstrap.php';

$title = 'FLOE | SynFive';
$description = 'FLOE es la plataforma de SynFive para análisis y optimización de visibilidad técnica y semántica frente a motores de búsqueda e inteligencias artificiales.';
$canonical = '/productos/floe';
$currentSection = 'productos';
$ogType = 'website';

$schemaMarkup = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'FLOE',
        'description' => 'FLOE es la plataforma de SynFive para análisis y optimización de visibilidad técnica y semántica frente a motores de búsqueda e inteligencias artificiales.',
        'url' => absolute_url('productos/floe'),
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
        'category' => 'Plataforma de análisis y optimización de visibilidad técnica y semántica',
    ],
    [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => '¿Qué es FLOE?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'FLOE es una plataforma de SynFive para analizar y optimizar la visibilidad técnica y semántica de sitios web frente a buscadores e inteligencias artificiales.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿FLOE sirve solo para SEO tradicional?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No. FLOE no se limita al SEO clásico. También evalúa cómo una web puede ser interpretada, comprendida y recomendada por sistemas modernos e inteligencias artificiales.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Para quién está pensado FLOE?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'FLOE está pensado para agencias, empresas con fuerte presencia digital, consultoras y partners que quieran sumar análisis técnico y optimización a su oferta.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿FLOE puede ofrecerse a través de partners?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. FLOE puede implementarse de forma directa o integrarse como solución para partners y revendedores mediante acuerdos de colaboración.',
                ],
            ],
        ],
    ],
];

renderPage(INCLUDES_PATH . '/views/productos/floe-content.php');