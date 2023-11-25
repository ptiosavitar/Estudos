<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Link para style.css-->
        <link rel="stylesheet" href="components/css/style_cadastro2.css">

        <style>

            form input[type="submit"] {
                
                min-width: 100%;
                padding: 0.25rem 1rem;
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

        </style>

        <!--Link de favico-ico-->
        <link rel="shortcut icon" href="assets/logo/Logo_Estudos_Produtivos_com_fundo.png" type="image/x-icon">

        <!--Link para style_fonts.css-->
        <link rel="stylesheet" href="components/css/fonts_style.css">

        <title>Cadastro - Estudos Produtivo</title>

    </head>

    <body>

        <div class="content">

            <span class="span"></span>
            <span class="span"></span>
            <span class="span"></span>
            <span class="span"></span>

            <h1>Cadastre-se.</h1>

            <form enctype="multipart/form-data" id="form" action="cadastrar.php" method="post">

                <div class="inputs_content-name">

                    <input type="text" name="name" id="name" class="inputs required" placeholder="Digite seu primeiro nome..." minlength="3" maxlength="255" autocomplete="off" autofocus oninput="nameValidate()">
                    <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>

                </div>
                
                
                <div>

                    <input type="email" name="email" id="email" class="inputs required" placeholder="Digite seu melhor email..." minlength="18" maxlength="255" autocomplete="off" oninput="emailValidate()">
                    <span class="span-required">Digite um email válido.</span>

                </div>

                
                <div>

                    <input type="password" name="senha" id="password" class="inputs required" placeholder="Digite sua senha..." minlength="8" maxlength="255" autocomplete="off" oninput="mainPasswordValidate()">
                    <span class="span-required">Digite uma senha com no mínimo 8 caracteres</span>

                </div>

                
                <div>

                    <input type="password" name="confirmPassword" id="confrimPassword" class="inputs required" placeholder="Confirme sua senha..." minlength="8" maxlength="255" autocomplete="off" oninput="comperePassword()">
                    <span class="span-required">Senhas devem ser compatíveis</span>

                </div>

                <div>

                    <label class="text" for="escolaridade">Escolaridade</label>

                    <select name="escolaridade" class="inputs" id="escolaridade" class="imput" required>

                        <option value="1_Ensino-Médio">1º Ensino Médio</option>
                        <option value="2_Ensino-Médio">2º Ensino Médio</option>
                        <option value="3_Ensino-Médio">3º Ensino Médio</option>

                    </select>

                </div>

                <div class="foto_perfil">

                    <label for="img_perfil">Foto Perfil:</label>
                    <input type="file" name="perfil" id="img_perfil" class="inputs">

                </div>

                <div class="box-select">

                    <div>

                        <input type="checkbox" name="termos" value="Aceito" id="termos">
                        <label for="termos">Concordo e aceito os <a class="link_terms" href="#">termos de política e privacidade</a></label>

                    </div>

                </div><!--/.box-select-->
                
                <input type="submit" value="Cadastrar" class="cadastrar">
                
                <div class="box">

                    <div>

                        <label>Já tenho uma <a class="link_terms" href="index.php">conta.</a></label>

                    </div>

                </div><!--/.box-select-->

            </form>


        </div><!-- /.content -->

        <!--Link para cadastro.js-->
        <script src="components/js/cadastro.js"></script>
        
    </body>

</html>