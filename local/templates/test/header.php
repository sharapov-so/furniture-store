<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Page\Asset;

?>

<!DOCTYPE html>
<html lang="ru">

<head>

    <title><? $APPLICATION->ShowTitle(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8"/>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?

    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/assets/css/reset.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/assets//css/style.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/assets//css/owl.carousel.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/assets//css/owl.carousel.css');

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/assets//js/jquery.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/assets//js/scripts.js');

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
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/includes/header_phone.php"
                    )
                );?>
                <div class="shedule">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/header_work_time.php"
                        )
                    );?>
                </div>
            </div>





            <div class="actions-block">
                <form action="/" class="main-frm-search">
                    <input type="text" placeholder="Поиск">
                    <button type="submit"></button>
                </form>
                <?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "auth_form", Array(
                    "FORGOT_PASSWORD_URL" => "/auth/forget.php",	// Страница забытого пароля
                    "PROFILE_URL" => "/auth/personal.php",	// Страница профиля
                    "REGISTER_URL" => "/auth/registration.php",	// Страница регистрации
                    "SHOW_ERRORS" => "N",	// Показывать ошибки
                ),
                    false
                );?>
            </div>
        </div>
    </header>
    <!-- /header -->
    <!-- nav -->
    <nav class="nav">
        <div class="inner-wrap">
            <div class="menu-block popup-wrap">
                <a href="" class="btn-menu btn-toggle"></a>
                <div class="menu popup-block">
                    <ul class="">
                        <li class="main-page"><a href="/">Главная</a>
                        </li>
                        <li>
                            <a href="">Компания</a>
                            <ul>
                                <li>
                                    <a href="">Пункт 1</a>
                                    <ul>
                                        <li><a href="">Пункт 1</a>
                                        </li>
                                        <li><a href="">Пункт 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="">Пункт 2</a>
                                </li>
                                <li><a href="">Пункт 3</a>
                                </li>
                                <li><a href="">Пункт 4</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="">Новости</a>
                        </li>
                        <li>
                            <a href="">Каталог</a>
                            <ul>
                                <li>
                                    <a href="">Пункт 1</a>
                                    <ul>
                                        <li><a href="">Пункт 1</a>
                                        </li>
                                        <li><a href="">Пункт 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="">Пункт 2</a>
                                </li>
                                <li><a href="">Пункт 3</a>
                                </li>
                                <li><a href="">Пункт 4</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="">Фотогалерея</a>
                        </li>
                        <li><a href="">Партнерам</a>
                        </li>
                        <li><a href="">Контакты</a>
                        </li>
                    </ul>
                    <a href="" class="btn-close"></a>
                </div>
                <div class="menu-overlay"></div>
            </div>
        </div>
    </nav>
    <!-- /nav -->
    <!-- page -->
    <div class="page">
        <!-- content box -->
        <div class="content-box">