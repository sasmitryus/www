<?php
 include('conexao.php'); 
  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))) {
      header("Location: ../index.php"); exit;
  }
    
    
  $email = mysqli_real_escape_string($conexao,$_POST['email']);
  $senha = mysqli_real_escape_string($conexao,$_POST['senha']); 

  // Validação do usuário/senha digitados
  $sql = "SELECT id_usuario, email, senha, nivel, img FROM tb_login WHERE email='$email' AND senha='$senha' LIMIT 1";
  $query = mysqli_query($conexao,$sql) or die(mysqli_error($conexao));;
  if (mysqli_num_rows($query) !=1) {

      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
      $_SESSION['nao-autenticado'] = true;   
       echo"<script>location.href='../index.php';</script>"; 
        exit();
  } else {
      
      // Salva os dados encontrados na variável $resultado
      $resultado = mysqli_fetch_assoc($query);
      $f = mysqli_fetch_array($query);
      // Se a sessão não existir, inicia uma
      if (!isset($_SESSION)) session_start();
      
      // Salva os dados encontrados na sessão
      $_SESSION['id_usuario'] = $resultado['id_usuario'];
      $_SESSION['nome_usuario'] = $resultado['nome_usuario'];
      $_SESSION['email'] = $resultado['email'];
      $_SESSION['nivel'] = $resultado['nivel'];
      $_SESSION['img'] = $resultado['img'];


      //verificar o nivel do usuario na tabela para verificar onde ira logar
      switch($_SESSION['nivel']){
        case 1:
            header("Location: ../paginausuario.php"); exit();
        break;

        case 2:
        $update = " UPDATE tb_login SET logado='1' WHERE id_usuario='{$_SESSION['id_usuario']}'";
        if (mysqli_query($conexao, $update)) {
            $sql = "SELECT logado FROM tb_login WHERE id_usuario='{$_SESSION['id_usuario']}' LIMIT 1";
            $_SESSION['logado'] = $resultado['logado'];
            $query = mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
            if(mysqli_query($conexao,$sql)){
                header("Location: ../dashboard.php");
            }
        } else {
           echo "Error updating record: " . mysqli_error($conexao);
        }
        mysqli_close($conexao);
            
        break;

        default:
              echo"Contato com o suporte Tecnico!";
        break;
      }
    


  }
  ?>