<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Loader;
use Bitrix\Iblock;

Loader::includeModule('iblock');

// ID инфоблока с категориями
$iblockId = 4; // замените на ID вашего инфоблока

// Получаем разделы инфоблока
$sections = [];
$sectionRes = CIBlockSection::GetList(
    ['SORT' => 'ASC'],
    ['IBLOCK_ID' => $iblockId, 'ACTIVE' => 'Y'],
    false,
    ['ID', 'NAME']
);



while ($section = $sectionRes->GetNext()) {
    $sections[] = [
        $section['NAME'],
        $section['ID'],
        [],
        [],
        ""
    ];
}



// Объединяем с текущим меню
$aMenuLinks = array_merge($aMenuLinks, $sections);

?>