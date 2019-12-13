<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<? if (!empty($arResult)): ?>
    <ul class="navigation">
        <?php foreach ($arResult as $arItem): ?>
            <li class="navigation__item">
                <a href="<?= $arItem["LINK"] ?>" class="navigation__link"><?= $arItem["TEXT"] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>


