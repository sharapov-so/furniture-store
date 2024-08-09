<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

// Получаем текущий URL
$currentUrl = $APPLICATION->GetCurPage() . ($APPLICATION->GetCurParam() ? '?' . $APPLICATION->GetCurParam() : '');



// Преобразуем ссылки в ID и устанавливаем SELECTED для активного пункта меню
foreach ($arResult as $key => &$item) {



    // Используем регулярное выражение для извлечения ID из ссылки
    if (preg_match('/\/products\/(\d+)/', $item['LINK'], $matches)) {
        $item['ID'] = $matches[1];
    } else {
        // Если не удалось извлечь ID из ссылки, устанавливаем ID как NULL или любое другое значение
        $item['ID'] = null;
    }
    $item["LINK"] = "/products/section.php?SECTION=".$item["ID"];


    // Проверяем, совпадает ли текущий URL с URL пункта меню
    $item['SELECTED'] = ($currentUrl == $item['LINK']);
}




?>