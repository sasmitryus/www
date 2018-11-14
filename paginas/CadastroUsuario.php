<?php
 include("../Class/ClassCrud.php");
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>S.A.S Esqueceu a Senha</title>
    <!--É a segunda mais importante tag de SEO, ela aparece na descrição dos resultados de busca.-->
    <meta name="description" content="S.A.S Vetor Sistemas® - Sistema de Apoio as Suporte. Auxilia na tomada de decisões rapidas dos nossos tecnicos.">
    <!--É a terceira mais importante tag do SEO. Alguns especialistas em SEO afirmam que para o Google as keywords não tem relevância e
         que a relevância é tão somente para o Bing e Yahoo-->
    <meta name="keywords" content="S.A.S Vetor Sistemas® - Sistema de Apoio as Suporte">
    <!--A função da meta tag viewport está relacionada ao site responsivo. Ela demonstra ao nosso navegador que nosso layout deve se adaptar as diferentes telas-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--meta para deixar a pagina compativel com o navegador IE ou EDGE-->
    <meta http-equiv="X-UA-Compatible content=IE=edge">

    <!--Define o autor do website. São os créditos da página.-->
    <meta name="author" content="Vetor Sistemas LTDA®-Lucas Pinheiro Silva & Willian Maesato">

    <!---.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-->

    <!--CSS externo-->
    <link rel="stylesheet" href="../library/estiloPerdeuSenha.css">


    <!--CSS E JS DO BOOTSTRAP-->
    <link rel="stylesheet" href="../frameworks/bootstrap-4.1.3/css/bootstrap.min.css">
    <!--JS BOOTSTRAP-->
    <script src="../frameworks/bootstrap-4.1.3/js/bootstrap.min.js"></script>
    <!--ICONES-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--https://www.w3schools.com/icons/fontawesome_icons_webapp.asp-->

    <!--icone da pagina (FAVICON)-->
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon" />

<script>
    
</script>

</head>

<body class="container">

    <form method="POST" class="form-login" name="FormCadastro" id="FormCadastro" action="../controller/ControllerCadastro.php">

        <!--Logo-->
        <div class="row">
            <img src="../img/logo_nav.png.png" alt="" class="form-login-header">
        </div>
        <label for="">Recuperar sua Senha:</label>

        <!--Nome-->
        <div class="input-group mb-3">
           
           <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-circle-o" style="font-size:24px;color:#8181F7"></i></span>
           </div>
           <input type="text" class="form-control" id="Nome" name="Nome" placeholder="Nome Usuario" required
               autofocus>
       </div>

        <!--Email-->
        <div class="input-group mb-3">
           
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o" style="font-size:24px;color:#8181F7"></i></span>
            </div>
            <input type="email" class="form-control" id="Email" name="Email" placeholder="email@email.com" aria-label="email@email.com" required
                autofocus>
        </div>

        <!--Email recuperação-->
        <div class="input-group mb-3">
           
           <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o" style="font-size:24px;color:#8181F7"></i></span>
           </div>
           <input type="email" class="form-control" id="Email_rec" name="Email_rec" placeholder="email para recuperar senha" required
               autofocus>
       </div>

        <!--Senha-->
        <div class="input-group mb-3">
           
           <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" style="font-size:24px;color:#8181F7"></i></span>
           </div>
           <input type="password" class="form-control" id="Senha" name="Senha" placeholder="Senha" aria-label="Senha" required
               autofocus>
       </div>

        <!--Botao-->
        <div class="row col-12">
            <div class="col-5">
                <button id="recupera" name="" class="btn btn-success btn-sm ml-auto">
                    <i class="fa fa-check"style="font-size:17px;" value="Cadastrar"></i> Cadastrar
                </button>
            </div>

            <div class="col-4">
                <a id="limpa" name="limpa" class="btn btn-secondary btn-sm ml-auto" href="">   
                    <i class="fa fa-eraser"style="font-size:17px;"></i> Limpar                 
                </a>
            </div>

            <div class="col-3">
                <a id="volta" name="volta" class="btn btn-danger btn-sm ml-auto" href="../Index.php"> 
                <i class="fa fa-arrow-left"style="font-size:17px;"></i> Voltar
                   
                </a>
            </div>
        </div>
    </form>
</body>

</html>