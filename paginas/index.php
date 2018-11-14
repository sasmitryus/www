<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>S.A.S Login</title>
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


    <!--CSS externo-->
    <link rel="stylesheet" href="library/estilosLogin.css">

    <!--icone da pagina (FAVICON)-->
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />

    <!-- MATERIALIZE -->
    <link rel="stylesheet" href="Frameworks/materialize/css/materialize.css">
    <script src="Frameworks/materialize/js/materialize.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

    <!--MENSSAGEM DE INFORMAÇÃO AO USUARIO-->

    <?php
    if(isset($_SESSION['nao-autenticado'])):
    ?>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    <script>
        $(document).ready(function () {


            toastr["error"]("Usuario ou Senha Invalidos!!")

            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-center",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

        });
    </script>
    <?php
  
  endif;
  unset($_SESSION['nao-autenticado']);
  ?>
    <!--FIM DA MENSAGEM     z-depth-5-->


    <div class="container">

        <form action="controller/login.php" method="POST" class="form-login">

            <!--Logo-->
            <div class="row">
                <img src="img/logo_nav.png.png" alt="" class="form-login-header">
            </div>

            <!--input email-->
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" name="email" class="validate" autofocus required>
                    <label for="icon_prefix">E-mail:</label>
                </div>
                <!--input senha-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">https</i>
                    <input id="senha" type="text" name="senha" class="validate" required>
                    <label for="icon_telephone">Senha:</label>
                </div>
            </div>


            <!--Checkbox-->


            <div class="row">
                <div class="col s8">
                    <a href="paginas/cadastroUsuario.php">Usuario Novo</a>
                </div>
                <div class="col s4">
                    <a href="paginas/esqueceuSenha.php">Esqueci a Senha</a>
                </div>
            </div>


            <!--Botao para LOGAR-->
            <button type="submit" class="btn waves-effect waves-purple" style="width: 100%;">Logar
                <i class="material-icons right">done_all</i>
            </button>


        </form>
    </div>


</body>



</html>