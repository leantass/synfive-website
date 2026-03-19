<?php

require_once LAYOUT_PATH . '/navigation-data.php';

$isMobileNav = isset($isMobileNav) ? (bool) $isMobileNav : false;
$currentSection = $currentSection ?? '';

$navClass = $isMobileNav
    ? 'flex flex-col gap-3'
    : 'flex items-center gap-6';

$linkBaseClass = 'text-sm text-slate-300 transition-colors';

?>

<nav aria-label="Navegación principal">
    <ul class="<?= e($navClass) ?>">
        <?php foreach ($NAV_MAIN as $section => $item): ?>
            <?php
            $isCurrent = is_current_section($currentSection, $section);

            $linkClass = trim($linkBaseClass . ' ' . nav_link_class($currentSection, $section));

            if (!$isCurrent) {
                $linkClass .= ' text-slate-300';
            }
            ?>
            <li>
                <a
                    href="<?= e(absolute_url($item['url'])) ?>"
                    class="<?= e($linkClass) ?>"
                    <?= nav_aria_current($currentSection, $section) ?>
                >
                    <?= e($item['label']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>