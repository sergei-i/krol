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

    <div class="near__slider" data-flickity='{ "freeScroll": true, "prevNextButtons": false }'>
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <?php
            $trainerId = $arItem['PROPERTIES']['COACH']['VALUE'];
            ?>
            <div class="near__training">
                <div class="training <?= $arItem["PROPERTIES"]["COLOR"]["VALUE"]; ?>">
                    <div class="training__inner">
                        <span class="training__label"><?= $arItem["PROPERTIES"]["TYPE"]["VALUE"]; ?></span>
                        <a href="#" class="training__title"><?= $arItem["NAME"]; ?></a>
                        <p class="training__desc"><?= $arItem["PREVIEW_TEXT"]; ?></p>
                        <a href="#" class="training__more">Подробнее</a>

                        <div class="training__info">
                            <div class="training-date">
									<span class="training-date__item">
										<svg class="training-date__icon">
                                            <use xlink:href="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/img/icons.svg#icon-calendar"/>
                                        </svg>
										<?= $arItem["CORRECTED_DATE"]; ?>
									</span>

                                <span class="training-date__item">
										<svg class="training-date__icon">
                                            <use xlink:href="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/img/icons.svg#icon-clock"/>
                                        </svg>
										<?= $arItem["PROPERTIES"]["TIME"]["VALUE"]; ?>
									</span>
                            </div>

                            <div class="training-price">
                                <span class="training-price__text">При оплате за 14 дней до тренинга</span>
                                <span class="training-price__value">
                            <?= $arItem["PROPERTIES"]["PRICE_WITH_DISCOUNT"]["VALUE"]; ?>
                        </span>
                                <span class="training-price__sale">
                            <?= $arItem["PROPERTIES"]["PRICE_WITHOUT_DISCOUNT"]["VALUE"]; ?>
                        </span>
                            </div>
                        </div>
                    </div>

                    <div class="training__author">
                        <span class="training__avatar"
                              style="background-image: url('<?= DEFAULT_TEMPLATE_PATH; ?>/assets/pictures/blog-page.jpg');"></span>

                        <div class="training__author-info">
                            <span class="training__post">Тренер</span>
                            <span class="training__name">
                        <?= $arItem['DISPLAY_PROPERTIES']['COACH']['LINK_ELEMENT_VALUE'][$trainerId]['NAME']; ?>
                    </span>
                        </div>

                        <div>
                            <a href="#" class="btn btn_shadow" data-open="modal-request" data-id="<?= $arItem["ID"]; ?>">
                                Забронировать
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

<?php endif; ?>