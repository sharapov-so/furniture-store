<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Iblock;

class MyCatalogSectionComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        if (!Loader::includeModule("iblock")) {
            return;
        }

        $arSections = [];
        $sectionRes = CIBlockSection::GetList(
            ["SORT" => "ASC"],
            ["IBLOCK_ID" => $this->arParams["IBLOCK_ID"], "ACTIVE" => "Y"],
            false,
            ["ID", "NAME", "SECTION_PAGE_URL"]
        );

        while ($section = $sectionRes->GetNext()) {
            $arElements = [];
            $elementRes = CIBlockElement::GetList(
                ["SORT" => "ASC"],
                ["IBLOCK_ID" => $this->arParams["IBLOCK_ID"], "SECTION_ID" => $section["ID"], "ACTIVE" => "Y"],
                false,
                false,
                ["ID", "NAME", "DETAIL_PAGE_URL"]
            );

            while ($element = $elementRes->GetNext()) {
                $arElements[] = $element;
            }

            $arSections[] = [
                "SECTION" => $section,
                "ELEMENTS" => $arElements
            ];
        }

        $this->arResult["SECTIONS"] = $arSections;

        $this->includeComponentTemplate();
    }
}