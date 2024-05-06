<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
use Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?$APPLICATION->ShowTitle();?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/favicon.png">

    <!-- стили -->
    <!-- bootstrap css -->
    <?php
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/bootstrap.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/owl.carousel.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/animate-text.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/magnific-popup.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/et-line.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/pe-icon-7-stroke.css');
    Asset::getInstance()->addCss( SITE_TEMPLATE_PATH . '/assets/css/shortcode/shortcodes.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/meanmenu.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/font-awesome.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/style.css');
    Asset::getInstance()->addCss( SITE_TEMPLATE_PATH . '/assets/css/responsive.css');?>

    <!-- JS (скрипты) -->
    <?php
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/vendor/modernizr-2.8.3.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/vendor/jquery-1.12.0.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/bootstrap.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/owl.carousel.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.counterup.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/waypoints.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.magnific-popup.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.mixitup.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.meanmenu.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.nav.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.parallax-1.1.3.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/animate-text.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/plugins.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/main.js'); ?>

    <!-- google fonts (шрифты) -->
    <?php Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">'); ?>

    <?$APPLICATION->ShowHead();?>
</head>
<body>
<div id="panel">
    <?$APPLICATION->ShowPanel();?>
</div>

<!--[if lt IE 8]>
<p class="browserupgrade">Вы используете <strong>устаревший</strong> браузер. Пожалуйста
    <a href="http://browsehappy.com/">обновите его</a>
</p>
<![endif]-->

<?php if ($APPLICATION->GetCurDir() !== '/'): ?>
    <!-- Линия с контактами -->
    <div class="header-top-area bg-color ptb-10 hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="welcome">
                        <span><i class="fa fa-envelope"></i>
                           <?$APPLICATION->IncludeComponent(
                               "bitrix:main.include",
                               ".default",
                               array(
                                   "AREA_FILE_SHOW" => "file",
                                   "PATH" => SITE_TEMPLATE_PATH."/includes/header/header_email.php",
                                   "COMPONENT_TEMPLATE" => ".default",
                                   "EDIT_TEMPLATE" => ""
                               ),
                               false
                           );?>
                        </span>
                        <span><i class="fa fa-phone"></i>
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH."/includes/header/header_phone.php",
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "EDIT_TEMPLATE" => ""
                                ),
                                false
                            );?>
                        </span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="social-icon-header text-right">
                        <!--Социальные сети-->
                        <?$APPLICATION->IncludeComponent("bitrix:news.list", "social_icons",
                                Array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                                "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                                "AJAX_MODE" => "N",	// Включить режим AJAX
                                "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                                "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                                "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                                "AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
                                "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                                "CACHE_GROUPS" => "N",	// Учитывать права доступа
                                "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                                "CACHE_TYPE" => "N",	// Тип кеширования
                                "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                                "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                                "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                                "DISPLAY_DATE" => "N",	// Выводить дату элемента
                                "DISPLAY_NAME" => "N",	// Выводить название элемента
                                "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                                "DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
                                "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                                "FIELD_CODE" => array(	// Поля
                                    0 => "NAME",
                                    1 => "PREVIEW_TEXT",
                                    2 => "PREVIEW_PICTURE",
                                    3 => "DETAIL_TEXT",
                                    4 => "",
                                ),
                                "FILTER_NAME" => "",	// Фильтр
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                                "IBLOCK_ID" => getIdBlocksByCode('social'),	// Код информационного блока
                                "IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                                "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
                                "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                                "NEWS_COUNT" => "10",	// Количество новостей на странице
                                "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                                "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                                "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                                "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                                "PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
                                "PAGER_TITLE" => "Новости",	// Название категорий
                                "PARENT_SECTION" => "",	// ID раздела
                                "PARENT_SECTION_CODE" => "header",	// Код раздела
                                "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                                "PROPERTY_CODE" => array(
                                    0 => "",
                                    1 => "icon",
                                ),
                                "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                                "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                                "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                                "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                                "SET_STATUS_404" => "N",	// Устанавливать статус 404
                                "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                                "SHOW_404" => "N",	// Показ специальной страницы
                                "SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
                                "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                                "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
                                "SORT_ORDER2" => "",	// Направление для второй сортировки новостей
                                "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                            ),
                                false
                            );?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

    <!-- Шапка сайта (меню) -->
    <header id="sticky-header" class="header-area header-wrapper <?= ($APPLICATION->GetCurDir() === '/') ? 'transparent-header' : 'white-bg'; ?>">

    <!-- Меню (для десктопа) -->
    <div class="header-middle-area full-width">
        <div class="container">
            <div class="full-width-mega-dropdown">
                <div class="row">
                    <!-- Логотип -->
                    <div class="col-md-2 col-sm-3 col-xs-8">
                        <div class="logo ptb-22">
                            <a href="index.html">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo/logo.png" alt="main logo">
                            </a>
                        </div>
                    </div>

                    <!-- Меню (основное) -->
                    <div class="col-md-10 col-sm-9 col-xs-4 text-right">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "top_menu",
                            [
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "subtop",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "2",
                                "MENU_CACHE_GET_VARS" => [],
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "N",
                                "ROOT_MENU_TYPE" => "top",
                                "USE_EXT" => "N",
                                "COMPONENT_TEMPLATE" => "top_menu"
                            ],
                            false
                        );?>

                        <!-- Поиск -->
                        <div class="header-right">
                            <div class="header-search">
                                <div class="search-wrapper">
                                    <a href="javascript:void(0);" class="search-open">
                                        <i class="pe-7s-search"></i>
                                    </a>
                                    <div class="search-inside animated bounceInUp">
                                        <i class="icon-close search-close fa fa-times"></i>
                                        <div class="search-overlay"></div>
                                        <div class="position-center-center">
                                            <div class="search">
                                                <form>
                                                    <input type="search" placeholder="Поиск по сайту">
                                                    <button type="submit"><i class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Меню (для мобилки) -->
        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "top_menu_pda",
            [
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "subtop",
                "DELAY" => "N",
                "MAX_LEVEL" => "2",
                "MENU_CACHE_GET_VARS" => [],
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "N",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "N",
                "COMPONENT_TEMPLATE" => "top_menu"
            ],
            false
        );?>
</header>

<!-- Хлебные крошки (навигация) -->
<?php if ($APPLICATION->GetCurDir() !== '/'): ?>
<div class="breadcrumb-area brand-bg ptb-100">
    <div class="container width-100">
        <div class="row z-index">
            <div class="col-md-7 col-sm-6">
                <div class="breadcrumb-title">
                    <h2 class="white-text"><?$APPLICATION->ShowTitle(false);?></h2>
                </div>
            </div>
            <div class="col-md-5 col-sm-6">
                <div class="breadcrumb-menu">
                    <ol class="breadcrumb text-right">
                        <li>
                            <a href="index.html">Главная</a>
                        </li>
                        <li class="active">
                            <a href="#">Портфолио</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>