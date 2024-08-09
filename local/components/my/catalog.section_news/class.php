<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Iblock;

class MyCatalogSectionComponent extends CBitrixComponent
{
    protected function getSectionsWithElements($parentId = 0)
    {
        $arSections = [];

        // Получаем разделы
        $sectionRes = CIBlockSection::GetList(
            ["SORT" => "ASC"],
            ["IBLOCK_ID" => $this->arParams["IBLOCK_ID"], "ACTIVE" => "Y", "SECTION_ID" => $parentId],
            false,
            ["ID", "NAME", "SECTION_PAGE_URL"]
        );

        while ($section = $sectionRes->GetNext()) {
            // Получаем элементы в текущем разделе
            $arElements = $this->getElementsBySectionId($section["ID"]);

            // Рекурсивно получаем подразделы и их элементы
            $arSubSections = $this->getSectionsWithElements($section["ID"]);

            $arSections[] = [
                "SECTION" => $section,
                "ELEMENTS" => $arElements,
                "SUBSECTIONS" => $arSubSections
            ];
        }

        return $arSections;
    }

    protected function getElementsBySectionId($sectionId)
    {
        $arElements = [];
        $elementRes = CIBlockElement::GetList(
            ["SORT" => "ASC"],
            ["IBLOCK_ID" => $this->arParams["IBLOCK_ID"], "SECTION_ID" => $sectionId, "ACTIVE" => "Y"],
            false,
            false,
            ["ID", "NAME", "DETAIL_PAGE_URL"]
        );

        while ($element = $elementRes->GetNext()) {
            $arElements[] = $element;
        }

        return $arElements;
    }

    public function executeComponent()
    {
        if (!Loader::includeModule("iblock")) {
            return;
        }

        // Получаем элементы, которые находятся в корне инфоблока
        $rootElements = $this->getElementsBySectionId(false);

        // Получаем разделы с их элементами
        $sectionsWithElements = $this->getSectionsWithElements();

        $this->arResult = [
            "ROOT_ELEMENTS" => $rootElements,
            "SECTIONS" => $sectionsWithElements,
        ];

        $this->includeComponentTemplate();
    }
}