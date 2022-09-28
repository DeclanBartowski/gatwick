<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="topnav-email-pretitle"><?=$arResult['NAME']?></div>
<div class="topnav-email-content">
    <div class="topnav-email-icon">
        <svg class="icon" width="15" height="11">
            <use xlink:href="#i-mail"></use>
        </svg>
    </div>
    <div class="topnav-email-link">
        <a href="mailto:<?=$arResult['PREVIEW_TEXT']?>"><?=$arResult['PREVIEW_TEXT']?></a>
    </div>
</div>
