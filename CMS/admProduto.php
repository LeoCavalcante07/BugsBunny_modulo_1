<?php 

    $host = "localhost";
    $user = "root";
    $password = "bcd127";
    $banco = "db_bugs_bunny";

    session_start();


    if(!$conexao = mysqli_connect($host, $user, $password, $banco)){
        echo('Houve um erro na conexão com o banco');
    }


    
    

    





?>







<!doctype html>

<html>
    <head>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        
        <meta charset="utf-8">
        

    </head>
    
    <body>
        
        <div class="container">
            <div class="modal">
            
            </div>
        </div>

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
                        <div class="caixa_menu_adm_img">
                            <img src="imagens/admFale.png">
                        </div>
                        
                        <div class="caixa_menu_adm_titulo">
                            <p>Fale Conosco</p>
                        </div>                    
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
                        <div class="caixa_menu_adm_img">
                            <img src="imagens/admUsers.png">
                        </div>
                        
                        <div class="caixa_menu_adm_titulo">
                            <p>Usuários</p>
                        </div>                    
                    </div>
                </div>
                
                <div class="caixa_menu_direita">
                    <div class="caixa_bem_vindo">
                        <p>Bem Vindo, David!</p>
                    </div>
                    <div class="caixa_sair">
                        <a href="../index.php"><div class="caixa_btnSair">Sign Out</div></a>
                    </div>
                </div>
            </div>
            
<!--            Fim Menu      -->
            
            

            <div class="seg_produtos">
                <?php 
                    $sql = "select * from tbl_produto where status = 1";
                
                    //var_dump($sql);
                
                    $select = mysqli_query($conexao, $sql);
                    while($rsConsulta = mysqli_fetch_array($select)){
                
                ?>
                <a>
                <div class="caixa_seg_produto">
                    <img src="../<?php echo($rsConsulta['foto'])?>">
                    
                    
                    <a href="auxiliar.php?idProduto=<?php echo($rsConsulta['idProduto'])?>">Adicionar Promoção</a>
                </div>                
                </a>

                
                <?php
                    }
                ?>
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