<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if($APPLICATION->GetCurPage() == '/')
    require($_SERVER["DOCUMENT_ROOT"]."/local/pages/main.php");
else{
    CHTTP::SetStatus("404 Not Found");
    @define("ERROR_404","Y");
    $APPLICATION->RestartBuffer();
    die();
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>