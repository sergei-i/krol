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

<div class="p-schedule__sidebar">
    <form class="filter"
          name="<? echo $arResult["FILTER_NAME"] . "_form" ?>" action="<? echo $arResult["FORM_ACTION"] ?>"
          method="get">

        <?php foreach ($arResult["ITEMS"] as $arItem): ?>

            <fieldset class="filter__group">
                <legend class="filter__title"><?= $arItem["NAME"] ?></legend>

                <?php if ($arItem['NAME'] === 'Тип тренинга'): ?>

                    <?php foreach ($arResult['arrProp'][1]['VALUE_LIST'] as $key => $name): ?>

                        <label class="checkbox filter__checkbox">
                            <input type="checkbox" class="checkbox__input"
                                   name="<?= $arResult['ITEMS']['PROPERTY_1']['INPUT_NAME']; ?>"
                                   value="<?= $key; ?>">
                            <span class="checkbox__text"><?= $name; ?></span>
                        </label>

                    <?php endforeach; ?>
                <?php endif; ?>

                <?php if ($arItem['NAME'] === 'Тренер'): ?>
                    <?php foreach ($arResult['ACTIVE_TRAINERS_NAMES'] as $key => $name): ?>

                        <label class="checkbox filter__checkbox">
                            <input type="checkbox" class="checkbox__input"
                                   name="<?= $arResult['ITEMS']['PROPERTY_6']['INPUT_NAME']; ?>"
                                   value="<?= $key; ?>">
                            <span class="checkbox__text"><?= $name; ?></span>
                        </label>

                    <?php endforeach; ?>
                <?php endif; ?>

            </fieldset>
        <?php endforeach; ?>

        <div class="filter__footer">
            <button type="submit" name="set_filter" class="btn btn_shadow filter__submit"
                    value="<?= GetMessage("IBLOCK_SET_FILTER")?>">
                Применить
            </button>
            <input type="hidden" name="set_filter" value="Y" />&nbsp;&nbsp;
            <a href="/schedule/" class="filter__reset">Сбросить</a>
        </div>
    </form>
</div>


