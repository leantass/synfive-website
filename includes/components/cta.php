<?php

$ctaTag = $ctaTag ?? null;
$ctaTitle = $ctaTitle ?? '';
$ctaText = $ctaText ?? '';

$ctaPrimaryText = $ctaPrimaryText ?? null;
$ctaPrimaryLink = $ctaPrimaryLink ?? null;

$ctaSecondaryText = $ctaSecondaryText ?? null;
$ctaSecondaryLink = $ctaSecondaryLink ?? null;

?>

<section class="border-t border-gray-800 py-24">

<div class="max-w-5xl mx-auto text-center px-6">

<?php if ($ctaTag): ?>

<p class="mb-4 inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-1.5 text-xs uppercase tracking-[0.2em] text-gray-300">
<?= e($ctaTag) ?>
</p>

<?php endif; ?>

<?php if ($ctaTitle): ?>

<h2 class="text-3xl md:text-5xl font-semibold tracking-tight mb-6">
<?= e($ctaTitle) ?>
</h2>

<?php endif; ?>

<?php if ($ctaText): ?>

<p class="text-gray-400 text-lg mb-10 max-w-2xl mx-auto leading-relaxed">
<?= e($ctaText) ?>
</p>

<?php endif; ?>

<?php if ($ctaPrimaryText || $ctaSecondaryText): ?>

<div class="flex flex-wrap items-center justify-center gap-4">

<?php if ($ctaPrimaryText && $ctaPrimaryLink): ?>

<a
href="<?= e($ctaPrimaryLink) ?>"
class="inline-block rounded bg-blue-600 px-8 py-4 font-medium transition-colors hover:bg-blue-500"
>
<?= e($ctaPrimaryText) ?>
</a>

<?php endif; ?>

<?php if ($ctaSecondaryText && $ctaSecondaryLink): ?>

<a
href="<?= e($ctaSecondaryLink) ?>"
class="rounded-lg border border-white/10 px-8 py-4 transition hover:bg-white/5"
>
<?= e($ctaSecondaryText) ?>
</a>

<?php endif; ?>

</div>

<?php endif; ?>

</div>

</section>