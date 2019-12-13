<?php

foreach ($arResult['ITEMS'] as &$item) {

    switch ($item['PROPERTIES']['COLOR']['VALUE']) {
        case 'Зеленый':
            $item['PROPERTIES']['COLOR']['VALUE'] = 'training_green';
            break;
        case 'Красный':
            $item['PROPERTIES']['COLOR']['VALUE'] = 'training_red';
            break;
        case 'Синий':
            $item['PROPERTIES']['COLOR']['VALUE'] = 'training_blue';
            break;
        case 'Желтый':
            $item['PROPERTIES']['COLOR']['VALUE'] = 'training_yellow';
            break;
    }

    $item['CORRECTED_DATE'] = correctDateFormat(
        $item['PROPERTIES']['TRAINING_START_DATE']['VALUE'],
        $item['PROPERTIES']['TRAINING_END_DATE']['VALUE']
    );

}

unset($item);

function correctDateFormat($startDate, $endDate)
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
    $startYearValue = date("y", strtotime($startDate));

    $endDayValue = date("j", strtotime($endDate));
    $endMonthValue = $months[date("n", strtotime($endDate))];
    $endYearValue = date("y", strtotime($endDate));

    return (!empty($endDate))
        ? $startDayValue . '-' . $endDayValue . ' ' . $endMonthValue . ' ‘' . $endYearValue
        : $startDayValue . ' ' . $startMonthValue . ' ‘' . $startYearValue;
}
