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

<?php if (!empty($arResult["ITEMS"])): ?>

    <h2 class="title title_h2 title_blue title_upper title_center b-reviews__title"><?= $arResult["NAME"]; ?></h2>

    <div class="reviews-slider">

        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <div class="reviews-slider__item">

                <p class="reviews-slider__text">
                    <?= $arItem['PREVIEW_TEXT']; ?>
                </p>

                <div class="reviews-slider__author">
                    <span class="reviews-slider__avatar"
                          style="background-image: url('<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>');">
                    </span>

                    <div class="reviews-slider__user">
                        <span class="reviews-slider__row"><?= $arItem['PROPERTIES']['PARTICIPANT_NAME']['VALUE']; ?>,</span>
                        <span class="reviews-slider__row"><?= $arItem['PROPERTIES']['PARTICIPANT_STATUS']['VALUE']; ?></span>
                        <span class="reviews-slider__row"><?= $arItem['PROPERTIES']['TRAINING_NAME']['VALUE']; ?></span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

<?php endif; ?>
