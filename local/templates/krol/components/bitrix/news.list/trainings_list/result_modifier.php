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
