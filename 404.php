<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

?>
            <div class="error-page">
                <div class="error-page-text js-runner">
                    <div class="error-page-inner js-runner-content">
                        <div class="error-page-text-item">404</div>
                        <div class="error-page-text-item">not found</div>
                    </div>
                </div>
                <div class="error-page-button">
                    <div class="wrapper">
                        <a href="<?=SITE_DIR?>" class="button button__default button__wide">
                            <span class="button-text">Go Home</span>
                        </a>
                    </div>
                </div>
            </div>
<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>