<?php

foreach ($arResult['ITEMS'] as &$item) {

    switch ($item['PROPERTIES']['COLOR']['VALUE']) {
        case 'Зеленый':
            $item['PROPERTIES']['COLOR']['VALUE'] = 'trainer_green';
            break;
        case 'Красный':
            $item['PROPERTIES']['COLOR']['VALUE'] = 'trainer_red';
            break;
        case 'Синий':
            $item['PROPERTIES']['COLOR']['VALUE'] = 'trainer_blue';
            break;
        case 'Желтый':
            $item['PROPERTIES']['COLOR']['VALUE'] = 'trainer_yellow';
            break;
    }

    switch ($item['PROPERTIES']['RIGHT_BLOCK']['VALUE']) {
        case 'Да':
            $item['PROPERTIES']['RIGHT_BLOCK']['VALUE'] = 'trainer_right';
            break;
        case 'Нет':
            $item['PROPERTIES']['RIGHT_BLOCK']['VALUE'] = '';
            break;
    }
}

unset($item);


