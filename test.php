<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Тестовая страница");
$APPLICATION->SetTitle("Тестовая страница");
?>Тестовая страница<br>
 <br>
<br>

<?php
$APPLICATION->IncludeComponent(
    "custom:my_component",
    "",
    array(
        "IBLOCK_ID" => 4, // ID вашего инфоблока
        "CACHE_TIME" => 3600,
    )
);
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>