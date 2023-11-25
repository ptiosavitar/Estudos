<?php

    include_once("config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        
        if(isset($_FILES["perfil"])) {

            $img_perfil = $_FILES["perfil"];

            if($img_perfil['error']){

                echo "<div style='
            
                width: 60%;
                height: 20%;
                background-color: #47333393;
                border: 2px solid #ec3636;
                border-radius: 5px;
                box-shadow: 3px 3px 6px #1d1d1d;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                padding: 0px 40px;
                margin-bottom: 20px;'> 
                
                <p 
                style='font-size: 19px;
                font-weight: 300;
                color: #ec3636;'>
    
                    Falha ao enviar o arquivo 🛑❌!
                
                </p>
                
                </div>";

                echo '<script>
        
                setTimeout(function() {
                    
                    window.location.href = "cadastro.php";

                }, 7000); // 5000 milissegundos = 3 segundos

                </script>';

                echo "<br>";

            }elseif($img_perfil['size'] > 2097152) {

                echo "<div style='
            
                width: 60%;
                height: 20%;
                background-color: #47333393;
                border: 2px solid #ec3636;
                border-radius: 5px;
                box-shadow: 3px 3px 6px #1d1d1d;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                padding: 0px 40px;
                margin-bottom: 20px;'> 
                
                <p 
                style='font-size: 19px;
                font-weight: 300;
                color: #ec3636;'>
    
                    Arquívo muito grande MAX: 2MB 🛑❌!
                
                </p>
                
                </div>";

                echo '<script>
            
                    setTimeout(function() {
                        
                        window.location.href = "cadastro.php";

                    }, 7000); // 5000 milissegundos = 3 segundos

                </script>';

            }
             
                $pasta = "components/arquivos/";
                $nomeDaFoto = $img_perfil['name'];
                $novoNomeDaFoto = uniqid();
                $extensao = strtolower(pathinfo($nomeDaFoto, PATHINFO_EXTENSION)); 

            if ($extensao !== "jpg" && $extensao !== "jpeg" && $extensao !== "png") {
                
                echo "<div style='
            
                width: 60%;
                height: 20%;
                background-color: #47333393;
                border: 2px solid #ec3636;
                border-radius: 5px;
                box-shadow: 3px 3px 6px #1d1d1d;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                padding: 0px 40px;'> 
                
                <p 
                style='font-size: 19px;
                font-weight: 300;
                color: #ec3636;'>
    
                    Tipo de Arquivo não aceito 🛑❌!
                
                </p>
                
                </div>";

                echo '<script>
            
                    setTimeout(function() {
                        
                        window.location.href = "cadastro.php";

                    }, 7000); // 5000 milissegundos = 3 segundos

                </script>';

            }else {

                $path = $pasta . $novoNomeDaFoto . "." .$extensao;


                $upload = move_uploaded_file($img_perfil["tmp_name"], $path);

                
            
                $name = $_POST["name"];
                $email = $_POST["email"];
                $senha = $_POST["senha"];
                $hashed_password = password_hash($senha, PASSWORD_DEFAULT);
                $escolaridade = $_POST["escolaridade"];
                $termos = $_POST["termos"];


                $sqlverificar = "SELECT * FROM usuario WHERE email = ?";
                $stmtverificar = $mysqli->prepare($sqlverificar);
                $stmtverificar->bind_param("s", $email);
                $stmtverificar->execute();

                $result = $stmtverificar->get_result();


                if ($result-> num_rows === 1) {
                    
                    echo "<div style='
                    
                    width: 60%;
                    height: 60%;
                    background-color: #47333393;
                    border: 2px solid #ec3636;
                    border-radius: 5px;
                    box-shadow: 3px 3px 6px #1d1d1d;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    text-align: center;
                    padding: 0px 40px;'> 
                    
                    <p 
                    style='font-size: 19px;
                    font-weight: 300;
                    color: #ec3636;'>

                        Desculpe, ".$name." já existe um usuário cadastrado com esse email 🛑❌!
                    
                    </p>
                    
                    </div>";

                    // Inclui uma saída JavaScript para redirecionar após um atraso de 5 segundos
                    echo '<script>
                
                        setTimeout(function() {
                            
                            window.location.href = "cadastro.php";

                        }, 7000); // 5000 milissegundos = 3 segundos

                    </script>';

                }else {

                    $sql = "INSERT INTO usuario(nome, email, senha, escolaridade, termos, path, nome_foto) VALUES(?, ?, ?, ?, ?, ?, ?)";
                    $stmt = $mysqli->prepare($sql);
                    $stmt->bind_param("sssssss", $name, $email, $hashed_password, $escolaridade, $termos, $path, $nomeDaFoto);

                    if ($stmt->execute()) {
                        
                        echo "
                        
                        <div style='
                    
                            width: 60%;
                            height: 60%;
                            background-color: #3447337c;
                            border: 2px solid #45ec36;
                            border-radius: 5px;
                            box-shadow: 3px 3px 6px #1d1d1d;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            text-align: center;'> 
                            
                            <p 
                                style='font-size: 19px;
                                font-weight: 300;
                                color: #45ec36;'>

                                Usuário ".$name." cadastrado com sucesso ✅!
                            </p>
                        
                        
                        </div>";

                        // Inclui uma saída JavaScript para redirecionar após um atraso de 5 segundos
                        echo '<script>
                                
                                setTimeout(function() {
                                    
                                    window.location.href = "index.php";

                                }, 7000); // 5000 milissegundos = 5 segundos

                            </script>';

                    }else {

                        echo "Erro ao cadastrar o(a) Usuário em nosso Banco de Dados ❌!" ;

                    }

                    $stmt->close();

                }

                $stmtverificar->close();

            }
        
        }

    } $mysqli->close();

?>


<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="components/css/style_cadastrar.css">
        <link rel="shortcut icon" href="assets/logo/Logo_Estudos_Produtivos_com_fundo.png" type="image/x-icon">


        <title>Cadastrar - Usuário | Estudos Produtivos</title>

    </head>

    <body style="background-image: url('assets/imgs/background_cadastro.png');">

    </body>

</html>