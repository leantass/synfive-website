<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/config/bootstrap.php';

$title = 'Stockia | SynFive';
$description = 'Stockia es la plataforma de SynFive para gestión inteligente de inventario, trazabilidad operativa y automatización de procesos basados en información estructurada.';
$canonical = '/productos/stockia';
$currentSection = 'productos';
$ogType = 'website';

$schemaMarkup = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Stockia',
        'description' => 'Stockia es la plataforma de SynFive para gestión inteligente de inventario, trazabilidad operativa y automatización de procesos basados en información estructurada.',
        'url' => absolute_url('productos/stockia'),
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
        'category' => 'Plataforma de gestión inteligente de inventario y trazabilidad operativa',
    ],
    [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => '¿Qué es Stockia?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Stockia es una plataforma orientada a la gestión inteligente de inventario, trazabilidad operativa y automatización de procesos basados en información estructurada.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Stockia sirve solo para mostrar cantidades de stock?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No. Stockia no se limita a mostrar cantidades. También permite acompañar procesos, detectar inconsistencias, centralizar información y mejorar la capacidad de respuesta operativa.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Qué tipo de operaciones puede ordenar Stockia?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Stockia puede aplicarse a inventario operativo, depósitos, logística interna y empresas que necesitan trazabilidad, validación y control sobre múltiples variables.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Stockia puede integrarse como solución para terceros?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. Stockia puede implementarse directamente o integrarse como solución para partners, revendedores o empresas que quieran sumar gestión inteligente de inventario a su oferta.',
                ],
            ],
        ],
    ],
];

renderPage(INCLUDES_PATH . '/views/productos/stockia-content.php');