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
<div class="footer-social">
    <div>
        <div class="social">
            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                    array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

                if(!empty($arItem['PROPERTIES']['SVG_FOOTER']['VALUE'])) $arItem['PROPERTIES']['SVG']['VALUE'] = $arItem['PROPERTIES']['SVG_FOOTER']['VALUE'];

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
</div>
