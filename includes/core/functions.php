<?php

declare(strict_types=1);

/* ======================================================
   ESCAPE HTML SEGURO
   ====================================================== */

if (!function_exists('e')) {
    function e(mixed $value): string
    {
        return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
}


/* ======================================================
   NORMALIZACIÓN DE PATHS / URLS
   ====================================================== */

if (!function_exists('normalize_path')) {
    function normalize_path(string $path): string
    {
        return ltrim($path, '/');
    }
}


/* ======================================================
   ASSET DIRECTO DESDE /assets
   ====================================================== */

if (!function_exists('asset')) {
    function asset(string $path): string
    {
        return ASSETS_PATH . '/' . normalize_path($path);
    }
}

if (!function_exists('css')) {
    function css(string $file): string
    {
        return CSS_PATH . '/' . normalize_path($file);
    }
}

if (!function_exists('js')) {
    function js(string $file): string
    {
        return JS_PATH . '/' . normalize_path($file);
    }
}


/* ======================================================
   URLS
   ====================================================== */

if (!function_exists('absolute_url')) {
    function absolute_url(string $path = ''): string
    {
        $path = trim($path);

        if ($path === '') {
            return SITE_URL;
        }

        if (preg_match('#^https?://#i', $path)) {
            return $path;
        }

        return rtrim(SITE_URL, '/') . '/' . normalize_path($path);
    }
}

if (!function_exists('canonical_url')) {
    function canonical_url(?string $canonical = null): string
    {
        if ($canonical === null || trim($canonical) === '') {
            $requestUri = $_SERVER['REQUEST_URI'] ?? '/';
            $requestPath = parse_url($requestUri, PHP_URL_PATH) ?: '/';

            if ($requestPath !== '/') {
                $requestPath = rtrim($requestPath, '/');
            }

            return absolute_url($requestPath);
        }

        return absolute_url($canonical);
    }
}

if (!function_exists('current_url')) {
    function current_url(): string
    {
        $requestUri = $_SERVER['REQUEST_URI'] ?? '/';
        $requestPath = parse_url($requestUri, PHP_URL_PATH) ?: '/';

        return absolute_url($requestPath);
    }
}


/* ======================================================
   CONTACTO
   ====================================================== */

if (!function_exists('whatsapp_url')) {
    function whatsapp_url(string $message = ''): string
    {
        $url = 'https://wa.me/' . preg_replace('/\D+/', '', WHATSAPP_NUMBER);

        if (trim($message) !== '') {
            $url .= '?text=' . urlencode($message);
        }

        return $url;
    }
}


/* ======================================================
   NAVEGACIÓN
   ====================================================== */

if (!function_exists('is_current_section')) {
    function is_current_section(string $currentSection, string $section): bool
    {
        return trim($currentSection) === trim($section);
    }
}

if (!function_exists('nav_link_class')) {
    function nav_link_class(string $currentSection, string $section): string
    {
        return is_current_section($currentSection, $section)
            ? 'text-white'
            : 'hover:text-white transition-colors';
    }
}

if (!function_exists('nav_aria_current')) {
    function nav_aria_current(string $currentSection, string $section): string
    {
        return is_current_section($currentSection, $section)
            ? 'aria-current="page"'
            : '';
    }
}


/* ======================================================
   SEO FALLBACKS
   ====================================================== */

if (!function_exists('page_title')) {
    function page_title(?string $title): string
    {
        $title = trim((string) $title);
        return $title !== '' ? $title : DEFAULT_TITLE;
    }
}

if (!function_exists('page_description')) {
    function page_description(?string $description): string
    {
        $description = trim((string) $description);
        return $description !== '' ? $description : DEFAULT_DESCRIPTION;
    }
}

if (!function_exists('page_canonical')) {
    function page_canonical(?string $canonical): string
    {
        return canonical_url($canonical);
    }
}

if (!function_exists('page_og_image')) {
    function page_og_image(?string $ogImage): string
    {
        $ogImage = trim((string) $ogImage);
        return $ogImage !== '' ? absolute_url($ogImage) : absolute_url(DEFAULT_OG_IMAGE);
    }
}

if (!function_exists('page_type')) {
    function page_type(?string $type): string
    {
        $type = trim((string) $type);
        return $type !== '' ? $type : 'website';
    }
}

if (!function_exists('page_robots')) {
    function page_robots(?string $robots): string
    {
        $robots = trim((string) $robots);
        return $robots !== '' ? $robots : DEFAULT_ROBOTS;
    }
}


/* ======================================================
   SCHEMA
   ====================================================== */

if (!function_exists('render_schema_scripts')) {
    function render_schema_scripts(array $schemaMarkup): string
    {
        if (empty($schemaMarkup)) {
            return '';
        }

        $output = '';

        foreach ($schemaMarkup as $schema) {
            if (!is_array($schema) || empty($schema)) {
                continue;
            }

            $json = json_encode(
                $schema,
                JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT
            );

            if ($json === false) {
                continue;
            }

            $output .= '<script type="application/ld+json">' . "\n";
            $output .= $json . "\n";
            $output .= '</script>' . "\n";
        }

        return $output;
    }
}


/* ======================================================
   RENDER DE PÁGINA CON LAYOUT GLOBAL
   ====================================================== */

if (!function_exists('renderPage')) {
    function renderPage(string $contentFile): void
    {
        $resolvedContentFile = $contentFile;

        if (!is_file($resolvedContentFile)) {
            throw new RuntimeException('Vista no encontrada: ' . $resolvedContentFile);
        }

        $layoutFile = LAYOUT_PATH . '/main.php';

        if (!is_file($layoutFile)) {
            throw new RuntimeException('Layout principal no encontrado: ' . $layoutFile);
        }

        /*
         * Estas variables se definen en cada controlador.
         * Como renderPage() corre dentro de una función, no las ve automáticamente.
         * Por eso las traemos desde $GLOBALS y las dejamos disponibles para el layout.
         */

        $allowedPageVars = [
            'title',
            'description',
            'canonical',
            'robots',
            'ogTitle',
            'ogDescription',
            'ogImage',
            'ogType',
            'bodyClass',
            'currentSection',
            'schemaMarkup',
        ];

        foreach ($allowedPageVars as $varName) {
            if (array_key_exists($varName, $GLOBALS)) {
                ${$varName} = $GLOBALS[$varName];
            }
        }

        /*
         * Defaults seguros para evitar notices y mantener consistencia
         * aunque una página no defina alguna variable.
         */
        $title = $title ?? null;
        $description = $description ?? null;
        $canonical = $canonical ?? null;
        $robots = $robots ?? null;
        $ogTitle = $ogTitle ?? null;
        $ogDescription = $ogDescription ?? null;
        $ogImage = $ogImage ?? null;
        $ogType = $ogType ?? null;
        $bodyClass = $bodyClass ?? '';
        $currentSection = $currentSection ?? '';
        $schemaMarkup = is_array($schemaMarkup ?? null) ? $schemaMarkup : [];

        /*
         * Nombre que usa el layout para incluir la vista.
         */
        $pageContent = $resolvedContentFile;

        require $layoutFile;
    }
}