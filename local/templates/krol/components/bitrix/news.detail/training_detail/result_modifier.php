<?php
if (!empty($arResult['PROPERTIES']['SLIDER_PHOTO']['VALUE'])) {
    foreach ($arResult['PROPERTIES']['SLIDER_PHOTO']['VALUE'] as $key => $photoId) {
        $arPhoto = CFile::GetFileArray($photoId);
        $arResult['PROPERTIES']['PHOTOS'][$key]['SRC'] = $arPhoto['SRC'];
    }
}

$trainerId = $arResult['PROPERTIES']['COACH']['VALUE'];

$arSelectTrainers = ['NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE', 'PROPERTY_SPECIALIZATION', 'PROPERTY_PRACTICE_AREA'];
$arFilterTrainers = ['IBLOCK_ID' => '6', 'ID' => $trainerId, "ACTIVE" => "Y"];
$trainersResult = CIBlockElement::GetList([], $arFilterTrainers, false, false, $arSelectTrainers);

while ($activeTrainerName = $trainersResult->fetch()) {

    $arPhoto = CFile::GetFileArray($activeTrainerName['PREVIEW_PICTURE']);

    $arResult['TRAINER']['NAME'] = $activeTrainerName['NAME'];
    $arResult['TRAINER']['TEXT'] = $activeTrainerName['PREVIEW_TEXT'];
    $arResult['TRAINER']['PICTURE'] = $arPhoto['SRC'];
    $arResult['TRAINER']['SPECIALIZATION'] = $activeTrainerName['PROPERTY_SPECIALIZATION_VALUE'];
    $arResult['TRAINER']['PRACTICE'] = $activeTrainerName['PROPERTY_PRACTICE_AREA_VALUE'];
}

$arResult['TRAINER']['CORRECTED_DATE'] = correctDateFormat(
    $arResult['PROPERTIES']['TRAINING_START_DATE']['VALUE'],
    $arResult['PROPERTIES']['TRAINING_END_DATE']['VALUE']
);

$arSelectBlog = ['NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE', 'PROPERTY_DATE'];
$arFilterBlog = ['IBLOCK_ID' => '10', 'PROPERTY_COACH' => $trainerId, "ACTIVE" => "Y"];
$blogResult = CIBlockElement::GetList([], $arFilterBlog, false, false, $arSelectBlog);

while ($blogData = $blogResult->fetch()) {

    $arPhotoData = CFile::GetFileArray($blogData['PREVIEW_PICTURE']);
    $arResult['BLOG']['NAME'][] = $blogData['NAME'];
    $arResult['BLOG']['TEXT'][] = $blogData['PREVIEW_TEXT'];
    $arResult['BLOG']['PICTURE'][] = $arPhotoData['SRC'];
    $arResult['BLOG']['DATE'][] = correctDateFormat($blogData['PROPERTY_DATE_VALUE'], null, 'blog');
}



