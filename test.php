<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Тестовая страница");
$APPLICATION->SetTitle("Тестовая страница");
?>Тестовая страница<br>
 <br>

<?php
$APPLICATION->IncludeComponent(
    "my:catalog.section",
    "",
    [
        "IBLOCK_ID" => 4, // Замените на ID вашего инфоблока
    ]
);
?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>