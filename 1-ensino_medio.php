<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Link styles.css-->
        <link rel="stylesheet" href="components/css/styles_ensinos.css">

        <!--? Link Para o favicon-ico-->
        <link rel="shortcut icon" href="assets/logo/Logo_Estudos_Produtivos_com_fundo.png" type="image/x-icon">


        <!--? Link Para o Style_fonts.css-->
        <link rel="stylesheet" href="components/css/fonts_style.css">

        <!-- ~ Fonte Awesome: Para icones -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>1º Ensino Médio | Estudos Produtivos </title>

    </head>

    <body>

        <!-- HEADER -->

        <header id="home"  aria-label="seção header da pagina 1º Ensino Médio">

            <div class="logo">

                <img src="assets/Logo/Logo_Estudos_Produtive.png" alt="Logo Decritiva Estudos Produtivos">

            </div>

            <nav class="menu">

                <ul aria-label="Navegação Primária" class="nav-primaria">

                    <li><a href="Estudos_Produtivos.php">Home</a></li>
                    <li><a href="#appcomunity">App Comunidade</a></li>
                    <li><a href="#diciplinas">Diciplinas</a></li>

                </ul>
                
                <i class="fa-solid fa-bars"></i>

            </nav>


        </header>

        <div class="container" style="background-image: url('assets/imgs/Background_login.png');">

            <section class="banner" aria-label="seção da página boas vinada: Você está no início de uma grande jornada, hora de conhecer novos conteúdos e vivênciar os momentos incríveis que o Ensino Médo, irá te proporcionar!">

                <div class="banner-text">

                    <h1 class="digitando">   1º Ensino Médio</h1>

                    <p>Você está no início de uma grande jornada, hora de conhecer novos conteúdos e <br> vivênciar os momentos incríveis que o Ensino Médo, irá te proporcionar!</p>
                    
                    <a href="#diciplinas" class="btn">Iniciar Jornada</a>

                </div>

            </section>

        </div>

        <!-- END - HEADER -->

        <!-- APRESENTAÇÃO DO APP USADO PARA AS COMNIDADES -->

        <main>

            <section class="grid" id="appcomunity">

                    <div class="container">
    
                        <div class="como_usar">
    
                            <h3>App Comunidade</h3>
    
                            <p>
    
                              Vamos usar o DISCORD <i class="fa-brands fa-discord"></i> para conectar o estudantes <br>
                              na comunidade haverá canal fechado para estantes, com as matérias expecíficas para que abaram chamadas como preferirem, total liberdade!
                            
                            </p>
    
                            <a href="https://discord.com/"  target="_blank" class="btn"> Saiba Mais <i class="fa-brands fa-discord"></i></a>
    
                        </div>
    
                    </div><!-- /.container -->    
                <!-- END APRESENTAÇÃO DO APP USADO PARA AS COMNIDADES -->
    
                <!-- SEÇÃO DE COMO USAR ?-->
                   
                    <div class="container twoo">
    
                        <div class="como_usar">
    
                            <h3>Como Usar Celular?</h3>
    
                            <p>
    
                               click no botão e assista o vídeo, que descrever passo a passo como usar <br>
                               e configurar a ferramenta no celular, para se conectar com os outros estudantes!
                            
                            </p>
                            
                            <a href="https://www.youtube.com/embed/yoD7nEzKuPY?si=45lztkVbbZm5grPI" target="_blank" class="btn"> Discord no Celular <i class="fa-brands fa-discord"></i></a>
                        
                        </div>
                    
                    </div><!-- /.container -->
                   
                    <div class="container">
    
                        <div class="como_usar">
    
                            <h3>Como Usar PC/Notebook ?</h3>
    
                            <p>
    
                               clickno batão e assiata um vídeo, que descrever passo a passo como usar <br>
                               e configurar a ferramenta no PC, para se conectar com os outros estudantes!
                            
                            </p>
                            
                            <a href="https://www.youtube.com/embed/KOP2ORLaMFo?si=5SzXH4_MN8CNPm7y" target="_blank" class="btn"> Discord PC <i class="fa-brands fa-discord"></i></a>
                        
                        </div>
                    
                    </div><!-- /.container -->
                
                <!-- END - SEÇÃO DE COMO USAR ?-->

            </section>

            <!-- SEÇÃO DISCIPLAINAS-->

            <section class="diciplinas" style="background-color: var(--color2_2);" id="diciplinas">

                <div class="container">

                    <div class="header-title_card">
    
                        <h3>Diciplinas</h3>
                        <span class="span"></span>
                        <p>Aqui encontrará todas as diciplainas disponíveis em nossa comunidade!</p>

                    </div>

                    <div class="card">

                        <div class="card-item" title="Matemática" onclick="abrirModal()">

                            <figure class="img_dsciplina">

                                <img src="assets/icons/matematica.png" alt="Matemática" class="dicipliana">

                                <legend class="text-yellow">Matemática</legend>

                            </figure>

                        </div>

                        <div class="card-item" title="Física" onclick="abrirModal()">

                            <figure class="img_dsciplina">

                                <img src="assets/icons/fisica.png" alt="Física" class="dicipliana">

                                <legend class="text-blue">Física</legend>

                            </figure>

                        </div>

                        <div class="card-item" title="Química" onclick="abrirModal()">

                            <figure class="img_dsciplina">

                                <img src="assets/icons/quimica.png" alt="Química" class="dicipliana">

                                <legend class="text-green-dark">Química</legend>

                            </figure>

                        </div>

                        <div class="card-item" title="Biologia" onclick="abrirModal()">

                            <figure class="img_dsciplina">

                                <img src="assets/icons/biologia.png" alt="Biologia" class="dicipliana">

                                <legend class="text-green-light">Biologia</legend>

                            </figure>

                        </div>

                        <div class="card-item" title="Lingua Portuguêsa" onclick="abrirModal()">

                            <figure class="img_dsciplina">

                                <img src="assets/icons/portugues.png" alt="Português" class="dicipliana">

                                <legend class="text-blue-dark">Português</legend>

                            </figure>

                        </div>

                    
                    </div>


                    <div class="card">

                        <div class="card-item" title="Lingua Inglêsa" onclick="abrirModal()">

                            <figure class="img_dsciplina">

                                <img src="assets/icons/ingles.png" alt="Inglês" class="dicipliana">

                                <legend class="text-pink">Inglês</legend>

                            </figure>

                        </div>

                        <div class="card-item" title="História" onclick="abrirModal()">

                            <figure class="img_dsciplina">

                                <img src="assets/icons/historia.png" alt="História" class="dicipliana">

                                <legend class="text-marrom">História</legend>

                            </figure>

                        </div>

                        <div class="card-item" title="Geografia" onclick="abrirModal()">

                            <figure class="img_dsciplina">

                                <img src="assets/icons/geografia.png" alt="Geografia" class="dicipliana">

                                <legend class="text-orange">Geografia</legend>

                            </figure>


                        </div>

                        <div class="card-item" title="Filosofía" onclick="abrirModal()">

                            <figure class="img_dsciplina">

                                <img src="assets/icons/filosofia.png" alt="Filosofía" class="dicipliana">

                                <legend class="text-purple">Filosofía</legend>

                            </figure>

                        </div>

                        <div class="card-item" title="Sociologia" onclick="abrirModal()">

                            <figure class="img_dsciplina">

                                <img src="assets/icons/sociologia.png" alt="Sociologia" class="dicipliana">

                                <legend class="text-gray">Sociologia</legend>

                            </figure>

                        </div>

                    </div>

                </div>

            </section>
            
            <!-- SEÇÃO DISCIPLAINAS-->
            
            <a class="up-button" href="#home" aria-label="botão de subir para a seção inicial do site">
        
                <img src="assets/icons/arrow-up.svg" width="100%" height="100%" alt="Seta para subir a sação inicial">
    
            </a>
       
        </main>

            <!-- JANELA MODAL -->

        <div class="fade" id="fade">

            <div class="modal" id="modal">

                <span class="span"></span>
                <span class="span"></span>
                <span class="span"></span>
                <span class="span"></span>

                <button type="button" class="fechar" id="fechar" onclick="abrirModal()">X</button>

                <h3>Vá para a comunidade!</h3>
                <span class="span"></span>
                <p>
                
                    Vá para a comunidade, e conecte-se com outros estudantes,
                    é bem fácil é só clicar no botão abaixo! 
                
                </p>

                <a href="https://discord.gg/hUxccRk4mS" target="_blank" class="btn">Entrar na Comunidade <i class="fa-brands fa-discord"></i></a>

            </div>

        </div>

        <footer>
            
            <p class="footer_comercial">Todos os direiro reservados ao Estudos Produtivos <span class="desc">&copy;</span> - 2023</p>

        </footer>
            

        <!-- ^ Link Para o Script.js-->
        <script src="components/js/script.js" defer></script>
        <script src="components/js/ensinos_script.js"></script>

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
                }, 1000, function(){
            
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
                } // End if
            });
            });

        </script>

    </body>

</html>