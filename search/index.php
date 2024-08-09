<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
    <h1>Результаты поиска</h1>
<?$APPLICATION->IncludeComponent(
    "bitrix:search.page",
    "",
    Array(
        "RESTART" => "N",
        "NO_WORD_LOGIC" => "N",
        "USE_LANGUAGE_GUESS" => "Y",
        "CHECK_DATES" => "Y",
        "arrFILTER" => Array("no"),
        "SHOW_WHERE" => "N",
        "PAGE_RESULT_COUNT" => "50",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "DISPLAY_TOP_PAGER" => "Y",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "PAGER_TITLE" => "Результаты поиска",
        "PAGER_SHOW_ALWAYS" => "Y",
        "USE_TITLE_RANK" => "N",
        "DEFAULT_SORT" => "rank",
        "FILTER_NAME" => "",
        "arrFILTER_socialnetwork_user" => Array("all"),
        "SHOW_WHEN" => "N",
        "AJAX_MODE" => "N"
    )
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>