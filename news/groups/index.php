<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Новости по группам");
$APPLICATION->SetTitle("Новости по группам");
?>
<?php
$APPLICATION->IncludeComponent(
    "my:catalog.section_news",
    "",
    [
        "IBLOCK_ID" => 3, // Замените на ID вашего инфоблока
    ]
);
?>




<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>