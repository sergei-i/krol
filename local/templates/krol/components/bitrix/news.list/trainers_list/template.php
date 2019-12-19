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

<div class="container container_small p-trainers__content">

    <?php if (!empty($arResult["ITEMS"])): ?>
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <div
                    class="trainer <?= $arItem['PROPERTIES']['COLOR']['VALUE']; ?> <?= $arItem['PROPERTIES']['RIGHT_BLOCK']['VALUE']; ?>">
                <?php if (!empty($arItem['PROPERTIES']['RIGHT_BLOCK']['VALUE'])): ?>
                    <div class="trainer__inner">
                        <span class="trainer__name"><?= $arItem['NAME']; ?></span>
                        <p class="trainer__content">
                            <?= $arItem['PREVIEW_TEXT']; ?>
                        </p>

                        <span class="trainer__title">Специализация</span>
                        <p class="trainer__content"><?= $arItem['PROPERTIES']['SPECIALIZATION']['VALUE']; ?></p>

                        <span class="trainer__title">Сфера практики</span>
                        <p class="trainer__content">
                            <?= $arItem['PROPERTIES']['PRACTICE_AREA']['VALUE']; ?>
                        </p>
                    </div>
                    <div class="trainer__photo">
                        <a href="#" class="btn btn_shadow">Подробнее</a>
                        <img src="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>" class="trainer__img" alt=""/>
                    </div>
                <?php else: ?>
                    <div class="trainer__photo">
                        <a href="#" class="btn btn_shadow">Подробнее</a>
                        <img src="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>" class="trainer__img" alt=""/>
                    </div>
                    <div class="trainer__inner">
                        <span class="trainer__name"><?= $arItem['NAME']; ?></span>
                        <p class="trainer__content">
                            <?= $arItem['PREVIEW_TEXT']; ?>
                        </p>

                        <span class="trainer__title">Специализация</span>
                        <p class="trainer__content"><?= $arItem['PROPERTIES']['SPECIALIZATION']['VALUE']; ?></p>

                        <span class="trainer__title">Сфера практики</span>
                        <p class="trainer__content">
                            <?= $arItem['PROPERTIES']['PRACTICE_AREA']['VALUE']; ?>
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

</div>
</div>
