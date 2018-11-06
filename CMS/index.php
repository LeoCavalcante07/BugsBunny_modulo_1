<?php

    session_start();

    $host = "localhost";
    $user = "root";
    $password = "bcd127";
    $banco = "db_bugs_bunny";

    
    $userLogado = "";
    
    $idUser = $_SESSION['idUsuario'];
    



    if(!$conexao = mysqli_connect($host, $user, $password, $banco)){
        echo("<script> alert('Houve um eero na conexão com o banco') </script>");
    }

    $sql = "select * from tbl_usuarios where id = ".$idUser;

    $select = mysqli_query($conexao, $sql);

    $rsUsuario = mysqli_fetch_array($select);

    $userLogado = $rsUsuario['nome'];


    


?>





<html>
    <head>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    
    <body>

        <div class="caixa_principal">
<!--            Header     -->
            <header>

                <div class="caixa_header">
                    <div class="caixa_header_label">
                        <h1>CSM - Sistema de Gerenciamento do Site</h1>
                    </div>

                    <div class="caixa_logo">

                    </div>
                </div>     
            
<!--            Fim header    -->            
            
            </header>

            
            
<!--    Menu            -->
            <div class="caixa_menu">
                <div class="caixa_menu_seg_nav">
                    <div class="caixa_menu_adm">
                        <a href="index.php">                        
                            <div class="caixa_menu_adm_img">
                                <img src="imagens/admCont.png">
                            </div>

                            <div class="caixa_menu_adm_titulo">
                                <p>Conteúdo</p>
                            </div>                        
                        </a>

                    </div>
                    
                    <div class="caixa_menu_adm">
                        
                        <a href="admFaleConosco.php">
                            <div class="caixa_menu_adm_img">
                                <img src="imagens/admFale.png">
                            </div>

                            <div class="caixa_menu_adm_titulo">
                                <p>Fale Conosco</p>
                            </div>                          
                        </a>
                        
                  
                    </div>
                    
                    <div class="caixa_menu_adm">
                        <div class="caixa_menu_adm_img">
                            <img src="imagens/admProduct.png">
                        </div>
                        
                        <div class="caixa_menu_adm_titulo">
                            <p>Produtos</p>
                        </div>                    
                    </div>
                    
                    <div class="caixa_menu_adm">
                        <a href="admControleUsuario.php">
                        
                            <div class="caixa_menu_adm_img">
                                <img src="imagens/admUsers.png">
                            </div>

                            <div class="caixa_menu_adm_titulo">
                                <p>Usuários</p>
                            </div>    
                        </a>
                    </div>
                </div>
                
                <div class="caixa_menu_direita">
                    <div class="caixa_bem_vindo">
                        <p>Bem Vindo, <?php echo($userLogado)?>!</p>
                    </div>
                    <div class="caixa_sair">
                        <a href="../index.php"><div class="caixa_btnSair">Sign Out</div></a>
                    </div>
                </div>
            </div>
            
<!--            Fim Menu      -->
            <div class="caixa_titulo">
                <h1>Páginas</h1>
            </div>
            
            
            <div class="caixa_seg_primeria_sessao">
                <div class="caixa_opt_destaques">
                    <a href="admDestaque.php">
                        <div class="caixa_opt_destaques_img">
                            <img src="imagens/destaque.png">
                        </div>
                        <div class="caixa_opt_destaques_text">
                            <p>Destaques</p>
                        </div>
                    </a>
                </div>     


                <div class="caixa_opt_destaques">
                    <a href="admSobre.php">
                        <div class="caixa_opt_destaques_img">
                            <img src="imagens/sobre.png">
                        </div>
                        <div class="caixa_opt_destaques_text">
                            <p>Sobre</p>
                        </div>
                    </a>    
                </div>     
                
                
                
                <div class="caixa_opt_destaques">
                    <a href="admBancas.html">
                    
                        <div class="caixa_opt_destaques_img">
                            <img src="imagens/bancas.png">
                        </div>
                        <div class="caixa_opt_destaques_text">
                            <p>Bancas</p>
                        </div>                     
                    
                    </a>
   
                </div>                 
            </div>
            
            
            
            <div class="caixa_seg_segunda_sessao">
                <div class="caixa_opt_destaques">
                    <div class="caixa_opt_destaques_img">
                        <img src="imagens/celebridade.png">
                    </div>
                    <div class="caixa_opt_destaques_text">
                        <p>Celebridade</p>
                    </div>
                </div>   
                
                
                
                <div class="caixa_opt_destaques">
                    <div class="caixa_opt_destaques_img">
                        <img src="imagens/home.png">
                    </div>
                    <div class="caixa_opt_destaques_text">
                        <p>Home</p>
                    </div>
                </div> 
                         
                
            </div>
            
            
            
            
            


          
            
            
            
            
            
<!--            FOOTER-->
            <footer>
                <div class="caixa_footer">
                    <div class="caixa_footer_texto">
                        Desenvolvido por: Leonardo Cavalcante
                    </div>
                </div>            
            </footer>

            
        </div>
    </body>
</html>