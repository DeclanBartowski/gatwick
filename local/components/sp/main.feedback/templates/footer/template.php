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

    <div class="title title__default">
        <h2>Get in Touch with Us</h2>
    </div>


<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>
    <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">

    <div class="formbox">
        <div class="formbox-cell">
            <div class="textfield">
                <input type="text" value="" placeholder="Your name" name="NAME" title="Your name" class="textfield-input" required />
                <label class="textfield-label">Your name</label>
            </div>
        </div>
        <div class="formbox-cell">
            <div class="textfield">
                <input type="text" value="" placeholder="Your last name" name="LAST_NAME" title="Your last name" class="textfield-input" />
                <label class="textfield-label">Your last name</label>
            </div>
        </div>
        <div class="formbox-cell">
            <div class="textfield">
                <input type="tel" value="" placeholder="Telephone" name="PHONE" title="Telephone" class="textfield-input" required />
                <label class="textfield-label">Telephone</label>
            </div>
        </div>
        <div class="formbox-cell">
            <div class="textfield">
                <input type="email" value="" placeholder="Email" name="EMAIL" title="Email" class="textfield-input" required />
                <label class="textfield-label">Email</label>
            </div>
        </div>
        <div class="formbox-cell formbox-cell__large">
            <div class="textfield">
                <input type="text" value="" placeholder="Message" name="MSG" title="Message" class="textfield-input" required />
                <label class="textfield-label">Message</label>
            </div>
        </div>


        <?if($arParams["USE_CAPTCHA"] == "Y"):?>
            <div class="mf-captcha">
                <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
                <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
                <input type="text" name="captcha_word" size="30" maxlength="50" value="">
            </div>
        <?endif;?>

        <div class="formbox-cell">
            <button type="submit" name="submit"  value="<?=GetMessage("MFT_SUBMIT")?>" class="button button__outlined">
                <span class="button-text">Submit</span>
                <span class="button-icon">
                                                    <svg class="icon" width="30" height="12">
                                                        <use xlink:href="#i-next"></use>
                                                    </svg>
                                                </span>
            </button>
        </div>
    </div>



</form>
</div>
