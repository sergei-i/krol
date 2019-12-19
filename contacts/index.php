<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
    <div class="p-map__map" id="map">
        <? $APPLICATION->IncludeComponent(
            "bitrix:map.yandex.view",
            "",
            Array(
                "API_KEY" => "",
                "CONTROLS" => array(),
                "INIT_MAP_TYPE" => "MAP",
                "MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.761086999987675;s:10:\"yandex_lon\";d:37.649336999999996;s:12:\"yandex_scale\";i:14;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.649336999999996;s:3:\"LAT\";d:55.761086999987675;s:4:\"TEXT\";s:0:\"\";}}}",
                "MAP_HEIGHT" => "880",
                "MAP_ID" => "",
                "MAP_WIDTH" => "AUTO",
                "OPTIONS" => array()
            )
        ); ?>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>