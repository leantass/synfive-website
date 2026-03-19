<?php

declare(strict_types=1);

/* ======================================================
   RAÍZ DEL PROYECTO
   ====================================================== */

define('ROOT_PATH', dirname(__DIR__));


/* ======================================================
   RUTAS PRINCIPALES
   ====================================================== */

define('ASSETS_PATH', '/assets');
define('CSS_PATH', ASSETS_PATH . '/css');
define('JS_PATH', ASSETS_PATH . '/js');
define('DOWNLOADS_PATH', '/downloads');

define('INCLUDES_PATH', ROOT_PATH . '/includes');
define('CORE_PATH', INCLUDES_PATH . '/core');
define('LAYOUT_PATH', INCLUDES_PATH . '/layout');
define('COMPONENTS_PATH', INCLUDES_PATH . '/components');

define('DATA_PATH', ROOT_PATH . '/data');


/* ======================================================
   CONFIGURACIÓN GLOBAL
   ====================================================== */

require_once __DIR__ . '/config.php';


/* ======================================================
   CONFIGURACIÓN BASE DE PHP
   ====================================================== */

ini_set('default_charset', 'UTF-8');


/* ======================================================
   FUNCIONES BASE
   ====================================================== */

require_once CORE_PATH . '/functions.php';
require_once CORE_PATH . '/seo.php';


/* ======================================================
   VARIABLES BASE DE PÁGINA
   ====================================================== */

$title = $title ?? DEFAULT_TITLE;
$description = $description ?? DEFAULT_DESCRIPTION;
$canonical = $canonical ?? '';
$robots = $robots ?? DEFAULT_ROBOTS;

$ogTitle = $ogTitle ?? $title;
$ogDescription = $ogDescription ?? $description;
$ogImage = $ogImage ?? DEFAULT_OG_IMAGE;
$ogType = $ogType ?? 'website';

$currentSection = $currentSection ?? '';
$bodyClass = $bodyClass ?? '';
$schemaMarkup = $schemaMarkup ?? [];


/* ======================================================
   NORMALIZACIÓN DE SCHEMA
   ====================================================== */

if (!is_array($schemaMarkup)) {
    $schemaMarkup = [];
}