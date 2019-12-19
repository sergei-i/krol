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

    <div class="p-blog-list__items">

        <?php if (!empty($arResult["ITEMS"])): ?>
            <?php if ($arResult["ITEMS"]): ?>

                <?php foreach ($arResult["ITEMS"] as $arItem): ?>

                    <div class="blog-item">
                        <a href="#" class="blog-item__img"
                           style="background-image: url('<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>');"></a>

                        <div class="blog-item__inner">
                            <div class="blog-item__content">
                                <a href="#" class="blog-item__title"><?= $arItem["NAME"]; ?></a>
                                <p class="blog-item__desc"><?= $arItem["PREVIEW_TEXT"]; ?></p>
                            </div>

                            <span class="blog-item__date"><?= $arItem["PROPERTIES"]["DATE"]["VALUE"]; ?></span>
                        </div>
                    </div>

                <?php endforeach; ?>

            <?php endif; ?>
        <?php endif; ?>
    </div>

<?php if (!empty($arResult['NAV_STRING'])): ?>
    <?= $arResult['NAV_STRING'] ?>
<?php endif; ?>