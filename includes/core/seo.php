<?php

declare(strict_types=1);

/* ======================================================
   SEO HELPERS
   ====================================================== */

if (!function_exists('seo_title')) {
    function seo_title(?string $title): string
    {
        return page_title($title);
    }
}

if (!function_exists('seo_description')) {
    function seo_description(?string $description): string
    {
        return page_description($description);
    }
}

if (!function_exists('seo_canonical')) {
    function seo_canonical(?string $canonical): string
    {
        return page_canonical($canonical);
    }
}

if (!function_exists('seo_og_title')) {
    function seo_og_title(?string $ogTitle, ?string $title): string
    {
        $ogTitle = trim((string) $ogTitle);
        return $ogTitle !== '' ? $ogTitle : page_title($title);
    }
}

if (!function_exists('seo_og_description')) {
    function seo_og_description(?string $ogDescription, ?string $description): string
    {
        $ogDescription = trim((string) $ogDescription);
        return $ogDescription !== '' ? $ogDescription : page_description($description);
    }
}

if (!function_exists('seo_og_image')) {
    function seo_og_image(?string $ogImage): string
    {
        return page_og_image($ogImage);
    }
}

if (!function_exists('seo_og_url')) {
    function seo_og_url(?string $canonical): string
    {
        return page_canonical($canonical);
    }
}

if (!function_exists('seo_type')) {
    function seo_type(?string $type): string
    {
        return page_type($type);
    }
}

if (!function_exists('seo_robots')) {
    function seo_robots(?string $robots): string
    {
        return page_robots($robots);
    }
}

if (!function_exists('seo_site_name')) {
    function seo_site_name(): string
    {
        return SITE_NAME;
    }
}

if (!function_exists('seo_locale')) {
    function seo_locale(): string
    {
        return defined('SITE_LOCALE') ? SITE_LOCALE : 'es_AR';
    }
}