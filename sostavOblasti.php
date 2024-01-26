<?php

$regions = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Скопин', 'Касимов']
];

foreach ($regions as $region => $cities) {
    echo $region . ': ';
    $cityCount = count($cities);
    foreach ($cities as $index => $city) {
        echo $city;
        if ($index != $cityCount - 1) {
            echo ', ';
        }
    }
    echo '<br>';
}

