<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Каталог");
$APPLICATION->SetTitle("Каталог");
?><?php
$APPLICATION->IncludeComponent(
    "my:catalog.section",
    "",
    [
        "IBLOCK_ID" => 4, // Замените на ID вашего инфоблока
    ]
);
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>