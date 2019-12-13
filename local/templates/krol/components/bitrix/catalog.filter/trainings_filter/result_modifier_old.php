<?php

//$arSelectTrainings = ['ID', 'IBLOCK_ID', 'NAME', "PROPERTY_COACH"];
$arFilterTrainings = ['IBLOCK_ID' => '3', "ACTIVE" => "Y"];

//$trainingsResult = CIBlockElement::GetList([], $arFilterTrainings, ['PROPERTY_COACH'], false, $arSelectTrainings);
$trainingsResult = CIBlockElement::GetList([], $arFilterTrainings, ['PROPERTY_COACH'], false, []);

while ($activeTrainerId = $trainingsResult->fetch()) {
//    echo '<pre>';
//    print_r($activeTrainerId);
//    echo '<pre>';

    $activeTrainersIds[] = $activeTrainerId['PROPERTY_COACH_VALUE'];
}

//echo '<pre>';
//print_r($activeTrainersIds);
//echo '<pre>';

$arSelectTrainers = ['ID', 'NAME'];
$arFilterTrainers = ['IBLOCK_ID' => '6', 'ID' => $activeTrainersIds, "ACTIVE" => "Y"];
$trainersResult = CIBlockElement::GetList([], $arFilterTrainers, false, false, $arSelectTrainers);

while ($activeTrainerName = $trainersResult->fetch()) {
//    echo '<pre>';
//    print_r($activeTrainerName);
//    echo '<pre>';

    $arResult['ACTIVE_TRAINERS_NAMES'][$activeTrainerName['ID']] = $activeTrainerName['NAME'];
}
//echo '<pre>';
//print_r($activeTrainersNames);
//echo '<pre>';