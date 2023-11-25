<?php

require_once("config.php");
include("protect.php");

$id = $mysqli->real_escape_string($_SESSION['id']);

$verificar = "SELECT * FROM usuario WHERE id = '$id'";
$result_verificar = $mysqli->query($verificar) or die("Falha na execução do código: ". $mysqli->error);

$quant_veridificar = $result_verificar->num_rows;

if($quant_veridificar == 1) {

    while ($dados = mysqli_fetch_array($result_verificar)) {
        
        $nome_user = $dados['nome'];
        $email_user = $dados['email'];
        $foto_path = $dados['path'];
        $escolaridade_edit = $dados['escolaridade'];

    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        if (isset($foto_path)) {
            
            unlink($foto_path);

        }

        $sqlSelect = "SELECT * FROM usuario WHERE id=$id";
        $result = $mysqli->query($sqlSelect);

        if($result->num_rows > 0) {

            $name = $_POST["name"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $hashed_password = password_hash($senha, PASSWORD_DEFAULT);
            $escolaridade = $_POST["escolaridade"];
            $termos = $_POST["termos"];

            if(isset($_FILES["perfil"])) {

                $img_perfil = $_FILES["perfil"];

                if ($img_perfil['error']) {
                    
                    echo "<p
            
                    style = '
                    
                        width: 60%;
                        height: 60%;
                        border-radius: 10px;
                        border: 2px solid #ec3636;
                        background-color: #1d1d1daf;
                        font-size: 1.2rem;
                        font-weight: 400;
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                        text-align: center;
                    
                    '> Falha ao enviar o arquivo 🛑❌! </p>";

                                
                    echo '<script>
                
                    setTimeout(function() {
                        
                        window.location.href = "perfil_mod.php";

                    }, 7000); // 5000 milissegundos = 5 segundos

                    </script>';

                }elseif($img_perfil['size'] > 2097152){

                    echo "<p
            
                    style = '
                    
                        width: 60%;
                        height: 60%;
                        border-radius: 10px;
                        border: 2px solid #ec3636;
                        background-color: #1d1d1daf;
                        font-size: 1.2rem;
                        font-weight: 400;
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                        text-align: center;
                    
                    '>  Desculpe,  Arquivo muito grande aceitamos apenas arquivos de até 2MB 🛑❌! </p>";

                                
                    echo '<script>
                
                    setTimeout(function() {
                        
                        window.location.href = "perfil_mod.php";

                    }, 7000); // 5000 milissegundos = 5 segundos

                    </script>';

                }else {

                    $pasta = "components/arquivos/";
                    $nomeDaFoto = $img_perfil['name'];
                    $novoNomeDaFoto = uniqid();
                    $extensao = strtolower(pathinfo($nomeDaFoto, PATHINFO_EXTENSION));

                    if($extensao !== "jpeg" && $extensao !== "jpg" && $extensao !== "png") {

                        echo "<p
            
                        style = '
                        
                            width: 60%;
                            height: 60%;
                            border-radius: 10px;
                            border: 2px solid #ec3636;
                            background-color: #1d1d1daf;
                            font-size: 1.2rem;
                            font-weight: 400;
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            justify-content: center;
                            text-align: center;
                        
                        '>  Tipo de Arquivo não aceito 🛑❌! </p>";
        
                                    
                        echo '<script>
                    
                        setTimeout(function() {
                            
                            window.location.href = "perfil_mod.php";
        
                        }, 7000); // 5000 milissegundos = 5 segundos
        
                        </script>';

                }else {
                    
                    $path = $pasta . $novoNomeDaFoto . "." .$extensao;
                    $upload = move_uploaded_file($img_perfil["tmp_name"], $path);

                    $sqlverificar = "SELECT * FROM usuario WHERE email = ?";
                    $stmtverificar = $mysqli->prepare($sqlverificar);
                    $stmtverificar->bind_param("s", $email);
                    $stmtverificar->execute();
    
                    $result = $stmtverificar->get_result();

                    if ($result-> num_rows === 1) {

                        echo "<p
        
                        style = '
                        
                            width: 60%;
                            height: 60%;
                            border-radius: 10px;
                            border: 2px solid #ec3636;
                            background-color: #1d1d1daf;
                            font-size: 1.2rem;
                            font-weight: 400;
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            justify-content: center;
                            text-align: center;
                        
                        '>  Desculpe, ".$name." já existe um usuário cadastrado com esse email 🛑❌! </p>";
    
                                
                        echo '<script>
                    
                        setTimeout(function() {
                            
                            window.location.href = "perfil_mod.php";
        
                        }, 7000); // 5000 milissegundos = 5 segundos
        
                        </script>';

                    }else {

                        // $name = $_POST["name"];
                        // $email = $_POST["email"];
                        // $senha = $_POST["senha"];
                        // $hashed_password = password_hash($senha, PASSWORD_DEFAULT);
                        // $escolaridade = $_POST["escolaridade"];
                        // $img_perfil = $_POST["perfil"];
                        // $termos = $_POST["termos"];

                        $sqlUpdate = "UPDATE usuario SET nome='$name', email='$email', senha='$hashed_password', escolaridade='$escolaridade', path='$path', termos='$termos' 
                        WHERE id=$id";

                        $resultUpdate = $mysqli->query($sqlUpdate);

                        /*if ($resultUpdate->) {
                                
                            echo "
                            
                            <p style='
                        
                            width: 60%;
                            height: 60%;
                            border-radius: 10px;
                            border: 2px solid #45ec36;
                            background-color: #1d1d1daf;
                            font-size: 1.2rem;
                            font-weight: 400;
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            justify-content: center;
                            text-align: center;
                            '>Informações do Usuário ".$name." modificado com sucesso ✅!</p>";

                        

                        }*/

                            // Inclui uma saída JavaScript para redirecionar após um atraso de 5 segundos
                            echo '<script>
                                    
                                setTimeout(function() {
                                    
                                    window.location.href = "perfil_mod.php";

                                }, 7000); // 5000 milissegundos = 5 segundos

                            </script>';

                    }

                }
                
                $stmtverificar->close();

                }

            }

        }else {

            header("Location: peril_mod.php");

        }

        $mysqli->close();
    }

}

 
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="components/css/style_cadastrar.css">
        <link rel="shortcut icon" href="assets/logo/Logo_Estudos_Produtivos_com_fundo.png" type="image/x-icon">
        <title>Modificando Peril ... | Estudos Produtivos</title>
        
    </head>

    <body style="background-image: url('assets/imgs/background_cadastro.png');">


        
    </body>

</html>