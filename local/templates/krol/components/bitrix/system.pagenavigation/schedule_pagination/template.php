<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true); ?>

<?php if($arResult["NavPageCount"] > 1): ?>

    <?php if ($arResult["NavPageNomer"]+1 <= $arResult["nEndPage"]): ?>

        <?php
        $plus = $arResult["NavPageNomer"] + 1;
        $url = $arResult["sUrlPathParams"] . "PAGEN_" . $arResult["NavNum"] . "=" . $plus;
        ?>

        <div class="p-schedule__load">
            <a href="<?= $url; ?>" class="btn">
                <svg class="btn__icon btn__icon_calendar">
                    <use xlink:href="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/img/icons.svg#icon-load"></use>
                </svg>
                Показать еще
            </a>
        </div>

    <?php else: ?>

        <div class="p-schedule__load">
            <a href="<?= $arResult["sUrlPath"]; ?>" class="btn">
                <svg class="btn__icon btn__icon_calendar">
                    <use xlink:href="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/img/icons.svg#icon-load"></use>
                </svg>
                Назад
            </a>
        </div>

    <?php endif; ?>

<?php endif; ?>