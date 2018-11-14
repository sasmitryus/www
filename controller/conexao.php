<?php
session_start();
$HOST='localhost';
$USUARIO='root';
$SENHA='usbw';
$DB='db_help_mitryus';

$conexao = new mysqli($HOST,$USUARIO,$SENHA,$DB);

if ($conexao->connect_error) {
    die("A conexão com o Banco de Dados Falhou: " . $conexao->connect_error);
};
?>
