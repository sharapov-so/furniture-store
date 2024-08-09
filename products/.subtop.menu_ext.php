<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Iblock;

if (!Loader::includeModule("iblock")) {
    return;
}

$menuItems = [];
$arFilter = ["IBLOCK_ID" => 4, "DEPTH_LEVEL" => 1, "ACTIVE" => "Y"];
$arSelect = ["ID", "NAME", "SECTION_PAGE_URL", "UF_*"];
$rsSections = CIBlockSection::GetList(["SORT" => "ASC"], $arFilter, false, $arSelect);

while ($arSection = $rsSections->GetNext()) {
    $menuItems[] = [
        $arSection['NAME'],
        $arSection['SECTION_PAGE_URL'],
        [],
        [
            "FROM_IBLOCK" => true,
            "IS_PARENT" => true,
            "DEPTH_LEVEL" => 1,
            "ID" => $arSection['ID'],
            "UF_MENU_SUBTEXT" => $arSection['UF_MENU_SUBTEXT'],
        ]
    ];

    $arElementFilter = ["IBLOCK_ID" => 4, "SECTION_ID" => $arSection['ID'], "ACTIVE" => "Y"];
    $arElementSelect = ["ID", "NAME", "DETAIL_PAGE_URL"];
    $rsElements = CIBlockElement::GetList(["SORT" => "ASC"], $arElementFilter, false, false, $arElementSelect);

    while ($arElement = $rsElements->GetNext()) {
        // Получение пользовательских свойств элемента
        $rsElementProps = CIBlockElement::GetProperty(4, $arElement['ID'], [], ["CODE" => "UF_MENU_SUBTEXT"]);
        if ($arElementProp = $rsElementProps->Fetch()) {
            $arElement['PROPERTY_UF_MENU_SUBTEXT'] = $arElementProp['VALUE'];
        }

        $menuItems[] = [
            $arElement['NAME'],
            $arElement['ID'],
            [],
            [
                "FROM_IBLOCK" => true,
                "IS_PARENT" => false,
                "DEPTH_LEVEL" => 2,
                "PARENT_ID" => $arSection['ID'],
                "PROPERTY_UF_MENU_SUBTEXT" => $arElement['PROPERTY_UF_MENU_SUBTEXT'],
            ]
        ];
    }
}

$aMenuLinks = array_merge($aMenuLinks, $menuItems);


?>
