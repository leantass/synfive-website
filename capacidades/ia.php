<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/config/bootstrap.php';

$title = 'IA y automatización | SynFive';
$description = 'Inteligencia artificial y automatización aplicada a procesos reales, plataformas digitales, asistentes inteligentes e integración con sistemas.';
$canonical = '/capacidades/ia';
$currentSection = 'capacidades';
$ogType = 'website';

$schemaMarkup = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'IA y automatización',
        'description' => 'Inteligencia artificial y automatización aplicada a procesos reales, plataformas digitales, asistentes inteligentes e integración con sistemas.',
        'url' => absolute_url('capacidades/ia'),
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
        'category' => 'Inteligencia artificial y automatización aplicada',
    ],
    [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => '¿Qué tipo de soluciones de IA implementa SynFive?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'SynFive implementa automatización de procesos, asistentes inteligentes, análisis de información, integraciones con plataformas y sistemas completos basados en inteligencia artificial.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿La IA de SynFive se aplica a procesos reales?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. El enfoque de SynFive está orientado a resolver problemas concretos de operación, automatización, atención, análisis y gestión sobre sistemas reales.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿SynFive ofrece productos propios de inteligencia artificial?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. SynFive desarrolla productos propios como FLOE, Scarlett y Stockia, que pueden implementarse directamente o integrarse mediante acuerdos con partners.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿La inteligencia artificial puede integrarse con infraestructura y plataformas existentes?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. Las soluciones de SynFive están pensadas para integrarse con sistemas, plataformas, APIs y procesos ya existentes.',
                ],
            ],
        ],
    ],
];

renderPage(INCLUDES_PATH . '/views/capacidades/ia-content.php');