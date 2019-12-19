<?php
foreach ($arResult["ITEMS"] as &$item) {
    $item["PROPERTIES"]["DATE"]["VALUE"] = correctDateFormat($item["PROPERTIES"]["DATE"]["VALUE"], null, 'blog');
}
unset($item);
