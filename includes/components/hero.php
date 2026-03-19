<?php

$heroTag = $heroTag ?? null;
$heroTitle = $heroTitle ?? '';
$heroText = $heroText ?? '';

$heroPrimaryText = $heroPrimaryText ?? null;
$heroPrimaryLink = $heroPrimaryLink ?? null;

$heroSecondaryText = $heroSecondaryText ?? null;
$heroSecondaryLink = $heroSecondaryLink ?? null;

$heroAlign = $heroAlign ?? 'center';

$alignClass = $heroAlign === 'left'
    ? 'text-left items-start'
    : 'text-center items-center';

$isExternalLink = static function (?string $url): bool {
    if (!$url) {
        return false;
    }

    return preg_match('#^https?://#i', $url) === 1;
};

?>

<section class="border-b border-gray-800 py-24">

<div class="mx-auto flex max-w-5xl flex-col gap-6 px-6 <?= e($alignClass) ?>">

<?php if ($heroTag): ?>
<p class="text-sm uppercase tracking-[0.2em] text-gray-500">
<?= e($heroTag) ?>
</p>
<?php endif; ?>

<?php if ($heroTitle): ?>
<h1 class="text-4xl font-bold leading-tight text-white md:text-5xl">
<?= e($heroTitle) ?>
</h1>
<?php endif; ?>

<?php if ($heroText): ?>
<p class="max-w-2xl text-lg text-gray-400">
<?= e($heroText) ?>
</p>
<?php endif; ?>

<?php if ($heroPrimaryText || $heroSecondaryText): ?>

<div class="mt-4 flex flex-wrap gap-4">

<?php if ($heroPrimaryText && $heroPrimaryLink): ?>

<a
href="<?= e($heroPrimaryLink) ?>"
class="rounded bg-blue-600 px-6 py-3 font-medium transition-colors hover:bg-blue-500"
<?= $isExternalLink($heroPrimaryLink) ? 'target="_blank" rel="noopener noreferrer"' : '' ?>
>
<?= e($heroPrimaryText) ?>
</a>

<?php endif; ?>

<?php if ($heroSecondaryText && $heroSecondaryLink): ?>

<a
href="<?= e($heroSecondaryLink) ?>"
class="rounded border border-gray-700 px-6 py-3 transition-colors hover:bg-gray-900"
<?= $isExternalLink($heroSecondaryLink) ? 'target="_blank" rel="noopener noreferrer"' : '' ?>
>
<?= e($heroSecondaryText) ?>
</a>

<?php endif; ?>

</div>

<?php endif; ?>

</div>

</section>