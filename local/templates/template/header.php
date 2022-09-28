<?

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;

$page = $APPLICATION->GetCurPage();
$sectionClass = $APPLICATION->GetProperty('section_class');
$divClass = $APPLICATION->GetProperty('div_after_section');
$h1Class = $APPLICATION->GetProperty('h1_class');
$innerWrapper = $APPLICATION->GetProperty('inner_wrapper');
$textPage = $APPLICATION->GetProperty('text_page');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <? $APPLICATION->ShowHead(); ?>
    <? $APPLICATION->ShowPanel(); ?>
    <title><? $APPLICATION->ShowTitle(); ?></title>

    <?
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/static/css/main.css?v1");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/static/js/jquery.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/static/js/slick.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/static/js/minibar.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/static/js/smartScroll.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/static/js/demo.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/static/js/gsap.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/static/js/ScrollMagic.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/static/js/animation.gsap.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/costume.js");
    Asset::getInstance()->addString('<link href="' . SITE_TEMPLATE_PATH . '/static/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />');
    ?>
</head>
<body class="document">
<? $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => SITE_TEMPLATE_PATH . "/include/header/svg.php"
    )
); ?>
<div class="container">
    <div class="header">
        <div class="wrapper">
            <div class="topbar">
                <div class="topbar-logo">
                    <a href="<?= SITE_DIR ?>">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/static/img/gatwick-logo.png" alt=""/>
                    </a>
                </div>
                <div class="topnav">
                    <div class="topnav-menu">
                        <div class="menu-button" data-modal="#popup-menu">
                            <span class="menu-button-icon"></span>
                            <a href="#popup-menu" class="menu-button-text">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => SITE_TEMPLATE_PATH . "/include/header/menu_btn_name.php"
                                    )
                                ); ?>
                            </a>
                        </div>
                    </div>
                    <div class="topnav-list">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "main",
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(0 => "",),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "main",
                                "USE_EXT" => "N"
                            )
                        ); ?>
                    </div>
                    <div class="topnav-email">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:news.detail",
                            "header_email",
                            Array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "ADD_ELEMENT_CHAIN" => "N",
                                "ADD_SECTIONS_CHAIN" => "N",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "Y",
                                "BROWSER_TITLE" => "-",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TYPE" => "A",
                                "CHECK_DATES" => "Y",
                                "DETAIL_URL" => "",
                                "DISPLAY_BOTTOM_PAGER" => "N",
                                "DISPLAY_DATE" => "N",
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "N",
                                "DISPLAY_PREVIEW_TEXT" => "N",
                                "DISPLAY_TOP_PAGER" => "N",
                                "ELEMENT_CODE" => "",
                                "ELEMENT_ID" => "17",
                                "FIELD_CODE" => array(0=>"",1=>"",),
                                "IBLOCK_ID" => "3",
                                "IBLOCK_TYPE" => "contacts",
                                "IBLOCK_URL" => "",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                "MESSAGE_404" => "",
                                "META_DESCRIPTION" => "-",
                                "META_KEYWORDS" => "-",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_TEMPLATE" => ".default",
                                "PAGER_TITLE" => "Страница",
                                "PROPERTY_CODE" => array(0=>"",1=>"",),
                                "SET_BROWSER_TITLE" => "N",
                                "SET_CANONICAL_URL" => "N",
                                "SET_LAST_MODIFIED" => "N",
                                "SET_META_DESCRIPTION" => "N",
                                "SET_META_KEYWORDS" => "N",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "N",
                                "SHOW_404" => "N",
                                "STRICT_SECTION_CHECK" => "N",
                                "USE_PERMISSIONS" => "N",
                                "USE_SHARE" => "N"
                            )
                        );?>
                    </div>
                </div>
                <div class="topbar-action">
                    <a href="javascript:void(0);" class="button button__outlined button__wide" data-modal="#popup-1">
                                <span class="button-icon">
                                    <svg class="icon" width="16" height="15">
                                        <use xlink:href="#i-tel"></use>
                                    </svg>
                                </span>
                        <span class="button-text">
                               <? $APPLICATION->IncludeComponent(
                                   "bitrix:main.include",
                                   "",
                                   array(
                                       "AREA_FILE_SHOW" => "file",
                                       "AREA_FILE_SUFFIX" => "inc",
                                       "EDIT_TEMPLATE" => "",
                                       "PATH" => SITE_TEMPLATE_PATH . "/include/header/btn_modal_name.php"
                                   )
                               ); ?>
                        </span>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div class="main">

        <? if (!empty($sectionClass)): ?>
        <div class="<?= $sectionClass ?>">
            <? endif; ?>
            <? if (!empty($divClass)): ?>
            <div class="<?= $divClass ?>">
                <div class="wrapper">

                    <? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "nav_chain", array(
                        "PATH" => "",
                        // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                        "SITE_ID" => "s1",
                        // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                        "START_FROM" => "0",
                        // Номер пункта, начиная с которого будет построена навигационная цепочка
                    ),
                        false
                    ); ?>
                    <? endif; ?>
                    <? if (!empty($innerWrapper)): ?>
                    <div class="inner-wrapper">
                        <? endif; ?>

                        <? if (!empty($h1Class)): ?>
                            <div class="<?= $h1Class ?>">
                                <h1><?= $APPLICATION->ShowTitle(false) ?></h1>
                            </div>
                        <? endif; ?>

                        <? if (!empty($textPage)): ?>
                        <div class="article">
                            <div class="textpage">
                                <? endif; ?>
