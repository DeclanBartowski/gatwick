<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
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
<div>
    <div class="wrapper">
        <div class="contacts-map loader">
            <div class="map" id="map"></div>
        </div>
    </div>
</div>

<div class="section section__light">

    <div class="address">

        <div class="wrapper">

            <div class="inner-wrapper">
                <div class="address-list">

            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                    array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                $points = explode(',', $arItem['PROPERTIES']['MAP']['VALUE']);
                ?>
                <div class="address-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <div>
                        <div class="address-item-caption">
                            <div class="address-item-icon">
                                <svg class="icon" width="21" height="24">
                                    <use xlink:href="#i-pin"></use>
                                </svg>
                            </div>
                            <div class="address-item-name">
                                <h3><?=$arItem['NAME']?></h3>
                            </div>
                        </div>
                        <div class="address-item-details">
                            <p><?=$arItem['PREVIEW_TEXT']?></p>
                        </div>
                    </div>
                    <div>
                        <a href="javascript:void(0);" class="button button__outlined button__contrast" onclick="newLocation(<?=floatval($points[0])?>,<?=floatval($points[1])?>);return false;" data-scroll="#map">
                            <span class="button-text">To show on the map</span>
                        </a>
                    </div>
                </div>

            <? endforeach; ?>

                </div>
            </div>

        </div>

    </div>

</div>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&callback=initMap" defer></script>


<script>
    // Initialize and add the map
    var map;

    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            zoom: 14,
            center: {
                lat: 22.283247,
                lng: 114.155301
            }
        });
    }

    window.initMap = initMap;
    function newLocation(newLat, newLng) {
        map.setCenter({
            lat: newLat,
            lng: newLng
        });
    }

</script>
