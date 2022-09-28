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
<?$APPLICATION->IncludeComponent(
    "bitrix:catalog.section.list",
    "",
    Array(
        "ADD_SECTIONS_CHAIN" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "COUNT_ELEMENTS" => "Y",
        "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
        "FILTER_NAME" => "sectionsFilter",
        "IBLOCK_ID" => $arParams['IBLOCK_ID'],
        "IBLOCK_TYPE" => $arParams['IBLOCK_TYPE'],
        "SECTION_CODE" => "",
        "SECTION_FIELDS" => array("",""),
        "SECTION_ID" => '',
        "SECTION_URL" => "",
        "SECTION_USER_FIELDS" => array("",""),
        "SHOW_PARENT_NAME" => "Y",
        "TOP_DEPTH" => "1",
        "VIEW_MODE" => "LINE"
    ),$component
);?>


<script>

    var controller = new ScrollMagic.Controller(),

        wh = $(window).height(),
        topbarHeight = $(".topbar").height();

    $(".js-animate").each(function(i) {

        var trigger = $(this).data("trigger"),
            containerHeight = $(this).height();

        new ScrollMagic.Scene({
            triggerElement: trigger,
            duration: containerHeight,
            triggerHook: (containerHeight + topbarHeight) / wh,

        })
            .setTween(this, {
                opacity: 0
            })
            .addTo(controller);

    });


</script>