<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/config/bootstrap.php';

$title = 'Capacidades | SynFive';
$description = 'Capacidades técnicas de SynFive para plataformas digitales: inteligencia artificial, automatización, ciberseguridad y desarrollo orientado a infraestructura y operación.';
$canonical = '/capacidades/';
$currentSection = 'capacidades';
$ogType = 'website';

$schemaMarkup = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'CollectionPage',
        'name' => 'Capacidades | SynFive',
        'url' => absolute_url('capacidades/'),
        'description' => 'Página índice de capacidades técnicas de SynFive.',
    ],
];

renderPage(INCLUDES_PATH . '/views/capacidades/index-content.php');