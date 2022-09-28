<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?>
    <script>
        modal($('#popup-2'));
    </script>
    <?
}
?>
<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
    <div class="popup-header">
        <div class="popup-title">
            <div class="title title__small">
                <h2>Get in Touch with Us</h2>
            </div>
        </div>
        <div class="popup-subtitle">
            <p>Leave us your request and our specialists will contact you shortly</p>
        </div>
    </div>
<?=bitrix_sessid_post()?>
    <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
    <div class="popup-content">
        <div class="popup-form">
            <div>
                <div class="textfield">
                    <input type="text" value="" required name="NAME" placeholder="Your name" title="Your name" class="textfield-input">
                    <label class="textfield-label">Your name</label>
                </div>
            </div>
            <div>
                <div class="textfield">
                    <input type="tel" value="" required name="PHONE" placeholder="Telephone" title="Telephone" class="textfield-input">
                    <label class="textfield-label">Telephone</label>
                </div>
            </div>
            <div>
                <div class="textfield">
                    <input type="text" value=""  required name="MSG" placeholder="Message" title="Message" class="textfield-input">
                    <label class="textfield-label">Message</label>
                </div>
            </div>
        </div>

        <?if($arParams["USE_CAPTCHA"] == "Y"):?>
            <div class="mf-captcha">
                <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
                <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
                <input type="text" name="captcha_word" size="30" maxlength="50" value="">
            </div>
        <?endif;?>
    </div>
    <div class="popup-footer">
        <div>
            <button type="submit"  name="submit"  value="<?=GetMessage("MFT_SUBMIT")?>" class="button button__default button__wide" >
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
