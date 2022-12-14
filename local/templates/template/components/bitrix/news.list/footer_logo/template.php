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
<div class="clients-bottom">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="clients-bottom_item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <img src="<?=CFile::GetPath($arItem['PROPERTIES']['PIC']['VALUE'])?>" alt="<?=$arItem['NAME']?>" />
        </div>
    <? endforeach; ?>
</div>
<div class="clients-bottom-more">
    <a href="<?=$arResult["LIST_PAGE_URL"]?>" class="button button__outlined button__large">
        <span class="button-text"><?=GetMessage('OTHER_CLIENT')?></span>
    </a>
</div>

