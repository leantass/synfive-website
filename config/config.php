<?php

declare(strict_types=1);

/* ======================================================
   ENTORNO
   ====================================================== */

define('SITE_ENV', 'production'); // development | production


/* ======================================================
   INFORMACIÓN DEL SITIO
   ====================================================== */

define('SITE_NAME', 'SynFive');
define('SITE_URL', 'https://synfive.com'); // sin slash final

define('SITE_EMAIL', 'hola@synfive.com');

define('SITE_PHONE', '+5491162772377');
define('WHATSAPP_NUMBER', '5491162772377');

define('SITE_LOCALE', 'es_AR');
define('SITE_LANGUAGE', 'es');
define('SITE_TIMEZONE', 'America/Argentina/Buenos_Aires');


/* ======================================================
   RUTAS URL PÚBLICAS
   ====================================================== */

define('IMAGES_PATH', ASSETS_PATH . '/images');
define('ICONS_PATH', ASSETS_PATH . '/icons');
define('FAVICON_PATH', ASSETS_PATH . '/favicon');
define('VIDEO_PATH', ASSETS_PATH . '/video');

/*
 * Assets reales del proyecto.
 * Centralizamos rutas clave para evitar hardcodes inconsistentes
 * en header, footer, schemas, OG y vistas.
 */
define('SITE_LOGO', ASSETS_PATH . '/logo.webp');
define('DEFAULT_OG_IMAGE', ASSETS_PATH . '/logo.webp');


/* ======================================================
   SEO DEFAULT
   ====================================================== */

define(
    'DEFAULT_TITLE',
    'SynFive | Infraestructura para plataformas digitales'
);

define(
    'DEFAULT_DESCRIPTION',
    'SynFive diseña y opera infraestructura técnica para plataformas digitales exigentes: cloud privada, backend SaaS, microservicios, almacenamiento masivo y sistemas distribuidos.'
);

define(
    'DEFAULT_ROBOTS',
    'index, follow'
);


/* ======================================================
   REDES
   ====================================================== */

$SITE_SOCIAL = [
    'linkedin' => '',
    'twitter'  => '',
    'youtube'  => '',
];


/* ======================================================
   CONTACTO
   ====================================================== */

define('CONTACT_EMAIL_LINK', 'mailto:' . SITE_EMAIL);


/* ======================================================
   SEGURIDAD / ERRORES
   ====================================================== */

date_default_timezone_set(SITE_TIMEZONE);

if (SITE_ENV === 'development') {
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    ini_set('log_errors', '1');
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', '0');
    ini_set('display_startup_errors', '0');
    ini_set('log_errors', '1');
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
}