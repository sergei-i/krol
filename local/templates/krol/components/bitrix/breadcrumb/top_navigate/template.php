<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * @global CMain $APPLICATION
 */

//delayed function must return a string
if (empty($arResult)) {
    return "";
}

$res1 = '<ul class="pagination';
$res2 = CMain::GetCurDir() === '/trainings/' ? ' pagination_light"' : '"';
$res3 = '>';

$res = $res1 . $res2 . $res3;

$elCount = count($arResult);

foreach ($arResult as $index => $item) {

    $link = (!empty($item['LINK']) && $index < ($elCount - 1)) ? $item['LINK'] : '#';
    $title = $item['TITLE'] ?? '';
    $res .= '<li class="pagination__item">
                <a href="' . $link . '" class="pagination__link" >' . $title . '</a>
            </li>';
}
$res .= '</ul>';

return $res;