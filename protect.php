<?php

    if (!isset($_SESSION)) {
        session_start();
    }

    if (!isset($_SESSION['id'])) {

        die("<body style='
                width: 100vw;
                height: 100%;
                overflow: hidden;
                background-image: url(\"assets/imgs/Background_cadastro.png\");
                background-size: cover;
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
            '>
        
            <div style=' 
                    width: 80%;
                    height: 40vh;
                    // margin-top: 3%;
                    background-color: #000000;
                    border: 2px solid #ec3636;
                    color: #cccccc;
                    font-family: Arial;
                    font-size: 16.5pt;
                    font-weight: 300;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    border-radius: 20px;
                '>

                <p>Você não pode acessar essa página, pois ainda não está logado!</p> 
                <a href='index.php' style='width: 50%;
                border-radius: 20px;
                text-transform: uppercase;
                margin: 0 auto;
                font-size: 18pt;
                cursor: pointer;
                text-decoration: none;
                color: #9333ff;
                margin-top: 5%;
                background-color: #cccccc;
                transition: all 0.3s ease-in-out;'
                
                
                >Login</a> 
            
            </div>
            
            </body>");

    }

?>
