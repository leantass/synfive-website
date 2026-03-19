<?php

$breadcrumbs = $breadcrumbs ?? [];

if (empty($breadcrumbs)) {
    return;
}

?>

<nav aria-label="Breadcrumb" class="border-b border-gray-800 py-4">

<div class="max-w-7xl mx-auto px-6 text-sm text-gray-400">

<ol class="flex flex-wrap items-center gap-2" itemscope itemtype="https://schema.org/BreadcrumbList">

<?php foreach ($breadcrumbs as $index => $crumb): ?>

<?php
$isLast = $index === array_key_last($breadcrumbs);
$position = $index + 1;
?>

<li class="flex items-center gap-2" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">

<?php if (!$isLast): ?>

<a
href="<?= e($crumb['url']) ?>"
class="hover:text-white transition-colors"
itemprop="item"
>
<span itemprop="name"><?= e($crumb['label']) ?></span>
</a>

<meta itemprop="position" content="<?= $position ?>">

<span class="text-gray-600">/</span>

<?php else: ?>

<span
class="text-white"
itemprop="item"
itemscope
itemtype="https://schema.org/Thing"
>
<meta itemprop="url" content="<?= e($crumb['url']) ?>">
<span itemprop="name"><?= e($crumb['label']) ?></span>
</span>

<meta itemprop="position" content="<?= $position ?>">

<?php endif; ?>

</li>

<?php endforeach; ?>

</ol>

</div>

</nav>