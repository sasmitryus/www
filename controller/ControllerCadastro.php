<?php
include("../Includes/variaveis.php");
include("../Class/ClassCrud.php");

$Crud=new ClassCrud();
$Crud->insertDB(
        "tb_login",
        "?,?,?,?,?,?,?,?",
        array(
            $Id,
            $Nome,
            $Email,
            $Email_rec,
            $Senha,
            $Nivel,
            $Logado,
            $Img
        )
);

echo "Cadastro Realizado com Sucesso!";
?>