<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?php
global $APPLICATION;
$url = $APPLICATION->GetCurDir();
?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <h3 class="title title_h3 b-corp__title">
        <?php if ($url === '/'): ?>
            Корпоративные клиенты:
        <?php endif; ?>
        <?php if ($url === '/trainings/'): ?>
            Нашими корпоративными клиентами уже стали:
        <?php endif; ?>
    </h3>

    <ul class="b-corp__list">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <li class="b-corp__item">
                <a href="#" class="b-corp__link">
                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                         class="b-corp__img"
                         alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                         title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"/>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>