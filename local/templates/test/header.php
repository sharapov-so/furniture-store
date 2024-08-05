<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Page\Asset;

IncludeTemplateLangFile(__FILE__);

?>

<!DOCTYPE html>
<html lang="ru">

<head>

    <title><?= getNameSite() ?> | <? $APPLICATION->ShowTitle(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8"/>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?

    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/reset.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/style.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/owl.carousel.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/owl.carousel.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/custom.css');

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/owl.carousel.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/scripts.js');

    ?>


    <? $APPLICATION->ShowHead(); ?>

    <link rel="icon" type="image/vnd.microsoft.icon" href="<?= SITE_TEMPLATE_PATH ?>/assets//img/favicon.ico">
    <link rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH ?>/assets//img/favicon.ico">
</head>

<body>

<div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
</div>

<!-- wrap -->
<div class="wrap">
    <!-- header -->
    <header class="header">
        <div class="inner-wrap">
            <div class="logo-block"><a href="/" class="logo"><?= getNameSite() ?></a>
            </div>
            <div class="main-phone-block">
                <?php
                date_default_timezone_set('Asia/Yekaterinburg');
                // Получаем текущее время сервера
                $currentHour = date('H');


                // Задаем начало и конец интервала (в 24-часовом формате)
                $startHour = 9;
                $endHour = 18;

                ?>





                <? if ($USER->IsAuthorized() && $APPLICATION->GetShowIncludeAreas()): ?>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/header_phone.php"
                        )
                    ); ?>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/header_email.php"
                        )
                    ); ?>
                <? else: ?>
                    <? if ($currentHour >= $startHour && $currentHour < $endHour): ?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . "/includes/header_phone.php"
                            )
                        ); ?>
                    <? else: ?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . "/includes/header_email.php"
                            )
                        ); ?>
                    <? endif; ?>
                <? endif; ?>


                <div class="shedule">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/header_work_time.php"
                        )
                    ); ?>
                </div>
            </div>


            <div class="actions-block">
                <form action="/" class="main-frm-search">
                    <input type="text" placeholder="Поиск">
                    <button type="submit"></button>
                </form>
                <? $APPLICATION->IncludeComponent("bitrix:system.auth.form", "auth_form", array(
                    "FORGOT_PASSWORD_URL" => "/auth/forget.php",    // Страница забытого пароля
                    "PROFILE_URL" => "/auth/personal.php",    // Страница профиля
                    "REGISTER_URL" => "/auth/registration.php",    // Страница регистрации
                    "SHOW_ERRORS" => "N",    // Показывать ошибки
                ),
                    false
                ); ?>
            </div>
        </div>
    </header>
    <!-- /header -->
    <!-- nav -->
    <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
        "CHILD_MENU_TYPE" => "subtop",	// Тип меню для остальных уровней
        "DELAY" => "N",	// Откладывать выполнение шаблона меню
        "MAX_LEVEL" => "3",	// Уровень вложенности меню
        "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
            0 => "",
        ),
        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
        "MENU_CACHE_TYPE" => "N",	// Тип кеширования
        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
        "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
        "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
    ),
        false
    );?>
    <!-- /nav -->

    <? if ($APPLICATION->GetCurPage() != '/'): ?>
        <!-- breadcrumbs -->
        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "top_navigate", Array(
            "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
            "SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
            "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
            "COMPONENT_TEMPLATE" => ".default"
        ),
            false
        );?>
        <!-- /breadcrumbs -->
    <? endif; ?>

    <!-- page -->
    <div class="page">
        <!-- content box -->
        <div class="content-box">
            <!-- content -->
            <div class="content">
                <div class="cnt">
                    <? if ($APPLICATION->GetCurPage() != '/'): ?>
                    <header>
                        <h1><? $APPLICATION->ShowTitle(); ?></h1>
                    </header>
                    <? endif; ?>