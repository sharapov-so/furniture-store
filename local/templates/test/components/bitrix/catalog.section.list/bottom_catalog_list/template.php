<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$arViewModeList = $arResult['VIEW_MODE_LIST'];

echo "<pre>";
//var_dump($arResult);
echo "</pre>";

?>
    <ul>
<?php foreach ($arResult["SECTIONS"] as $arItem): ?>
    <li>
        <a href="<?= $arItem["SECTION_PAGE_URL"] ?>"><?= $arItem["NAME"] ?></a>
    </li>
<?php endforeach; ?>
    </ul>



