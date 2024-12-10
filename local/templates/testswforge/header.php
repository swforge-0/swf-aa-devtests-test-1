<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <?  Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/script.js");  ?>
    <? $APPLICATION->ShowHead(); ?>
</head>
<body>
    <div id="panel">
        <? $APPLICATION->ShowPanel(); ?>
    </div>
<?=GetMessage("TWF_HI_I_AM_THE_HEADER_OF_THIS_SITE");?>
    <main class="main-content">
