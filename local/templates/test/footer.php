<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

global $USER;
?>

</div>
</div>
<!-- /content -->
<!-- side -->
<div class="side">
    <?php
        $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"left", 
	array(
		"ROOT_MENU_TYPE" => "left",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "left"
	),
	false
);

    ?>


    <!-- side anonse -->
    <div class="side-block side-anonse">
        <div class="title-block"><span class="i i-title01"></span>Полезная информация!</div>
        <div class="item">
            <p>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/includes/footer_useful_info.php"
                    )
                ); ?>
            </p>
        </div>
    </div>
    <!-- /side anonse -->
    <!-- side wrap -->
    <div class="side-wrap">
        <div class="item-wrap">
            <!-- side action -->

            <?php if ($USER->IsAuthorized()): ?>
            <?$APPLICATION->IncludeComponent("bitrix:news.detail", "promotion_product", Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                "ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
                "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                "AJAX_MODE" => "N",	// Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                "BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
                "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                "CACHE_TYPE" => "N",	// Тип кеширования
                "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                "DISPLAY_DATE" => "N",	// Выводить дату элемента
                "DISPLAY_NAME" => "N",	// Выводить название элемента
                "DISPLAY_PICTURE" => "N",	// Выводить детальное изображение
                "DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
                "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                "ELEMENT_CODE" => "kukhnya-1",	// Код новости
                "ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],	// ID новости
                "FIELD_CODE" => array(	// Поля
                    0 => "NAME",
                    1 => "",
                ),
                "IBLOCK_ID" => "4",	// Код информационного блока
                "IBLOCK_TYPE" => "products",	// Тип информационного блока (используется только для проверки)
                "IBLOCK_URL" => "",	// URL страницы просмотра списка элементов (по умолчанию - из настроек инфоблока)
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                "META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
                "META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
                "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                "PAGER_TITLE" => "Страница",	// Название категорий
                "PROPERTY_CODE" => array(	// Свойства
                    0 => "PROMOTION_PRICE",
                    1 => "",
                ),
                "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                "SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
                "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                "SET_STATUS_404" => "Y",	// Устанавливать статус 404
                "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                "SHOW_404" => "N",	// Показ специальной страницы
                "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа элемента
                "USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
                "USE_SHARE" => "N",	// Отображать панель соц. закладок
            ),
                false
            );?>

            <?php endif; ?>
            <!-- /side action -->
        </div>

        <!-- footer rew slider box -->
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "slider",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
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
                "DETAIL_URL" => "/reviews/#CODE#/",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "N",
                "DISPLAY_NAME" => "N",
                "DISPLAY_PICTURE" => "N",
                "DISPLAY_PREVIEW_TEXT" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(
                    0 => "NAME",
                    1 => "PREVIEW_TEXT",
                    2 => "PREVIEW_PICTURE",
                    3 => "",
                ),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "5",
                "IBLOCK_TYPE" => "reviews",
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
                    0 => "POSITION",
                    1 => "COMPANY",
                    2 => "",
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
                "COMPONENT_TEMPLATE" => "slider"
            ),
            false
        );?>
        <!-- / footer rew slider box -->
    </div>
    <!-- /side wrap -->
</div>
<!-- /side -->
</div>
<!-- /content box -->
</div>
<!-- /page -->
<div class="empty"></div>
</div>
<!-- /wrap -->
<!-- footer -->
<footer class="footer">
    <div class="inner-wrap">
        <nav class="main-menu">
            <div class="item">
                <div class="title-block"><?echo GetMessage("FOOTER_ABOUT_STORE")?></div>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "bottom_menu",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "N",
                        "ROOT_MENU_TYPE" => "bottom",
                        "USE_EXT" => "N",
                        "COMPONENT_TEMPLATE" => "bottom_menu"
                    ),
                    false
                ); ?>
            </div>


            <div class="item">
                <?php if ($USER->IsAuthorized()): ?>
                <div class="title-block"><?echo GetMessage("FOOTER_CATALOG_PRODUCTS")?></div>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:catalog.section.list",
                        "bottom_catalog_list",
                        array(
                            "IBLOCK_TYPE" => "news",
                            "IBLOCK_ID" => "4",
                            "FILTER_NAME" => "sectionsFilter",
                            "COUNT_ELEMENTS" => "Y",
                            "TOP_DEPTH" => "2",
                            "CACHE_TYPE" => "N",
                            "CACHE_TIME" => "36000000",
                            "CACHE_GROUPS" => "Y",
                            "COMPONENT_TEMPLATE" => "bottom_catalog_list",
                            "SECTION_ID" => $_REQUEST["SECTION_ID"],
                            "SECTION_CODE" => "",
                            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                            "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
                            "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
                            "SECTION_FIELDS" => array(
                                0 => "",
                                1 => "",
                            ),
                            "SECTION_USER_FIELDS" => array(
                                0 => "",
                                1 => "",
                            ),
                            "VIEW_MODE" => "LINE",
                            "SHOW_PARENT_NAME" => "Y",
                            "SECTION_URL" => "",
                            "CACHE_FILTER" => "N",
                            "ADD_SECTIONS_CHAIN" => "Y"
                        ),
                        false
                    );
                    ?>
                <?php endif; ?>
            </div>
        </nav>
        <div class="contacts-block">
            <div class="title-block"><?echo GetMessage("FOOTER_CONTACT_INFORMATION")?></div>
            <div class="loc-block">
                <div class="address">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/footer_address.php"
                        )
                    ); ?>
                </div>
                <div class="phone">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/footer_phone.php"
                        )
                    ); ?>
                </div>
            </div>
            <? $APPLICATION->IncludeComponent("bitrix:news.list", "social_links", array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                "AJAX_MODE" => "N",    // Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                "CACHE_GROUPS" => "N",    // Учитывать права доступа
                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                "CACHE_TYPE" => "N",    // Тип кеширования
                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
                "DISPLAY_DATE" => "N",    // Выводить дату элемента
                "DISPLAY_NAME" => "N",    // Выводить название элемента
                "DISPLAY_PICTURE" => "N",    // Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                "FIELD_CODE" => array(    // Поля
                    0 => "",
                    1 => "",
                ),
                "FILTER_NAME" => "",    // Фильтр
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                "IBLOCK_ID" => "1",    // Код информационного блока
                "IBLOCK_TYPE" => "social_links",    // Тип информационного блока (используется только для проверки)
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                "NEWS_COUNT" => "4",    // Количество новостей на странице
                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                "PAGER_TITLE" => "",    // Название категорий
                "PARENT_SECTION" => "",    // ID раздела
                "PARENT_SECTION_CODE" => "",    // Код раздела
                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                "PROPERTY_CODE" => array(    // Свойства
                    0 => "URL",
                    1 => "ICON",
                    2 => "",
                ),
                "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                "SET_STATUS_404" => "N",    // Устанавливать статус 404
                "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                "SHOW_404" => "N",    // Показ специальной страницы
                "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
                "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
            ),
                false
            ); ?>
            <div class="copy-block">© 2000 - 2012 "<?= getNameSite() ?>"</div>
        </div>
    </div>
</footer>
<!-- /footer -->
</body>

</html>