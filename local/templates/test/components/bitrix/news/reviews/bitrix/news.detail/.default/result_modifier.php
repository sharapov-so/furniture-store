<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (CModule::IncludeModule("iblock")) {
    // Получение ID инфоблока и ID элемента из $arResult
    $IBLOCK_ID = $arResult['IBLOCK_ID'];
    $ELEMENT_ID = $arResult['ID'];

    // Получение свойства с файлами
    $arFiles = CIBlockElement::GetProperty($IBLOCK_ID, $ELEMENT_ID, array("sort" => "asc"), Array("CODE" => "FILES"));

    $arFilesArray = array();
    while ($ob = $arFiles->GetNext()) {
        if ($ob['VALUE']) {
            $fileID = $ob['VALUE'];
            $filePath = CFile::GetPath($fileID);

            // Получение дополнительной информации о файле
            $rsFile = CFile::GetByID($fileID);
            if ($arFile = $rsFile->Fetch()) {
                $fileName = $arFile['ORIGINAL_NAME'];
            }

            $arFilesArray[] = array(
                'ID' => $fileID,
                'PATH' => $filePath,
                'NAME' => $fileName,
            );
        }
    }

    if (!empty($arFilesArray)) {
        $arResult['FILES'] = $arFilesArray;
    }
}
?>