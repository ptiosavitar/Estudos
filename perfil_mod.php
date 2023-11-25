<?php

    require_once("config.php");
    include("protect.php");

    function logout() {

        session_unset();
        session_destroy();
        header("Location: index.php");
        exit;

    }

    $id = $mysqli->real_escape_string($_SESSION['id']);

    $sql_code = "SELECT * FROM usuario WHERE id = '$id'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código: ". $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if($quantidade == 1) {

        while ($dados = mysqli_fetch_array($sql_query)) {
            
            $nome_user = $dados['nome'];
            $email_user = $dados['email'];
            $foto_path = $dados['path'];
            $escolaridade_edit = $dados['escolaridade'];

        }
    }

    
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="assets/logo/Logo_Estudos_Produtivos_com_fundo.png" type="image/x-icon">

        <link rel="stylesheet" href="components/css/perfil_mod_style.css">
        <link rel="stylesheet" href="components/css/fonts_style.css">

         <!--? Link Para o font-awesome-->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>Editar Perfil | Estudos Produtivos</title>

    </head>

    <body>

    

        <header id="home" class="header">

            <div class="voltar_buton">

                <a href="Estudos_Produtivos.php" class="voltar"> Voltar </a>

            </div>

            <div class="titulo">

                <h1>Editar Perfil</h1>

            </div>

            <div class="logout_button">

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

                <input type="submit" value="Logout" name="logout" class="logout">

                <?php

                    if (isset($_POST["logout"])) {
                        
                        logout();

                    }

                ?>

                </form>

            </div>

        </header><!-- /.header -->
        
        <main class="main">

            <section class="Perfil_mod" aria-label="Seção informações do usuários " style="background-image: url(assets/imgs/elemento_de_artistico.png);">

                <div class="peril_img">

                    <img src="<?php
                    
                    $id = $mysqli->real_escape_string($_SESSION['id']);

                    $sql_code = "SELECT * FROM usuario WHERE id = '$id'";
                    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código: ". $mysqli->error);
                
                    $quantidade = $sql_query->num_rows;
                
                    if($quantidade == 1) {
                
                        while ($dados = mysqli_fetch_array($sql_query)) {

                            echo  $dados['path'];
                
                        }
                    }
                    
                    ?>" alt="Foto do(a) Estudante">


                </div>

                <div class="name_estudante">

                    <h2><?php 
                    
                        $id = $mysqli->real_escape_string($_SESSION['id']);

                        $sql_code = "SELECT * FROM usuario WHERE id = '$id'";
                        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código: ". $mysqli->error);
                    
                        $quantidade = $sql_query->num_rows;
                    
                        if($quantidade == 1) {
                    
                            while ($dados = mysqli_fetch_array($sql_query)) {
                                
                                echo "<p>";
                                echo $dados['nome'];
                                echo "</p>";
                    
                            }
                        }
                    
                    ?></h2>

                </div>

                <div class="serie_estudante">

                    <p><?php 
                    
                        $id = $mysqli->real_escape_string($_SESSION['id']);

                        $sql_code = "SELECT * FROM usuario WHERE id = '$id'";
                        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código: ". $mysqli->error);
                    
                        $quantidade = $sql_query->num_rows;
                    
                        if($quantidade == 1) {
                    
                            while ($dados = mysqli_fetch_array($sql_query)) {
                                
                                echo "<p>";
                                echo $dados['escolaridade'];
                                echo "</p>";
                    
                            }
                        }

                    ?></p>

                </div>

            </section>

            <section id="form" class="section_form" aria-label="Seção formulário para edição de informações dos estudantes">

                <div class="content">

                    <span class="span"></span>
                    <span class="span"></span>
                    <span class="span"></span>
                    <span class="span"></span>
                    
                    <form enctype="multipart/form-data" action="modificar_perfil.php" method="POST">

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
        
                        <div>
        
                            <label for="img_perfil">Foto Perfil:</label>
                            <input type="file" name="perfil" id="img_perfil" class="inputs">
        
                        </div>
        
                        <div class="box-select">
        
                            <div>
        
                                <input type="checkbox" name="termos" value="Aceito" id="termos">
                                <label for="termos">Concordo e aceito os <a class="link_terms" href="#">termos de política e privacidade</a></label>
        
                            </div>
        
                        </div>
                        
                        <input type="submit" value="Editar Perfil" class="cadastrar">
                        
                    </form>

                </div>

            </section>

        </main>
        
        <a class="up-button"
            href="#home" aria-label="botão de subir para a seção inicial do site">
            
            <img src="assets/icons/arrow-up.svg" width="100%" height="100%" alt="Seta para subir a sação inicial">
        
        </a>

        <script src="components/js/perfil_mod_scrpt.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 20, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
                } // End if
            });
            });
        </script>
        
    </body>

</html>