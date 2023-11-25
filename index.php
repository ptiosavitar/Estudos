<?php

    require_once("config.php");
    include "login.php";


?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Link para style.css-->

        <link rel="stylesheet" href="components/css/style_login_index.css">

        <!--<style>

            form input[type="submit"] {
                
                min-width: 100%;
                padding: 0.5rem;
                border-radius: 40px;
                outline: none;
                background-color: #cccccc;
                color: #9333ff;
                text-transform: uppercase;
                font-size: 13pt;
                font-weight: bold;
                transition: 0.5s ease-in-out;
    
            }

            form input[type="submit"]:hover {

                background-color: #9333ff;
                color: #ffffff;
                cursor: pointer;

            }

        </style>-->

        <!--Link para style_fonts.css-->
        <link rel="stylesheet" href="components/css/fonts_style.css">

        <!--Link de favico-ico-->
        <link rel="shortcut icon" href="assets/logo/Logo_Estudos_Produtivos_com_fundo.png" type="image/x-icon">

        <title>Login | Estudos Produtivos </title>

    </head>

    <body>

        <div class="content">

            <span class="span"></span>
            <span class="span"></span>
            <span class="span"></span>
            <span class="span"></span>

            <h1>Faça seu Login.</h1>

            <form id="form" action="login.php" method="POST">          
                
                <div>

                    <input type="email" name="email" id="email" class="inputs required" placeholder="Digite seu melhor email..." minlength="18" maxlength="255" autocomplete="off" autofocus oninput="emailValidate()">
                    <span class="span-required">Digite um email válido.</span>

                </div>

                
                <div>

                    <input type="password" name="senha" id="password" class="inputs required" placeholder="Digite sua senha..." minlength="8" maxlength="255" autocomplete="off" oninput="mainPasswordValidate()">
                    <span class="span-required">Digite uma senha com no mínimo 8 caracteres</span>

                </div>

                <input type="submit" name="logar" value="Logar" class="logar">
                
                <div class="box">

                    <div>

                        <label>Não tem uma <a class="link_terms" href="cadastro.php">conta?</a></label>

                    </div>

                </div><!--/.box-select-->

            </form>


        </div><!-- /.content -->
        
        <!-- link para o script.js -->
        <script src="components/js/cadastro_login.js"></script>

    </body>

</html>