<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

if (!Loader::includeModule("iblock"))
    return;

$aMenuLinksExt = array();
$sections = CIBlockSection::GetList(
    array("SORT" => "ASC"),
    array("IBLOCK_ID" => 4, "ACTIVE" => "Y"),
    false,
    array("ID", "NAME", "SECTION_PAGE_URL")
);
while ($section = $sections->GetNext()) {
    $items = array();
    $elements = CIBlockElement::GetList(
        array("SORT" => "ASC"),
        array("IBLOCK_ID" => 4, "SECTION_ID" => $section["ID"], "ACTIVE" => "Y"),
        false,
        false,
        array("ID", "NAME", "DETAIL_PAGE_URL")
    );
    while ($element = $elements->GetNext()) {
        $items[] = array(
            $element["NAME"],
            $element["DETAIL_PAGE_URL"],
            array(),
            array(),
            ""
        );
    }

    $aMenuLinksExt[] = array(
        $section["NAME"],
        $section["SECTION_PAGE_URL"],
        array(),
        array("IS_PARENT" => !empty($items), "DEPTH_LEVEL" => 1),
        ""
    );
    if (!empty($items)) {
        $aMenuLinksExt = array_merge($aMenuLinksExt, $items);
    }
}

return $aMenuLinksExt;
?>