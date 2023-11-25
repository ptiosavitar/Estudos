<?php

    require_once("config.php");

    if (isset($_POST["email"]) && isset($_POST["senha"])) {
        
        if (strlen($_POST["email"]) == 0) {
            
            echo "<div style = 
                    'width: 40%;
                    height: 60%;
                    font-size: 18px;
                    color: #ec3636;
                    border: 2px solid #ec3636;
                    border-radius: 10px;
                    background-color: #1b1b1bd2;
                    box-shadow: 3px 3px 6px #242424;
                    display: flex;
                    align-items: center;
                    justify-content: center;'>Preencha seu e-mail!</div>";

            
            // Inclui uma saída JavaScript para redirecionar após um atraso de 5 segundos
            echo '<script>
                    
                    setTimeout(function() {
                        
                        window.location.href = "index.php";

                    }, 3000); // 5000 milissegundos = 2 segundos

                </script>';

        }elseif (strlen($_POST["senha"]) == 0) {

            echo "<div style = 
                    'width: 40%;
                    height: 60%;
                    font-size: 18px;
                    color: #ec3636;
                    border: 2px solid #ec3636;
                    border-radius: 10px;
                    background-color: #1b1b1bd2;
                    box-shadow: 3px 3px 6px #242424;
                    display: flex;
                    align-items: center;
                    justify-content: center;'>Preencha sua senha!</div>";

            
            // Inclui uma saída JavaScript para redirecionar após um atraso de 5 segundos
            echo '<script>
                    
                    setTimeout(function() {
                        
                        window.location.href = "index.php";

                    }, 3000); // 5000 milissegundos = 3 segundos

                </script>';

        }else {

            $email = $mysqli->real_escape_string($_POST["email"]);

            $sql_code = "SELECT * FROM usuario WHERE email = '$email'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código: ". $mysqli->error);

            $quantidade = $sql_query->num_rows;

            if($quantidade == 1){

                $usuario = $sql_query->fetch_assoc();
                if(isset($_SESSION)){

                    session_start();

                }

                $_SESSION["id"] = $usuario["id"];
                $_SESSION["user"] = $usuario["email"];
                $_SESSION["nome"] = $usuario["nome"];
                $_SESSION["escolaridade"] = $usuario["escolaridade"];

                header("Location: Estudos_Produtivos.php");

            }else {

                echo "<div style = 
                'width: 40%;
                height: 60%;
                font-size: 18px;
                color: #ec3636;
                border: 2px solid #ec3636;
                border-radius: 10px;
                background-color: #1b1b1bd2;
                box-shadow: 3px 3px 6px #242424;
                display: flex;
                align-items: center;
                justify-content: center;'>Falha ao logar: Email ou Senha incorretos :(</div>";

                
                // Inclui uma saída JavaScript para redirecionar após um atraso de 5 segundos
                echo '<script>
                        
                        setTimeout(function() {
                            
                            window.location.href = "index.php";

                        }, 3000); // 5000 milissegundos = 3 segundos

                    </script>';

            }

        }

    }


?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Link para style_fonts.css-->
        <link rel="stylesheet" href="components/css/fonts_style.css">

        <!--Link de favico-ico-->
        <link rel="shortcut icon" href="assets/logo/Logo_Estudos_Produtivos_com_fundo.png" type="image/x-icon">

        <link rel="stylesheet" href="components/css/style_cadastrar.css">

        <title>Logando ... | Estudos Produtivos</title>

    </head>

    <body style="background-image: url('assets/imgs/Background_login.png');">


        
    </body>

</html>