<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/config/bootstrap.php';

$title = 'Infraestructura | SynFive';
$description = 'Infraestructura técnica de SynFive para plataformas digitales exigentes: nube privada, backend SaaS, microservicios, almacenamiento masivo, redes distribuidas y plataformas de datos.';
$canonical = '/infraestructura/';
$currentSection = 'infraestructura';
$ogType = 'website';

$schemaMarkup = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'CollectionPage',
        'name' => 'Infraestructura | SynFive',
        'url' => absolute_url('infraestructura/'),
        'description' => 'Página índice de infraestructura técnica de SynFive.',
    ],
];

renderPage(INCLUDES_PATH . '/views/infraestructura/index-content.php');