<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetPageProperty("TITLE", "Мебельный магазин | Главная");
$APPLICATION->SetTitle("Главная");
?>

<? $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    array(
        "AREA_FILE_SHOW" => "page",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => ""
    )
); ?>


    <!-- index column -->
    <div class="cnt-section index-column">
        <div class="col-wrap">
            <!-- main actions box -->
            <div class="column main-actions-box">
                <div class="title-block">
                    <h2>Новинки</h2>
                    <hr>
                </div>
                <div class="items-wrap">
                    <div class="item-wrap">
                        <div class="item">
                            <div class="title-block att">
                                Угловой диван!
                            </div>
                            <br>
                            <div class="inner-block">
                                <a href="" class="photo-block"> <img src="./img/new01.jpg" alt=""> </a>
                                <div class="text">
                                    <a href="">Угловой диван "Титаник", с большим выбором расцветок и фактур.</a> <a
                                            href="" class="btn-arr"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-wrap">
                        <div class="item">
                            <div class="title-block att">
                                Угловой диван!
                            </div>
                            <br>
                            <div class="inner-block">
                                <a href="" class="photo-block"> <img src="./img/new02.jpg" alt=""> </a>
                                <div class="text">
                                    <a href="">Угловой диван "Титаник", с большим выбором расцветок и фактур.</a> <a
                                            href="" class="btn-arr"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-wrap">
                        <div class="item">
                            <div class="title-block att">
                                Угловой диван!
                            </div>
                            <br>
                            <div class="inner-block">
                                <a href="" class="photo-block"> <img src="./img/new03.jpg" alt=""> </a>
                                <div class="text">
                                    <a href="">Угловой диван "Титаник", с большим выбором расцветок и фактур.</a> <a
                                            href="" class="btn-arr"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="" class="btn-next">Все новинки</a>
            </div>
            <!-- /main actions box --> <!-- main news box -->
            <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main_news_list", 
	array(
		"ACTIVE_DATE_FORMAT" => "j F Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "/news/?ELEMENT_ID=#ID#",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "DATE_CREATE",
			2 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "main_news_list"
	),
	false
);?>
            <!-- /main news box -->
        </div>
    </div>
    <!-- /index column --> <!-- afisha box -->
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "events_list_main",
    array(
        "ACTIVE_DATE_FORMAT" => "j F Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "N",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "/events/?ELEMENT_ID=#ID#",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "NAME",
            1 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "2",
        "IBLOCK_TYPE" => "events",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "3",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "date_event",
            1 => "place_event",
            2 => "text_event",
            3 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "events_list_main"
    ),
    false
); ?>
    <!-- /afisha box --><?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>