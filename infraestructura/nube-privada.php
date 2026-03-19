<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/config/bootstrap.php';

$title = 'Nube privada | SynFive';
$description = 'Nube privada para operaciones críticas, plataformas digitales y entornos híbridos que requieren control, estabilidad, soberanía tecnológica y escalabilidad real.';
$canonical = '/infraestructura/nube-privada';
$currentSection = 'infraestructura';
$ogType = 'website';

$schemaMarkup = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Nube privada',
        'description' => 'Infraestructura cloud privada diseñada para control total de recursos, alto rendimiento, seguridad y adaptación a necesidades específicas de cada plataforma.',
        'url' => absolute_url('infraestructura/nube-privada'),
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
        'category' => 'Infraestructura de nube privada',
    ],
    [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => '¿Qué ventajas tiene una nube privada frente a una solución pública?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Una nube privada ofrece mayor control sobre recursos, políticas, rendimiento, seguridad y evolución técnica de la infraestructura.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Cuándo conviene implementar una nube privada?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Conviene cuando una operación necesita estabilidad, soberanía tecnológica, mayor previsibilidad de performance o una arquitectura adaptada a requerimientos específicos.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿SynFive trabaja con entornos híbridos?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. SynFive diseña e implementa entornos cloud privados e híbridos según la necesidad operativa de cada plataforma.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿La nube privada sirve solo para grandes empresas?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No. También es útil para productos digitales y operaciones en crecimiento que necesitan una base técnica más controlada y preparada para escalar.',
                ],
            ],
        ],
    ],
];

renderPage(INCLUDES_PATH . '/views/infraestructura/nube-privada-content.php');