<?php

// получаю активные тренинги, группируя по тренерам
$arFilterTrainings = ['IBLOCK_ID' => '3', "ACTIVE" => "Y"];

$trainingsResult = CIBlockElement::GetList([], $arFilterTrainings, ['PROPERTY_COACH'], false, []);

// получаю ID тренеров, проводящих активные тренинги
while ($activeTrainerId = $trainingsResult->fetch()) {
    $activeTrainersIds[] = $activeTrainerId['PROPERTY_COACH_VALUE'];
}

// получаю активных тренеров и фильтрую по тренерам, проводящим активные тренинги
$arSelectTrainers = ['ID', 'NAME'];
$arFilterTrainers = ['IBLOCK_ID' => '6', 'ID' => $activeTrainersIds, "ACTIVE" => "Y"];

$trainersResult = CIBlockElement::GetList([], $arFilterTrainers, false, false, $arSelectTrainers);

// записываю в $arResult
while ($activeTrainerName = $trainersResult->fetch()) {
    $arResult['ACTIVE_TRAINERS_NAMES'][$activeTrainerName['ID']] = $activeTrainerName['NAME'];
}

// в итоге получается такой результат $arResult['ACTIVE_TRAINERS_NAMES']:
// ид тренера => имя тренера
/*Array
(
[11] => Леонид Кроль
[12] => Екатерина Михайлова
[14] => Михаил Гинзбург
)*/
