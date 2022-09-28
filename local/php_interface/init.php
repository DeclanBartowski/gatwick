<?
$arLibs = [
    $_SERVER['DOCUMENT_ROOT'].'/local/php_interface/include/defines.php',
];

foreach($arLibs as $lib){
    if(file_exists($lib)){
        require_once($lib);
    }
}