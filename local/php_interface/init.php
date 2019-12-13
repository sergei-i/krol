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

$entity_data_class = GetEntityDataClass(2);
$rsData = $entity_data_class::getList(array(
    'select' => array('UF_ADDRESS', 'UF_EMAIL', 'UF_PHONE', 'UF_FACEBOOK', 'UF_VK', 'UF_OK')
));

if ($arElement = $rsData->fetch()) {
    define("CONTACTS_ADDRESS", $arElement["UF_ADDRESS"]);
    define("CONTACTS_EMAIL", $arElement["UF_EMAIL"]);
    define("CONTACTS_PHONE", $arElement["UF_PHONE"]);
    define("CONTACTS_FACEBOOK", $arElement["UF_FACEBOOK"]);
    define("CONTACTS_VK", $arElement["UF_VK"]);
    define("CONTACTS_OK", $arElement["UF_OK"]);
}

if (CONTACTS_PHONE) {
    define("HREF_PHONE_VALUE", str_replace(['+', '(', ')', '-', ' '], '', CONTACTS_PHONE));
}