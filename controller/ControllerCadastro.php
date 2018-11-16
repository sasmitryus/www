<?php
$validate= new Classes\ClassValidate();
$validate->validateFields($_POST);
$validate->validateEmail($Email);
$validate->validadeConfSenha($Senha,$SenhaConf);
$validate->validateStrongSenha($Senha);
$validate->validateIssetEmail($Email);
var_dump($validate->validateCaptcha($gRecaptchaResponse));
var_dump($validate->getErro());

/*$validate->validateFinalCad($arrVar);*/
?>