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
<div class="contacts-actions">
    <div>
        <div class="social">
            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                    array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>

                <div class="social-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <a href="<?= $arItem['CODE'] ?>">
                        <img src="<?= CFile::GetPath($arItem['PROPERTIES']['SVG']['VALUE']) ?>"
                             alt="<?= $arItem['NAME'] ?>">
                    </a>
                </div>
            <? endforeach; ?>
        </div>
    </div>
    <div>
        <a href="javascript:void(0);" class="button button__outlined button__contrast" data-modal="#popup-3">
                                            <span class="button-icon">
                                                <svg class="icon" width="16" height="15">
                                                    <use xlink:href="#i-tel"></use>
                                                </svg>
                                            </span>
            <span class="button-text">Schedule a call</span>
        </a>
    </div>
</div>
