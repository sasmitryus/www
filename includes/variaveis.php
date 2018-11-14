<?php
/*Id*/
if(isset($_POST['Id'])){
    $Id=filter_input(INPUT_POST,'Id',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Id'])){
    $Id=filter_input(INPUT_GET,'Id',FILTER_SANITIZE_SPECIAL_CHARS);
}else{ $Id=0; }
/*Id*/

/*Nome*/
if(isset($_POST['Nome'])){
    $Nome=filter_input(INPUT_POST,'Nome',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Nome'])){
    $Nome=filter_input(INPUT_GET,'Nome',FILTER_SANITIZE_SPECIAL_CHARS);
}else{ $Nome=""; }
/*Nome*/

/*Email*/
if(isset($_POST['Email'])){
    $Email=filter_input(INPUT_POST,'Email',FILTER_SANITIZE_SPECIAL_CHARS); 
}elseif(isset($_GET['Email'])){
    $Email=filter_input(INPUT_GET,'Email',FILTER_SANITIZE_SPECIAL_CHARS);
}else{ $Email=""; }
/*Email*/

/*Email rec*/
if(isset($_POST['Email_rec'])){
    $Email_rec=filter_input(INPUT_POST,'Email_rec',FILTER_SANITIZE_SPECIAL_CHARS); 
}elseif(isset($_GET['Email_rec'])){
    $Email_rec=filter_input(INPUT_GET,'Email_rec',FILTER_SANITIZE_SPECIAL_CHARS);
}else{ $Email_rec=""; }
/*Email rec*/

/*Senha*/
if(isset($_POST['Senha'])){
    $Senha=filter_input(INPUT_POST,'Senha',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Senha'])){
    $Senha=filter_input(INPUT_GET,'Senha',FILTER_SANITIZE_SPECIAL_CHARS);
}else{ $Senha=""; }
/*Senha*/

/*Nivel*/
if(isset($_POST['Nivel'])){
    $Nivel=filter_input(INPUT_POST,'Nivel',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Nivel'])){
    $Nivel=filter_input(INPUT_GET,'Nivel',FILTER_SANITIZE_SPECIAL_CHARS);
}else{ $Nivel="1"; }
/*Nivel*/

/*Logado*/
if(isset($_POST['Logado'])){
    $Logado=filter_input(INPUT_POST,'Logado',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Logado'])){
    $Logado=filter_input(INPUT_GET,'Logado',FILTER_SANITIZE_SPECIAL_CHARS);
}else{ $Logado="0"; }
/*Logado*/

/*Img*/
if(isset($_POST['Img'])){
    $Img=filter_input(INPUT_POST,'Img',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Img'])){
    $Img=filter_input(INPUT_GET,'Img',FILTER_SANITIZE_SPECIAL_CHARS);
}else{ $Img="default.jpg"; }
/*Img*/

?>