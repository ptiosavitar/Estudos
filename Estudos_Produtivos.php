<?php

    require_once("config.php");
    include_once("protect.php");

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
        <meta name="description" content="Somos um grupo de estudantes, que nos juntamos para um unico motivo tornar a vida de outros estudantes mais facil, venha nos conhecer e verá o que fomos capazes de criar para vocês!">
        <meta name="Author" content="Ana Beatriz, Ana Clara, Abner Barbosa, Gabriel Felipe, João Mateus, Otávio Aparecido, Pedro Thomazzeli">

        <!--? Link Para o favicon-ico-->
        <link rel="shortcut icon" href="assets/logo/Logo_Estudos_Produtivos_com_fundo.png" type="image/x-icon">

        <!--? Link Para o font-awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!--? Link Para o Style.css-->
        <link rel="stylesheet" href="components/css/style2.css">
        
        <!--? Link Para o Style_fonts.css-->
        <link rel="stylesheet" href="components/css/fonts_style.css">

        <!-- ~ Fonte Awesome: Para icones -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>Estudos Produtivos - EP</title>

    </head>

    <body>


        <!-- & header menu e logo -->

        <header id="home">

            <div class="logo">

                <img src="assets/Logo/Logo_Estudos_Produtive.png" alt="Logo Decritiva Estudos Produtivos">

            </div>

            <nav class="menu">

                <ul aria-label="Navegação Primária" class="nav-primaria">

                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">Sobre</a></li>
                    <li class="dropDown-menu"><a href="#escolaridade">Escolaridade <i style="color: #fff;" class="fa-solid fa-arrow-circle-down"></i></a>
                    
                        <ul class="dropDown">

                            <li><a href="1-ensino_medio.php">1º Ensino Médio</a></li>
                            <li><a href="2-ensino_medio.php">2º Ensino Médio</a></li>
                            <li><a href="3-ensino_medio.php">3º Ensino Médio</a></li>

                        </ul>

                    </li>
                    <li><a href="#services">Oferecemos</a></li>
                    <li><a href="#dev">Criadores</a></li>
                    <li><a href="#contact">Contate-nos</a></li>

                    <li>
                    
                        <div class="perfil_mod">

                            <a href="perfil_mod.php" class="perfil_mod-link">

                                <i class="fa-solid fa-circle-user"></i>
                                <?php echo $nome_user;?>

                            </a>

                        </div>

                    </li>

                    <li class="btn_logout">

                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

                            <input type="submit" value="Logout" name="logout" class="logout">

                            <?php

                                if (isset($_POST["logout"])) {
                                    
                                    logout();

                                }

                            ?>

                        </form>

                    </li>
            
                </ul>
                
                <i class="fa-solid fa-bars"></i>

            </nav>

        </header>

        <!-- & header menu e logo -->

        <!-- *  Seçao descritiva do nome e os objetivos nossos -->
        

        <section aria-label="seçao descritiva do nome e os objetivos nossos" class="section-div">

            <div class="texto_digitando">

                <h2>Olá, Somos</h2>
                <h2 class="digitando">             Estudos Produtivos</h2>
                <p>Sucesso é o acúmulo de pequenos esforços, repetidos dia e noite. @Robert Collier</p>
                <a href="#about">conhecer!</a>

            </div>

            <img src="assets/imgs/Fundo_pagina_home_header2.png" alt="ilustrativa imagem de Estudos Produtivos">

        </section>
        
        <!-- *  Seçao descritiva do nome e os objetivos nossos -->
        
        <!-- ~ Seção sobre Estudos Produtivos -->

        <main>


            <article aria-label="Seção sobre Estudos Produtivos" id="about" class="sobre">
                
                <div class="sobre_titulo">

                    <h1 class="sobre_titulo-h1">Sobre o Estudos Produtivos</h1>
                    <p>Aqui vou descrever mais sobre o Estudos Produtivos</p>

                    <div aria-label="seçao de ilustrações de botões">

                        <span></span>
                        <span></span>
                        <span></span>

                    </div>

                </div>

                <img src="assets/imgs/Fundo_pagina_home_header2.png" alt="imagem ilustrativa sobre o Estudos Produtivos">

                <div class="sobre_conteudo">

                    <div class="sobre_texto">

                        <h1 class="sobre_titulo-h1">Nos somos o Estudos Produtivos</h1>
                        <p>Somos um grupo de estudantes dedicados a quebrar as barreiras de acesso a conteúdos e 
                            materiais de estudo pagos, introduzindo técnicas de estudo e criando um ambiente de 
                            aprendizado mais agradável para os estudantes. Além disso, proporcionamos acesso 
                            imediato a grupos de estudo online, visando reduzir os efeitos do isolamento, privação 
                            de conhecimento e outros transtornos emocionais e físicos que se tornaram uma realidade 
                            para muitos estudantes após a pandemia. Dessa forma, buscamos evitar a evasão escolar em 
                            massa. A questão do abandono escolar é uma preocupação tanto para os educadores quanto 
                            para os responsáveis pelas políticas públicas. De acordo com dados estatísticos de 2018 
                            do IBGE, cerca de 1,2 milhão de jovens entre 15 e 17 anos estavam fora da escola, o que 
                            representava 11,8% da população nessa faixa etária. As causas do abandono escolar são 
                            diversas e podem estar relacionadas a fatores socioeconômicos, culturais, geográficos   
                            e pedagógicos.


                            
                            <br>
                            <br>
                            
                            Não enxergamos a educação como simplesmente uma forma de adquirir informações, mas sim  
                            como um catalisador para mudanças positivas na vida das pessoas. Ela é uma luz capaz de 
                            dissipar as sombras da incerteza e criar um futuro mais brilhante. Estamos comprometidos 
                            em aprimorar e expandir continuamente nossos esforços. Nossa missão é clara: não importa 
                            onde você esteja ou quais dificuldades enfrente, o conhecimento deve estar ao seu 
                            alcance. A pandemia pode ter apresentado desafios inesperados, mas também nos inspirou a 
                            ser agentes de mudança. Com esta plataforma, estamos construindo um futuro mais 
                            promissor, onde o conhecimento é verdadeiramente acessível a todos, passo a passo. 
                            Juntos, podemos fazer a diferença.
                        
                        </p>

                    </div>

                    <div class="sobre-info">

                        <p><i class="fa-solid fa-calendar-days"></i>Data de Fundação: 15 fevereiro 2023</p>
                        <p><i class="fa-sharp fa-solid fa-laptop-code"></i>Plataforma de Estudos: Sem am Parceirias</p>
                        <p><i class="fa-solid fa-location-dot"></i>Endereço: Guariba-SP, Brasil</p>
                        <p><i class="fa-sharp fa-solid fa-globe"></i>Línguas: Portugês Brasil</p>
                        <p><i class="fa-solid fa-flag"></i>Nacinalidade: Brasil</p>
                        <p><i class="fa-solid fa-phone-volume"></i>Telefone de Contato: +55 (16) 993760813</p>
                        <p><i class="fa-solid fa-envelope"></i>Email: estudosprodutivo23@gmail.com</p>

                    </div>

                </div>

            </article>
        


        </main>

        <!-- ~ Seção sobre Estudos Produtivos -->

        <!-- ^ SERVISOS -->

        <section class="services" id="services" aria-label="seçao deservisos desponiveis pelo Estudos Produtivo">

            <div class="sobre_titulo">

                <h1 class="sobre_titulo-h1">O que Oferecemos ?</h1>
                <p>Aqui vou descrever mais sobre o que Estudos Produtivos oferece aos estudantes!</p>

                <div aria-label="seçao de ilustrações de botões">

                    <span></span>
                    <span></span>
                    <span></span>

                </div>

            </div>

            <div class="my_services">

                <ul aria-label="Navegação dos serviços do Estudos">

                    <li>
                        
                        <i class="fa-solid fa-book"></i>
                        <h3 class="titulo_my-services">Materiais de Estudos.</h3>

                    </li>

                    <li>

                        <i class="fa-brands fa-discord"></i>
                        <h3 class="titulo_my-services">Grupos de Estudos.</h3>
                        
                    </li>

                    <li>

                        <i class="fa-solid fa-file-pdf"></i>
                        <h3 class="titulo_my-services">Exercícios de Fixação</h3>

                    </li>

                    <li>

                        <i class="fa-solid fa-download"></i>
                        <h3 class="titulo_my-services">Bibliotéca</h3>

                    </li>

                    <li>

                        <i class="fa-solid fa-circle-check"></i>
                        <h3 class="titulo_my-services">Programa ENEM</h3>

                    </li>


                    <li>

                            <i class="fa-solid fa-circle-info"></i>
                            <h3 class="titulo_my-services">Suporte</h3>

                    </li>

                </ul>

            </div>

        </section>

        <!-- ^ SERVISOS -->

        <!-- & SEÇÃO CRIADORES E FUNDADORES DO ESTUDOS PRODUTIVOS -->

            <section class="dev" id="dev" aria-label="Seção desenvolvedores e ciadores do Estudos Produtivos">

                <div class="sobre_titulo">

                    <h1 class="sobre_titulo-h1">Criadores e Fundadores da Estudos Produtivos!</h1>
                    <p>Aqui vou descrever mais sobre os criadores e fundadores da Estudos Produtivos.</p>
    
                    <div aria-label="seçao de ilustrações de botões">
    
                        <span></span>
                        <span></span>
                        <span></span>
    
                    </div>
    
                </div>

                <div class="cards_devs">

                    <div class="card_dev">

                        <div class="imgs">

                            <img class="foto_perfil-dev" src="assets/imgs/Foto_Perfil_Abner_Dark.png" alt="Foto Perfíl Abner Barbosa de Souza">

                        </div>

                        <div class="description">

                            <h4 class="name">Abner Barbosa de Souza</h4>
                            <h5 class="funcao">Designer Grafico</h5>
                            <p class="description_dev">
                                
                                Com apenas 17 anos, Abner é um entusiasta da informática e   
                                dos jogos. Ele está mergulhado no mundo do curso técnico de informática, onde 
                                aprende da tecnologia. No entanto, sua paixão vai além da informática, já que 
                                adora passar seu tempo livre jogando videogames. Para ele, jogar não é apenas 
                                diversão, mas uma maneira de aprimorar suas habilidades de resolução de 
                                problemas e trabalho em equipe.
                                
                            </p>

                        </div>

                        <div class="btn">

                            <a href="https://www.instagram.com/abnerbstito/" target="_blank">

                                <button type="button"><i class="fa-brands fa-instagram"></i> Instagram</button>

                            </a>

                        </div>

                    </div><!-- Abner Barbosa -->

                    <div class="card_dev">

                        <div class="imgs">

                            <img class="foto_perfil-dev" src="assets/imgs/Foto_Perfil_Ana_B_Dark.png" alt="Foto 
                            Perfíl Ana Beatriz Lemos Cruz">

                        </div>

                        <div class="description">

                            <h4 class="Name">Ana Beatriz Lemos Cruz</h4>
                            <h5 class="funcao">Surpervisora Técnica e SEO</h5>
                            <p class="description_dev">
                                
                                Com seus 17 anos, Ana Beatriz é uma aluna dedicada no curso técnico de informática. 
                                Além dos estudos, sua fé e participação ativa na igreja são pilares de sua vida. 
                                Ela encontra conforto e orientação na fé, moldando sua perspectiva única sobre o 
                                mundo. A tecnologia e a espiritualidade se entrelaçam, formando a base da jornada de 
                                Ana Beatriz.
                            
                            </p>


                        </div>

                        <div class="btn">

                            <a href="https://www.instagram.com/ana.beatriz.lemos/" target="_blank">
                                
                                <button type="button"><i class="fa-brands fa-instagram"></i>   Instagram</button>
                            
                            </a>

                        </div>

                    </div><!-- Ana Beatriz -->

                    <div class="card_dev">

                        <div class="imgs">

                            <img class="foto_perfil-dev" src="assets/imgs/Foto_Perfil_Ana_C_Dark.png" alt="Foto Perfíl  
                            Ana Clara Martíns da Silva">

                        </div>

                        <div class="description">

                            <h4 class="Name">Ana Clara Martíns da Silva</h4>
                            <h5 class="funcao">Surpervisora Geral e SEO</h5>
                            <p class="description_dev">

                                Ana Clara, aos 17 anos, é apaixonada por informática e animais. Enquanto ela se 
                                concentra em seu curso técnico de informática, também dedica tempo para cuidar de 
                                animais, especialmente gatinhos e cachorros. Seu coração compassivo a leva a se 
                                envolver em atividades de voluntariado e conscientização, promovendo o bem-estar 
                                animal enquanto aprimora suas habilidades técnicas.

                            </p>

                        </div>

                        <div class="btn">

                            <a href="https://www.instagram.com/ana_martins_022/" target="_blank">
                                
                                <button type="button"><i class="fa-brands fa-instagram"></i>  Instagram</button>
                            
                            </a>

                        </div>

                    </div><!-- Ana Clara -->

                    <div class="card_dev">

                        <div class="imgs">

                            <img class="foto_perfil-dev" src="assets/imgs/Foto_Perfil_Gabriel_Dark.png" alt="Foto    
                            Perfíl Gabriel Felipe de Oliveira Rateiro">

                        </div>

                        <div class="description">

                            <h4 class="Name">Gabriel Felipe de Oliveira Rateiro</h4>
                            <h5 class="funcao">

                                Desenvolvedor Web Full-Stack, SEO, UX/UI e Desenvolvedor de Softwere.

                            </h5>

                            <p class="description_dev">

                                Com 18 anos, Gabriel é um estudante de informática com um amor pelo vôlei. Enquanto 
                                ele navega pelo curso técnico de informática, também encontra alegria e camaradagem 
                                na quadra de vôlei. O esporte não é apenas um exercício físico para ele, mas uma 
                                maneira de construir amizades e desafiar a si mesmo e além de tudo uma de suas 
                                maiores habilidades é seu Espirito de Liderança.

                            </p>

                        </div>

                        <div class="btn">

                            <a href="https://www.instagram.com/gabrielfelipe2483/" target="_blank">
                                
                                <button type="button"><i class="fa-brands fa-instagram"></i>  Instagram</button>
                            
                            </a>

                        </div>

                    </div><!-- Gabriel Felipe -->

                    <div class="card_dev">

                        <div class="imgs">

                            <img class="foto_perfil-dev" src="assets/imgs/Foto_Perfil_Joao_Dark.jpeg" alt="Foto  
                            Perfíl João Matheus Soares">

                        </div>

                        <div class="description">

                            <h4 class="Name">João Matheus Soares</h4>
                            <h5 class="funcao">Supervisor Técnico e Gerenciamentos Complementares</h5>
                            <p class="description_dev">

                                Com seus 17 anos, João Matheus está imerso em seu curso técnico de informática. Além 
                                disso, ele é apaixonado por academia e exercícios físicos. Para ele, manter um corpo 
                                saudável é tão importante quanto cultivar a mente. Através do exercício, ele busca 
                                equilíbrio e vitalidade em sua vida agitada.

                            </p>

                        </div>

                        <div class="btn">

                            <a href="https://www.instagram.com/math.soaress_/" target="_blank">
                                
                                <button type="button"><i class="fa-brands fa-instagram"></i>  Instagram</button>
                            
                            </a>

                        </div>

                    </div><!--João Matheus Soares-->

                    <div class="card_dev">

                        <div class="imgs">

                            <img class="foto_perfil-dev" src="assets/imgs/Foto_Perfil_Otavio_Dark.jpeg" alt="Foto 
                            Perfíl Otávio Aparecido Gonçalves Ferreira">

                        </div>

                        <div class="description">

                            <h4 class="Name">Otávio Aparecido Gonçalves Ferreira</h4>
                            <h5 class="funcao">Supervisor Técnico e Gerenciamentos Complementares</h5>
                            <p class="description_dev">

                                Otavio, com 17 anos, é um entusiasta do futebol e um aluno do curso técnico de 
                                informática. Enquanto ele se concentra em expandir seus conhecimentos tecnológicos, 
                                também dedica tempo à paixão pelo futebol. O esporte não é apenas uma atividade 
                                atlética para ele, mas uma maneira de se conectar com os outros e aprender lições 
                                valiosas sobre trabalho em equipe.

                            </p>

                        </div>

                        <div class="btn">

                            <a href="https://www.instagram.com/tavioooh/" target="_blank">
                                
                                <button type="button"><i class="fa-brands fa-instagram"></i>  Instagram</button>
                            
                            </a>

                        </div>

                    </div><!--Otávio Aparecido Gonçalves Ferreira-->

                    <div class="card_dev">

                        <div class="imgs">

                            <img class="foto_perfil-dev" src="assets/imgs/Foto_Perfil_Pedro_Dark.jpg" alt="Foto 
                            Perfíl Pedro henrique Thomazzeli da silva">

                        </div>

                        <div class="description">

                            <h4 class="Name">Pedro Henrique Thomazzeli da Silva</h4>
                            <h5 class="funcao">

                                Supervisor Técnico, Gerenciamentos Complementares e Disigner Gráfico
                            
                            </h5>
                            
                            <p class="description_dev">

                                Aos 18 anos, Pedro é um estudante dedicado no curso técnico de informática, mas sua 
                                paixão vai além da tecnologia. Ele é um praticante de artes marciais, encontrando 
                                força física e mental nessa prática disciplinada. Pedro acredita que a combinação de 
                                aprendizado tecnológico com as artes marciais o ajuda a crescer como pessoa, 
                                cultivando não apenas habilidades, mas também valores importantes.

                            </p>

                        </div>

                        <div class="btn">

                            <a href="https://www.instagram.com/pedrohtdss/" target="_blank">
                                
                                <button type="button"><i class="fa-brands fa-instagram"></i>  Instagram</button>
                            
                            </a>
                            
                        </div>

                    </div><!--Pedro Henrique Tomazzeli da Silva-->

                    <div class="card_dev">

                        <span></span>

                        <div class="imgs">

                            <img class="foto_perfil-dev" src="assets/imgs/Foto_Perfil_Leila_Dark.png" alt="Foto Perfíl 
                            Leila de Fátima Oliveira Gava">

                        </div>

                        <div class="description">

                            <h4 class="Name">Leila de Fátima Oliveira Gava</h4>
                            <h5 class="funcao">Supervisora Técnica e Geral</h5>
                            <p class="description_dev">

                                Com todo o seu entusiasmo nas aulas, ela motiva seus alunos a enfrentar o que mais temem: estudar. Ela aborda a matéria de forma a garantir que os alunos compreendam. Além de ser uma excelente educadora, ela também é uma amiga que todos admiram. Quando necessário, ela nos orienta e nos ajuda a melhorar, ela corrige nossos erros e nos guia para nos tornarmos pessoas melhores a cada dia. Ela nos acompanhou nessa árdua jornada, e sua orientação foram essenciais para o nosso sucesso!

                            </p>

                        </div>

                        <div class="btn">

                            <a href="https://www.instagram.com/leila_gava/#" target="_blank">
                                
                                <button type="button"><i class="fa-brands fa-instagram"></i>  Instagram</button>
                            
                            </a>

                        </div>

                    </div><!--Leila de Fátima-->

                    <div class="card_dev">

                        <span></span>

                        <div class="imgs">

                            <img class="foto_perfil-dev" src="assets/imgs/Foto_Perfil_Gabriel_Bazo_Dark.png" alt="Foto Perfíl 
                            Gabriel Baso">

                        </div>

                        <div class="description">

                            <h4 class="Name">Gabriel Baso</h4>
                            <h5 class="funcao">Supervisor Técnico e Geral</h5>
                            <p class="description_dev">
                                
                                Apesar de o termos conhecido recentemente, sua inteligência nos cativou. Tornou-se uma referência para os alunos, destacando-se pela eficácia de suas soluções em programas e softwares. Sua orientação foi crucial para a criação do TCC, proporcionando uma visão mais apurada de software bem executável e inteligente. Com seu carisma e inteligência, ele conquistou um lugar de destaque em nossa menção honrosa.

                            </p>

                        </div>

                        <div class="btn">

                            <a href="https://www.instagram.com/profgabigol/" target="_blank">
                                
                                <button type="button"><i class="fa-brands fa-instagram"></i>  Instagram</button>
                            
                            </a>

                        </div>

                    </div><!--Gabriel Baso-->

                </div>

            </section>

        <!-- & SEÇÃO CRIADORES E FUNDADORES DO ESTUDOS PRODUTIVOS -->
        
        <!-- * SEÇÃO FORMULÁRIO DE CONTATO -->

            <section class="contato" id="contact" aria-label="Seção formulário de contato do Estudos Produtivos">
                
                <div class="sobre_titulo">

                    <h1 class="sobre_titulo-h1">Contate-nos</h1>
                    <p>Aqui Você pode nos contar como se sente com essa novidade ou algo quedemos ajudar ou melhorar no Estudos Produtivos.</p>
    
                    <div aria-label="seçao de ilustrações de botões">
    
                        <span></span>
                        <span></span>
                        <span></span>
    
                    </div>
    
                </div>

                <div class="form">

                    <form action="https://formspree.io/f/mjvqdvla" method="post" data-form>

                        <span class="form_borda-1"></span>
                        <span class="form_borda-2"></span>
                        <span class="form_borda-3"></span>
                        <span class="form_borda-4"></span>

                        <div class="campos">

                            <label for="name">Nome Completo: </label>
                            <input type="text" name="name" id="name" class="inputs" placeholder="Digite seu nome completo..." minlength="10" required autocomplete="off">

                        </div>

                        <div class="campos">

                            <label for="email">Email: </label>
                            <input type="email" name="email" id="email" class="inputs" placeholder="Digite seu melhor @email..." minlength="8" required autocomplete="off">

                        </div>

                        <div class="campos">

                            <label for="mensage">Mensagem: </label>
                            <textarea name="mensagem" id="mensage" cols="1" minlength="3"  maxlength="1500" placeholder="Digite sua mensagem aqui! 👇 ..." required  autocomplete="off"></textarea>

                        </div>

                        <button type="submit" data-button>Enviar</button>

                    </form>

                </div>

            </section>

        <!-- * SEÇÃO FORMULÁRIO DE CONTATO -->

        <!-- ~ FOOTER -->

        <footer>
            
            <div class="sobre_titulo">

                <h1 class="sobre_titulo-h1">Mais Informações de Contato</h1>
                <p>Aqui tem mais sobre as informações de contato do Estudos Produtivos</p>

            </div>

            
            <nav aria-label="Navegação de links de redes sociais do Estudos Produtivos">
                
                <ul class="footer_sociais">
                    
                    <li><a href="https://www.instagram.com/estudosprodut2023/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                    
                </ul>
                
            </nav>

            <p class="footer_comercial">Todos os direiro reservados ao Estudos Produtivos &copy; - 2023</p>
            
        </footer>

        <!-- ~ FOOTER -->


        <a class="up-button"
            href="#home" aria-label="botão de subir para a seção inicial do site">
            
            <img src="assets/icons/arrow-up.svg" width="100%" height="100%" alt="Seta para subir a sação inicial">
        
        </a>


        <!-- ^ Link Para o Script.js-->
        <script src="components/js/script.js" defer></script>

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