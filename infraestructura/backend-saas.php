<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/config/bootstrap.php';

$title = 'Backend SaaS | SynFive';
$description = 'Backend robusto para plataformas SaaS: APIs escalables, autenticación, gestión de usuarios, multi-tenant e integraciones para productos digitales.';
$canonical = '/infraestructura/backend-saas';
$currentSection = 'infraestructura';
$ogType = 'website';

$schemaMarkup = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Backend SaaS',
        'description' => 'Arquitecturas backend para plataformas SaaS con APIs, autenticación, multi-tenant, integraciones y escalabilidad para productos digitales.',
        'url' => absolute_url('infraestructura/backend-saas'),
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
        'category' => 'Arquitectura backend para plataformas SaaS',
    ],
    [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => '¿Qué es un backend SaaS?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Es la arquitectura que sostiene la lógica de negocio, las APIs, la autenticación, la gestión de usuarios, las integraciones y la operación central de una plataforma SaaS.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Cuándo conviene diseñar una arquitectura backend SaaS a medida?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Conviene cuando el producto necesita escalar, integrar múltiples servicios, gestionar usuarios y clientes de forma aislada o sostener una evolución continua sin comprometer estabilidad.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Qué significa que un backend sea multi-tenant?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Significa que una misma plataforma puede servir a múltiples clientes o cuentas manteniendo aislamiento lógico, seguridad y control sobre los datos de cada uno.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿SynFive puede diseñar un backend SaaS completo?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sí. SynFive diseña arquitecturas backend para productos SaaS con foco en APIs, autenticación, escalabilidad, integraciones, multi-tenant y evolución sostenida.',
                ],
            ],
        ],
    ],
];

renderPage(INCLUDES_PATH . '/views/infraestructura/backend-saas-content.php');