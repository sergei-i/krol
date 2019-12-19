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

    <form class="post-filter p-blog-list__filter" name="<? echo $arResult["FILTER_NAME"] . "_form" ?>"
          action="<? echo $arResult["FORM_ACTION"] ?>" method="get">
        <div class="post-filter__inner">

            <select class="select" name="arrFilter_37_3596227959">
                <?php $id = $arResult['PROPERTY_ID_LIST'][0] ?>

                <?php if (!empty($arResult["ITEMS"])): ?>
                    <?php foreach ($arResult["ITEMS"][$id]['VALUES'] as $key => $trainerData): ?>

                        <option value="Y"
                                data-name="<?= $trainerData["CONTROL_NAME"] ?>"
                            <?php if ($trainerData["CHECKED"]): ?>
                                selected
                            <?php endif; ?>>
                            <?= $trainerData['VALUE']; ?>
                        </option>

                    <?php endforeach; ?>
                <?php endif; ?>

            </select>

        </div>

        <button type="submit"
                class="btn btn_shadow post-filter__btn"
                value="Показать"
                id="set_filter" name="set_filter"
        >
            Применить
        </button>
    </form>

<?php endif; ?>