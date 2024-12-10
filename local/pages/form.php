<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
?>

<form action="" id="testform">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="mail" placeholder="E-mail">
    <input type="text" name="phone" placeholder="phone">
    <button>submit</button>
</form>

<?php
if($_POST['testformvalidate'] == 'Y'){
    $APPLICATION->RestartBuffer();

    $error = [];
    if($_POST['name'] == '') $error[]= 'name';
    if($_POST['mail'] == '') $error[]= 'mail';
    if($_POST['phone'] == '') $error[]= 'phone';

    if($error != []) echo json_encode(['error'=>'не заполнены поля - '.implode(', ',$error)]);
    else echo json_encode($_POST);
    die();
}

?>