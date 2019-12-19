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
/** @var CBitrixComponent $component */ ?>

<?php if (!empty($arResult)): ?>

    <div class="p-schedule__sidebar">
        <form class="filter" name="<? echo $arResult["FILTER_NAME"] . "_form" ?>"
              action="<? echo $arResult["FORM_ACTION"] ?>" method="get">

            <?php if (!empty($arResult["ITEMS"])): ?>
                <?php foreach ($arResult["ITEMS"] as $key => $arItem): ?>

                    <fieldset class="filter__group">
                        <legend class="filter__title"><?= $arItem['NAME']; ?></legend>

                        <?php foreach ($arItem["VALUES"] as $val => $ar): ?>
                            <label class="checkbox filter__checkbox">
                                <input type="checkbox"
                                       class="checkbox__input"
                                       name="<? echo $ar["CONTROL_NAME"] ?>"
                                       id="<? echo "all_" . $ar["CONTROL_ID"] ?>"
                                       value="Y"
                                       onclick="smartFilter.click(this)">
                                <span class="checkbox__text"><?= $ar["VALUE"]; ?></span>
                            </label>
                        <?php endforeach; ?>

                    </fieldset>

                <?php endforeach; ?>
            <?php endif; ?>

            <div class="filter__footer">

                <button type="submit"
                        class="btn btn_shadow filter__submit"
                        value="Показать"
                        id="set_filter" name="set_filter">
                    Применить
                </button>

                <a href="?del_filter=Сбросить" class="filter__reset">Сбросить</a>

            </div>
        </form>
    </div>

<?php endif; ?>

