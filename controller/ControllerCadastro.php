<?php
$validate= new Classes\ClassValidate();
/*$validate->validateFields($_POST);
$validate->validateFields($Nome);
$validate->validateFields($Email);
$validate->validateFields($Senha);
var_dump($validate->getErro());*/

$validate->validateFinalCad($arrVar);
?>