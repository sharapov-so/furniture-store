<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>

</div>
</div>
<!-- /content -->
<!-- side -->
<div class="side">
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
            <div class="side-block side-action">
                <img src="./img/side-action-bg.jpg" alt="" class="bg">
                <div class="photo-block">
                    <img src="./img/side-action.jpg" alt="">
                </div>
                <div class="text-block">
                    <div class="title">Акция!</div>
                    <p>Мебельная полка всего за 560 <span class="r">a</span>
                    </p>
                </div>
                <a href="" class="btn-more">подробнее</a>
            </div>
            <!-- /side action -->
        </div>

        <!-- footer rew slider box -->
        <div class="item-wrap">
            <div class="rew-footer-carousel">
                <div class="item">
                    <div class="side-block side-opin">
                        <div class="inner-block">
                            <div class="title">
                                <div class="photo-block">
                                    <img src="./img/side-opin.jpg" alt="">
                                </div>
                                <div class="name-block"><a href="">Дмитрий Иванов</a></div>
                                <div class="pos-block">Генеральный директор,"Офис+"</div>
                            </div>
                            <div class="text-block">“В магзине предоставили потрясающий выбор
                                расцветок, а также, получил большую скидку по карте постоянного...</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="side-block side-opin">
                        <div class="inner-block">
                            <div class="title">
                                <div class="photo-block">
                                    <img src="./img/side-opin.jpg" alt="">
                                </div>
                                <div class="name-block"><a href="">Дмитрий Иванов</a></div>
                                <div class="pos-block">Генеральный директор,"Офис+"</div>
                            </div>
                            <div class="text-block">“В магазине предоставили потрясающий выбор
                                расцветок, а также, получил большую скидку по карте постоянного...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                <div class="title-block"><?echo GetMessage("FOOTER_CATALOG_PRODUCTS")?></div>
            <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "bottom_catalog_list", Array(
                "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",	// Дополнительный фильтр для подсчета количества элементов в разделе
                "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
                "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                "CACHE_GROUPS" => "N",	// Учитывать права доступа
                "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                "CACHE_TYPE" => "N",	// Тип кеширования
                "COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
                "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
                "FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
                "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",	// Скрывать разделы с нулевым количеством элементов
                "IBLOCK_ID" => "4",	// Инфоблок
                "IBLOCK_TYPE" => "products",	// Тип инфоблока
                "SECTION_CODE" => "",	// Код раздела
                "SECTION_FIELDS" => array(	// Поля разделов
                    0 => "NAME",
                    1 => "",
                ),
                "SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
                "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
                "SECTION_USER_FIELDS" => array(	// Свойства разделов
                    0 => "",
                    1 => "",
                ),
                "SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
                "TOP_DEPTH" => "1",	// Максимальная отображаемая глубина разделов
                "VIEW_MODE" => "LINE",	// Вид списка подразделов
            ),
                false
            );?>
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