<?php
      include('conexao.php');
      session_destroy(); // Destrói a sessão limpando todos os valores salvos
      header("Location: ../index.php"); exit; // Redireciona o visitante
  ?>