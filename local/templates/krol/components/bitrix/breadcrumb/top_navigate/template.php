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

$res = '<ul class="pagination">';

$elCount = count($arResult);

foreach ($arResult as $index => $item) {

    $link = (!empty($item['LINK']) && $index < ($elCount - 1)) ? $item['LINK'] : '#';
    $title = $item['TITLE'] ?? '';
    $res .= '<li class="pagination__item">
                <a href="' . $link . '" class="pagination__link>" >' . $title . '</a>
            </li>';
}
$res .= '</ul>';

return $res;