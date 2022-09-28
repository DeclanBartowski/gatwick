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
use Bitrix\Main\Localization\Loc;
$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
if(!$arResult['SECTIONS'])return true;
$lastItem = end($arResult['SECTIONS']);
?>
<?foreach ($arResult['SECTIONS'] as $key=> $arSection)
{
$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams); ?>
    <div class="section<?=$lastItem['ID'] != $arSection['ID']?' section__contrast section__sticky':''?>"<?=$key>0?sprintf(' id="scroll-trigger-%s"',$key):''?>>
        <div class="service-section<?=$lastItem['ID'] != $arSection['ID']?' js-animate':''?>"  id="<? echo $this->GetEditAreaId($arSection['ID']); ?>" style="background-image: url(<?=$arSection['PICTURE']['SRC']?>);" data-trigger="#scroll-trigger-<?=$key+1?>">
            <div class="service-section-content">
                <div class="wrapper">
                    <div class="service-section-title">
                        <div class="title title__secondary">
                            <h2><?=$arSection['NAME']?></h2>
                        </div>
                    </div>
                    <?if($arSection['DESCRIPTION']){?>
                        <div class="service-section-subtitle">
                            <p>
                               <?=$arSection['DESCRIPTION']?>
                            </p>
                        </div>
                    <?}?>
                    <div class="service-section-action">
                        <a href="<?=$arSection['SECTION_PAGE_URL']?>" class="button button__outlined button__large">
                            <span class="button-text"><?=Loc::getMessage('SERVICES_DETAIL')?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?}?>