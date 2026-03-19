<?php

$rawTitle = $title ?? null;
$rawDescription = $description ?? null;
$rawCanonical = $canonical ?? null;
$rawOgTitle = $ogTitle ?? null;
$rawOgDescription = $ogDescription ?? null;
$rawOgImage = $ogImage ?? null;
$rawOgType = $ogType ?? null;
$rawRobots = $robots ?? null;
$rawSchemaMarkup = $schemaMarkup ?? [];

$title = seo_title($rawTitle);
$description = seo_description($rawDescription);
$canonical = seo_canonical($rawCanonical);

$ogTitle = seo_og_title($rawOgTitle, $rawTitle);
$ogDescription = seo_og_description($rawOgDescription, $rawDescription);
$ogImage = seo_og_image($rawOgImage);
$ogUrl = seo_og_url($rawCanonical);
$ogType = seo_type($rawOgType);

$robots = seo_robots($rawRobots);
$schemaScripts = render_schema_scripts(is_array($rawSchemaMarkup) ? $rawSchemaMarkup : []);

?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= e($title) ?></title>

<meta name="description" content="<?= e($description) ?>">
<meta name="robots" content="<?= e($robots) ?>">
<meta name="theme-color" content="#020617">

<link rel="canonical" href="<?= e($canonical) ?>">

<?php if (defined('SITE_NAME')): ?>
<meta name="application-name" content="<?= e(SITE_NAME) ?>">
<?php endif; ?>

<?php if (defined('SITE_LANGUAGE')): ?>
<meta http-equiv="content-language" content="<?= e(SITE_LANGUAGE) ?>">
<?php endif; ?>

<!-- Favicons -->
<link rel="icon" type="image/x-icon" href="<?= e(asset('favicon/favicon.ico')) ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?= e(asset('favicon/favicon-32x32.png')) ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?= e(asset('favicon/favicon-16x16.png')) ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?= e(asset('favicon/apple-touch-icon.png')) ?>">

<!-- Open Graph -->
<meta property="og:title" content="<?= e($ogTitle) ?>">
<meta property="og:description" content="<?= e($ogDescription) ?>">
<meta property="og:image" content="<?= e($ogImage) ?>">
<meta property="og:url" content="<?= e($ogUrl) ?>">
<meta property="og:type" content="<?= e($ogType) ?>">
<meta property="og:site_name" content="<?= e(seo_site_name()) ?>">
<meta property="og:locale" content="<?= e(seo_locale()) ?>">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= e($ogTitle) ?>">
<meta name="twitter:description" content="<?= e($ogDescription) ?>">
<meta name="twitter:image" content="<?= e($ogImage) ?>">

<!-- Performance -->
<link rel="preload" href="<?= e(css('styles.css')) ?>" as="style">
<link rel="stylesheet" href="<?= e(css('styles.css')) ?>">
<script src="<?= e(js('main.js')) ?>" defer></script>

<?= $schemaScripts ?>