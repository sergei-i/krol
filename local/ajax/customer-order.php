<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

CModule::IncludeModule('iblock');

$el = new CIBlockElement;

$orderInformation = [
    'TRAINING_ID' => $_POST['trainer-id'],
    'PERSON_NAME' => $_POST['name'],
    'PERSON_SURNAME' => $_POST['surname'],
    'PERSON_PHONE' => $_POST['phone'],
    'PERSON_EMAIL' => $_POST['email'],
    'PERSON_METHOD' => $_POST['method'],
    'PERSON_COMMENT' => $_POST['comment'],
    'PERSON_AGREEMENT' => $_POST['agreement'] ? $_POST['agreement'] : 'Нет',
    'PERSON_SUBSCRIPTION' => $_POST['subscription'] ? $_POST['subscription'] : 'Нет'
];

$arElem = [
    "IBLOCK_SECTION_ID" => false,
    "IBLOCK_ID" => 7,
    "PROPERTY_VALUES" => $orderInformation,
    "NAME" => 'Запись на тренинг №' . $_POST['trainer-id'] . ', клиент ' . $_POST['surname'] . ' ' . $_POST['name'],
    "ACTIVE" => "Y"
];

if ($el->Add($arElem)) {
    echo json_encode(true);
}



/*$arEventFields = array(
    'PERSON_NAME' => $_POST['name'],
    'PERSON_MAIL' => $_POST['email'],
    'PERSON_PHONE' => $_POST['phone'],
    'RESPONSE_THEME' => 'Запись на тренинг №' . $_POST['trainer-id'] . ', клиент ' . $_POST['surname'] . ' ' . $_POST['name']
);

CEvent::Send("NEW_USER_ORDER", "s1", $arEventFields);*/

/*echo '<pre>';
print_r($el);
echo '<pre>';

echo '<pre>';
print_r($_POST);
echo '<pre>';*/