<?php

use Bitrix\Main\Routing\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $routes->get('/news/', function () {
        require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
        require($_SERVER["DOCUMENT_ROOT"]."/local/pages/news.php");
        require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
    });

    $routes->get('/news/{article}/', function () {
        require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
        require($_SERVER["DOCUMENT_ROOT"]."/local/pages/news.php");
        require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
    });

    $routes->any('/form/', function () {
        require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
        require($_SERVER["DOCUMENT_ROOT"]."/local/pages/form.php");
        require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
    });

};