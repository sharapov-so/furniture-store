<?php


if (!function_exists('dump')) {
    function dump($var, $die = false) {
        echo '<pre>';
        print_r($var);
        echo '</pre>';

        if ($die) {
            die();
        }
    }
}


function getNameSite() {
    $arSite = CSite::GetByID(SITE_ID)->Fetch();
    return $arSite['NAME'];
}

function convertDateToReadableFormat($date) {
    // Устанавливаем локализацию для дат
    setlocale(LC_TIME, 'ru_RU.UTF-8');

    // Преобразуем строку даты в объект DateTime
    $dateTime = DateTime::createFromFormat('d.m.Y H:i:s', $date);

    // Если дата не содержит времени, повторно пробуем преобразовать без времени
    if (!$dateTime) {
        $dateTime = DateTime::createFromFormat('d.m.Y', $date);
    }

    // Массив с названиями месяцев на русском языке
    $months = array(
        '01' => 'января',
        '02' => 'февраля',
        '03' => 'марта',
        '04' => 'апреля',
        '05' => 'мая',
        '06' => 'июня',
        '07' => 'июля',
        '08' => 'августа',
        '09' => 'сентября',
        '10' => 'октября',
        '11' => 'ноября',
        '12' => 'декабря',
    );

    // Форматируем дату вручную
    if ($dateTime) {
        $day = $dateTime->format('d');
        $month = $dateTime->format('m');
        $year = $dateTime->format('Y');
        // Убираем лидирующий ноль у дня
        $day = ltrim($day, '0');
        return $day . ' ' . $months[$month] . ' ' . $year;
    } else {
        return false; // Вернуть false, если дата не может быть преобразована
    }
}




?>