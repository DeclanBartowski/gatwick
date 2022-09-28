<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<? if (!empty($textPage)): ?></div></div><? endif; ?>
<? if (!empty($innerWrapper)): ?></div><? endif; ?>
<? if (!empty($divClass)): ?></div></div><? endif; ?>
<? if (!empty($sectionClass)): ?></div><? endif; ?>



<? if ($GLOBALS['CONTACTS']): ?>
    <? $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "contacts_map",
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
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "COMPONENT_TEMPLATE" => "contacts_social",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array(0 => "", 1 => "",),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "5",
            "IBLOCK_TYPE" => "contacts",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "Y",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "99",
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
            "PROPERTY_CODE" => array(0 => "MAP", 1 => "", 2 => "",),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "SORT",
            "SORT_BY2" => "ID",
            "SORT_ORDER1" => "ASC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N"
        )
    ); ?>
<? endif; ?>

</div>
<? if (!defined('ERROR_404') || ERROR_404 != 'Y') { ?>
    <div class="footer">
        <div class="wrapper">
            <div class="footer-clients">
                <?
                $GLOBALS['footerLogo']['!PROPERTY_PIC'] = false;
                $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "footer_logo",
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
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "COMPONENT_TEMPLATE" => "clients",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "DISPLAY_DATE" => "N",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array(0 => "", 1 => "",),
                        "FILTER_NAME" => "footerLogo",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "1",
                        "IBLOCK_TYPE" => "content",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "5",
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
                        "PROPERTY_CODE" => array(0 => "", 1 => "PIC",),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "SORT",
                        "SORT_BY2" => "NAME",
                        "SORT_ORDER1" => "ASC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N"
                    )
                ); ?>

            </div>
            <div class="footer-form">
                <div class="inner-wrapper">
                    <? $APPLICATION->IncludeComponent(
                        "sp:main.feedback",
                        "footer",
                        array(
                            "AJAX_MODE" => "Y",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "N",
                            "EMAIL_TO" => "",
                            "EVENT_MESSAGE_ID" => array(
                                0 => "11",
                            ),
                            "INFOBLOCKADD" => "Y",
                            "INFOBLOCKID" => 9,
                            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                            "REQUIRED_FIELDS" => array(
                                0 => "NONE",
                            ),
                            "USE_CAPTCHA" => "Y",
                            "COMPONENT_TEMPLATE" => "footer"
                        ),
                        false
                    ); ?>
                </div>
            </div>
            <div class="inner-wrapper">
                <div class="footer-contacts">
                    <div class="footer-social">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "footer_social",
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
                                "CACHE_TYPE" => "A",
                                "CHECK_DATES" => "Y",
                                "DETAIL_URL" => "",
                                "DISPLAY_BOTTOM_PAGER" => "N",
                                "DISPLAY_DATE" => "Y",
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "Y",
                                "DISPLAY_PREVIEW_TEXT" => "Y",
                                "DISPLAY_TOP_PAGER" => "N",
                                "FIELD_CODE" => array(0 => "", 1 => "",),
                                "FILTER_NAME" => "",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "IBLOCK_ID" => "4",
                                "IBLOCK_TYPE" => "contacts",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                "INCLUDE_SUBSECTIONS" => "Y",
                                "MESSAGE_404" => "",
                                "NEWS_COUNT" => "99",
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
                                "PROPERTY_CODE" => array(0 => "SVG_FOOTER", 1 => "SVG",),
                                "SET_BROWSER_TITLE" => "N",
                                "SET_LAST_MODIFIED" => "N",
                                "SET_META_DESCRIPTION" => "N",
                                "SET_META_KEYWORDS" => "N",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "N",
                                "SHOW_404" => "N",
                                "SORT_BY1" => "SORT",
                                "SORT_BY2" => "ID",
                                "SORT_ORDER1" => "ASC",
                                "SORT_ORDER2" => "ASC",
                                "STRICT_SECTION_CHECK" => "N"
                            )
                        ); ?>
                    </div>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "footer_email",
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
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(0 => "", 1 => "",),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "3",
                            "IBLOCK_TYPE" => "contacts",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "99",
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
                            "PROPERTY_CODE" => array(0 => "", 1 => "",),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "SORT",
                            "SORT_BY2" => "ID",
                            "SORT_ORDER1" => "ASC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N"
                        )
                    ); ?>
                </div>
                <div class="footer-menu">
                    <div class="footer-menu-nav">
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
                    <div class="footer-menu-action">
                        <a href="javascript:void(0);" class="button button__outlined" data-modal="#popup-3">
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
                                                "PATH" => SITE_TEMPLATE_PATH . "/include/footer/btn_modal_name.php"
                                            )
                                        ); ?>
                                    </span>
                        </a>
                    </div>
                </div>
                <div class="footer-info">
                    <div class="footer-info_item">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_TEMPLATE_PATH . "/include/footer/info_text_1.php"
                            )
                        ); ?>

                    </div>
                    <div class="footer-info_item">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_TEMPLATE_PATH . "/include/footer/info_text_2.php"
                            )
                        ); ?>

                    </div>
                </div>
                <div class="footer-bottombar">
                    <div class="bottombar">
                        <div class="bottombar-copyright">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH . "/include/footer/copyright.php"
                                )
                            ); ?>
                        </div>
                        <div class="bottombar-links">
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
                                    "ROOT_MENU_TYPE" => "footer",
                                    "USE_EXT" => "N"
                                )
                            ); ?>
                        </div>
                        <div class="bottombar-author">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/static/img/webmedia-logo.svg" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? } ?>
</div>
<div class="popup popup__menu js-modal" id="popup-menu">
    <div class="popup-inner">
        <div class="popup-close js-modal-close">
            <svg class="icon" width="24" height="24">
                <use xlink:href="#i-cross"></use>
            </svg>
        </div>
        <div class="popup-header"></div>
        <div class="popup-content">
            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "menu_modal",
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "COMPONENT_TEMPLATE" => "horizontal_multilevel",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "2",
                    "MENU_CACHE_GET_VARS" => "",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "main",
                    "USE_EXT" => "Y"
                )
            ); ?>
        </div>
        <div class="popup-footer">
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.detail",
                "modal_email",
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
            
            <div class="menu-action">
                <a href="#" class="button button__outlined button__large" data-modal="#popup-1">
                            <span class="button-icon">
                                <svg class="icon" width="16" height="15">
                                    <use xlink:href="#i-tel"></use>
                                </svg>
                            </span>
                    <span class="button-text"> <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_TEMPLATE_PATH . "/include/header/btn_modal_name.php"
                            )
                        ); ?></span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="popup popup__modal js-modal" id="popup-1">
    <div class="popup-inner">
        <div class="popup-close js-modal-close">
            <svg class="icon" width="15" height="15">
                <use xlink:href="#i-cross"></use>
            </svg>
        </div>

        <? $APPLICATION->IncludeComponent(
            "sp:main.feedback",
            "modal",
            array(
                "AJAX_MODE" => "Y",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "N",
                "EMAIL_TO" => "",
                "EVENT_MESSAGE_ID" => array(
                    0 => "12",
                ),
                "INFOBLOCKADD" => "Y",
                "INFOBLOCKID" => 10,
                "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                "REQUIRED_FIELDS" => array(
                    0 => "NONE",
                ),
                "USE_CAPTCHA" => "Y",
                "COMPONENT_TEMPLATE" => "modal"
            ),
            false
        ); ?>

    </div>
</div>

<div class="popup popup__modal js-modal" id="popup-2">
    <div class="popup-inner">
        <div class="popup-close js-modal-close">
            <svg class="icon" width="15" height="15">
                <use xlink:href="#i-cross"></use>
            </svg>
        </div>
        <div class="popup-success">
            <div class="popup-success-icon">
                <svg class="icon" width="30" height="20">
                    <use xlink:href="#i-check"></use>
                </svg>
            </div>
            <div class="popup-success-text">
                <div class="title title__small">
                    <p>Your application has been successfully sent!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup popup__modal js-modal" id="popup-3">
    <div class="popup-inner">
        <div class="popup-close js-modal-close">
            <svg class="icon" width="15" height="15">
                <use xlink:href="#i-cross"></use>
            </svg>
        </div>
        <form action="." method="post">
            <div class="popup-header">
                <div class="popup-title">
                    <div class="title title__small">
                        <h2>Schedule a call</h2>
                    </div>
                </div>
                <div class="popup-subtitle">
                    <p>Leave us your request and our specialists will contact you shortly</p>
                </div>
            </div>
            <div class="popup-content">
                <div class="popup-form">
                    <div>
                        <div class="textfield">
                            <input type="text" value="" placeholder="Your name" title="Your name"
                                   class="textfield-input">
                            <label class="textfield-label">Your name</label>
                        </div>
                    </div>
                    <div>
                        <div class="textfield">
                            <input type="tel" value="" placeholder="Telephone" title="Telephone"
                                   class="textfield-input">
                            <label class="textfield-label">Telephone</label>
                        </div>
                    </div>
                    <div>
                        <div class="textfield">
                            <input type="text" value="" placeholder="Message" title="Message" class="textfield-input">
                            <label class="textfield-label">Message</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup-footer">
                <div>
                    <button type="submit" class="button button__default button__wide" data-modal="#popup-2">
                        <span class="button-text">Submit</span>
                        <span class="button-icon">
                                    <svg class="icon" width="30" height="12">
                                        <use xlink:href="#i-next"></use>
                                    </svg>
                                </span>
                    </button>
                </div>
                <div class="popup-footer-note">
                    <p>By clicking on the "Submit" button you consent to the processing of personal data.</p>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="popup popup__modal js-modal" id="popup-4">
    <div class="popup-inner">
        <div class="popup-close js-modal-close">
            <svg class="icon" width="15" height="15">
                <use xlink:href="#i-cross"></use>
            </svg>
        </div>
        <form action="." method="post" enctype="multipart/form-data" novalidate>
            <div class="popup-header">
                <div class="popup-title">
                    <div class="title title__small">
                        <h2>Upload your files here</h2>
                    </div>
                </div>
                <div class="popup-subtitle">
                    <p>Throw your files out the window</p>
                </div>
            </div>
            <div class="popup-content">

                <div class="upload js-file-drop-area">

                    <div class="upload-icon">
                        <img src="static/img/add-file.svg" alt=""/>
                    </div>

                    <div class="upload-msg js-file-msg">Choose a file or drag it here</div>

                    <input class="upload-input js-file-input" type="file"/>


                </div>
            </div>
            <div class="popup-footer">
                <div>
                    <button type="submit" class="button button__default button__wide" data-modal="#popup-2">
                        <span class="button-text">Download</span>
                        <span class="button-icon">
                                    <svg class="icon" width="30" height="12">
                                        <use xlink:href="#i-next"></use>
                                    </svg>
                                </span>
                    </button>
                </div>
                <div class="popup-footer-note">
                    <p>By clicking on the "Download" button you consent to the processing of personal data.</p>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="popup-overlay js-modal-close"></div>

<script>
    /*
    async function init() {

        if (CSS && 'paintWorklet' in CSS) {
            await CSS.paintWorklet.addModule(
                "https://cdn.jsdelivr.net/gh/GoogleChromeLabs/houdini-samples/paint-worklet/ripple/paintworklet.js"
            );
        }
    }
    init();
    */

</script>
</body>
</html>
