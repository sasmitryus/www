<?php
session_start();
$HOST='localhost';
$USUARIO='root';
$SENHA='';
$DB='teste_carousel';

$conexao = new mysqli($HOST,$USUARIO,$SENHA,$DB);

if ($conexao->connect_error) {
    die("A conexão com o Banco de Dados Falhou: " . $conexao->connect_error);
};
?>
