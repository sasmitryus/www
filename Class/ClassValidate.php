<?php

namespace Classes;

use Models\ClassCadastro;
use ZxcvbnPhp\Zxcvbn;

class ClassValidate{

    private $erro=[];
    private $cadastro;

    public function __construct()
    {
        $this->cadastro=new ClassCadastro;
    }

    public function getErro()
    {
        return $this->erro;
    }

    public function setErro($erro)
    {
        array_push($this->erro,$erro);
    }

    #Validar se os campos desejados foram preenchidos
    public function validateFields($par)
    {
        $i=0;
        foreach ($par as $key => $value){
            if(empty($value)){
                $i++;
            }
        }
        if($i==0){
            return true;
        }else{
            $this->setErro("Preencha todos os dados!");
            return false;
        }
    }

    #Validação se o dado é um email
    public function validateEmail($par)
    {
        if(filter_var($par, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            $this->setErro("Email inválido!");
            return false;
        }
    }



    #Validar se o email existe no banco de dados
    public function validateIssetEmail($Email,$action=null)
    {
        $b=$this->cadastro->getIssetEmail($Email);

        if($action==null){
        #validar se existe este cadastrador no sistema
            if($b > 0){
                $this->setErro("Já existe um Cadastro com este Email!");
                return false;
            }else{
                return true;
            }
        #validar se existe este email para acesso
        }else{
            if($b > 0){
                return true;
            }else{
                $this->setErro("Não existe um Usuario com este Email");
                return false;
            }
        }
    }

    #Verifica se as senhas são iguas
    public function validadeConfSenha($Senha, $SenhaConf)
    {
        if($Senha == $SenhaConf){
            return true;
        }else{
            $this->setErro("Senhas nao conferem");
        }
    }

    public function validateStrongSenha($Senha, $par=null)
    {
        $zxcvbn=new Zxcvbn();
        $strength = $zxcvbn->passwordStrength($Senha);
        
        if($par==null){
            if($strength['score'] >=2 ){
                return true;
            }else{
                $this->setErro("Senha muito fraca, utilize outra senha");
            }
        }else{
            #login
        }
    }

    #Verificar se o captcha está correto
    public function validateCaptcha($captcha,$score=0.5)
    {
        $return=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRETKEY."&response={$captcha}");
        return $return;
    }

    #Validação final do cadastro
    public function validateFinalCad($arrVar)
    {
        $this->cadastro->insertCad($arrVar);
    }
}
?>