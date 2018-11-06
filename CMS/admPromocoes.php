<?php 

    session_start();

    $host = "localhost";
    $user = "root";
    $password = "bcd127";
    $banco = "db_bugs_bunny";


    if(!$conexao = mysqli_connect($host, $user, $password, $banco)){
        echo('Houve um erro na conexão com o banco');
    }

    
    
    $_SESSION['idProduto'];
    //var_dump($_SESSION['idProduto']);


    if(isset($_GET['btnAtualizar'])){
        //var_dump($_SESSION['idProduto']);
        $novoPreco = $_GET['txtNovoPreco'];
        $dtAlteracao = $_GET['txtDtAlteracao'];
        
        
        $sql = "update tbl_preco_produto set promocao = 0, to_date = '".$dtAlteracao."' where to_date is null and idProduto = ".$_SESSION['idProduto'];
        

        
        mysqli_query($conexao, $sql);
        
         $sql = "select preco from tbl_preco_produto where to_date is null and idProduto = ".$_SESSION['idProduto'];
        

        
        $select = mysqli_query($conexao, $sql);
        
        $rsPrecoAntigo = mysqli_fetch_array($select);
        
        $precoAntigo = $rsPrecoAntigo['preco'];
        
        $statusPromocao = 1;
        if($precoAntigo < $novoPreco){// caso o preço atual seja maior que o anterior, o produto não deve estar em promocao, logo, status = 0
            $statusPromocao = 0;
        }
        

        
        
        $sql2 = "insert into tbl_preco_produto(idProduto, preco, from_date, promocao) values(".$_SESSION['idProduto'].", ".$novoPreco.", '".$dtAlteracao."', ".$statusPromocao.")";
        
        
        if(mysqli_query($conexao, $sql2)){
            echo("foi");
        }else{
            echo("deu ruim");
        }
        
        
        
        
    
        
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
            
            
            <div class="seg_form_promocoes">
                <form action="admPromocoes.php" method="get">
                    <p>Novo Preço:</p>
                    <p><input type="text" name="txtNovoPreco"></p>
                    <br><br>
                    <p>Data de alteração do valor:</p>
                    <p><input type="text" name="txtDtAlteracao"></p>
<!--                    Essa data deve ser a data de encerramento do preço anterior-->
                    
                    <input type="submit" name="btnAtualizar" value="Atualizar">
                </form>    
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