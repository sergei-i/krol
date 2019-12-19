<?php
define("DEFAULT_TEMPLATE_PATH", "/local");

function GetEntityDataClass($HlBlockId)
{
    CModule::IncludeModule('highloadblock');
    $hlblock = Bitrix\Highloadblock\HighloadBlockTable::getById($HlBlockId)->fetch();
    $entity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlblock);
    $entity_data_class = $entity->getDataClass();
    return $entity_data_class;
}

// получаю данные из h-блока Контакты
$entity_data_class = GetEntityDataClass(2);
$rs_data = $entity_data_class::getList(array(
    'select' => array('UF_ADDRESS', 'UF_EMAIL', 'UF_PHONE', 'UF_FACEBOOK', 'UF_VK', 'UF_OK', 'UF_WHERE')
));

if ($arElement = $rs_data->fetch()) {
    define("CONTACTS_ADDRESS", $arElement["UF_ADDRESS"]);
    define("CONTACTS_EMAIL", $arElement["UF_EMAIL"]);
    define("CONTACTS_PHONE", $arElement["UF_PHONE"]);
    define("CONTACTS_FACEBOOK", $arElement["UF_FACEBOOK"]);
    define("CONTACTS_VK", $arElement["UF_VK"]);
    define("CONTACTS_OK", $arElement["UF_OK"]);
    define("CONTACTS_WHERE", $arElement["UF_WHERE"]);
}

if (CONTACTS_PHONE) {
    define("HREF_PHONE_VALUE", str_replace(['+', '(', ')', '-', ' '], '', CONTACTS_PHONE));
}

// получаю данные из h-блока Страница Корпоративные тренинги
$trainings_hblock = GetEntityDataClass(5);
$trainings_data = $trainings_hblock::getList(array(
    'select' => array('UF_DESC_TOP', 'UF_DESC_BOTTOM')
));

if ($arTrainingsData = $trainings_data->fetch()) {
    define("TRAININGS_DESC_TOP", $arTrainingsData["UF_DESC_TOP"]);
    define("TRAININGS_DESC_BOTTOM", $arTrainingsData["UF_DESC_BOTTOM"]);
}

// получаю данные из h-блока Главная страница
$main_hblock = GetEntityDataClass(6);
$main_data = $main_hblock::getList(array(
    'select' => array(
        'UF_MAIN_CORP_TOP',
        'UF_MAIN_CORP_BOTTOM',
        'UF_MAIN_ABOUT_DESC',
        'UF_MAIN_QTY_HOURS',
        'UF_MAIN_QTY_CLIENTS',
        'UF_MAIN_QTY_YEARS'
    )
));

if ($arMainData = $main_data->fetch()) {
    define("MAIN_CORP_TOP", $arMainData["UF_MAIN_CORP_TOP"]);
    define("MAIN_CORP_BOTTOM", $arMainData["UF_MAIN_CORP_BOTTOM"]);
    define("MAIN_ABOUT_DESC", $arMainData["UF_MAIN_ABOUT_DESC"]);
    define("MAIN_QTY_HOURS", $arMainData["UF_MAIN_QTY_HOURS"]);
    define("MAIN_QTY_CLIENTS", $arMainData["UF_MAIN_QTY_CLIENTS"]);
    define("MAIN_QTY_YEARS", $arMainData["UF_MAIN_QTY_YEARS"]);
}

// функция изменения формата даты
function correctDateFormat($startDate, $endDate = null, $type = null)
{
    $months = [
        0,
        'января',
        'февраля',
        'марта',
        'апреля',
        'мая',
        'июня',
        'июля',
        'августа',
        'сентября',
        'октября',
        'ноября',
        'декабря'
    ];

    $startDayValue = date("j", strtotime($startDate));
    $startMonthValue = $months[date("n", strtotime($startDate))];


    if ($type !== 'blog') {

        $startYearValue = date("y", strtotime($startDate));

        if ($endDate != null) {
            $endDayValue = date("j", strtotime($endDate));
            $endMonthValue = $months[date("n", strtotime($endDate))];
            $endYearValue = date("y", strtotime($endDate));

            return $startDayValue . '-' . $endDayValue . ' ' . $endMonthValue . ' ‘' . $endYearValue;
        }

        return $startDayValue . ' ' . $startMonthValue . ' ‘' . $startYearValue;
    }

    $startYearValue = date("Y", strtotime($startDate));

    return $startDayValue . ' ' . $startMonthValue . ' ' . $startYearValue;
}