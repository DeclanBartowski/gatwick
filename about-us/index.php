<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("About us");
?>

<?$APPLICATION->IncludeComponent(
    "sp:wrap",
    "about_us",
    Array(
    )
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
