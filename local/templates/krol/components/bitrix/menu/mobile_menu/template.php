<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<? if (!empty($arResult)): ?>
    <ul class="mobile-nav__list">
        <?php foreach ($arResult as $arItem): ?>
            <li class="mobile-nav__item">
                <a href="<?= $arItem["LINK"] ?>" class="mobile-nav__link"><?= $arItem["TEXT"] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>