<?php

    session_start();

    include_once('conexao.php');
    $conexao = getConexao();

    $noUser = "";



    if(isset($_POST['btnEntrar'])){
        
        $txtUsuario = $_POST['txtUsuario'];
        $txtSenha = $_POST['txtSenha'];
        
        $sql = "select * from tbl_usuarios where status = 1 and email = '".$txtUsuario."' and senha = '".$txtSenha."'";
        
        //var_dump($sql);
        
        $select = mysqli_query($conexao, $sql);
        
        $rsConsulta = mysqli_fetch_array($select);
        
        if(@count($rsConsulta) > 0){
            $_SESSION['idUsuario'] = $rsConsulta['id'];
            
            header("location:CMS/index.php");
        }else{
            //echo("<script> alert('Usuário ou senha incorreta') </script>");
            $noUser  = "Usuário ou senha incorreto";
        }
    }


    



?>




<!doctype html>

<html>
    <head>
        <!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
        <title>Home</title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        
        
                <!-- Shared assets -->
        <link rel="stylesheet" type="text/css" href="examples/_shared/css/style.css">

        <!-- Example assets -->
        <link rel="stylesheet" type="text/css" href="examples/connected-carousels/jcarousel.connected-carousels.css">

        <script type="text/javascript" src="libs/jquery/jquery.js"></script>
        <script type="text/javascript" src="dist/jquery.jcarousel.min.js"></script>

        <script type="text/javascript" src="examples/connected-carousels/jcarousel.connected-carousels.js"></script>
        
        
        
        <meta charset="utf-8">
    </head>
    
    <body>
        <header>
            <div id="caixa_header">
                <div id="caixa_header_central">
                    <div id="caixa_logo">
                       
                    </div>

                    <div id="caixa_menu">
                       <a href="index.php"> 
                           <div class="caixa_optMenu">
                            <p>Home</p>
                           </div>
                        </a>

                        <a href="destaque.php">
                            <div class="caixa_optMenu">
                               <p>Destaque</p>
                            </div>
                        </a>

                        <a href="sobre.php">
                            <div class="caixa_optMenu">
                                <p>Sobre</p>
                            </div>
                        </a>
                        
                        <a href="promocoes.php">
                            <div class="caixa_optMenu">
                                <p>Promoções</p> 
                            </div>           
                        </a>

                        <a href="bancas.php">
                            <div class="caixa_optMenu">
                                <p>Bancas</p>
                            </div> 
                        </a>
                        
                        <a href="celebridade.php">
                            <div class="caixa_optMenu">
                                <p>Celebridade</p>
                            </div> 
                        </a>
                        
                        <a href="faleConosco.php">
                            <div class="caixa_optMenu" >
                                <p>Fale Conosco</p> 
                            </div>           
                        </a>
                        
                    </div>

                    <div id="caixa_login">
                        <form action="index.php" method="post">
                            <div class="caixa_seg_login_label">
                                <div class="caixa_login_label" style="margin-right: 30px;">
                                    <p>Usuário:</p>
                                </div>

                                <div class="caixa_login_label">
                                    <p>Senha:</p>
                                </div>                          
                            </div>

                            <div class="caixa_seg_login_text">
                                <div class="caixa_login_text">
                                    <input type="text" name="txtUsuario">                                
                                </div>

                                <div class="caixa_login_text">
                                    <input type="password" name="txtSenha">                           
                                </div>   
                                
                                <p style="color: red; margin-top: 5px;"><?php echo($noUser)?></p>
                                
                                
                            </div>

                            
                            <a href="CMS/index.php">
                                <div class="caixa_botao">
                                    <input type="submit" name="btnEntrar"  class="btnEntrar" value="Entrar">    
                                </div>
                          </a>                        
                        </form>

                    </div>   
                    
                </div>
                
                
            </div>
            
            
        </header>
        
        <div class="caixa_global">
            <div id="caixa_especial"></div>
        
    <!--        -------------Conteudo---------------->
            <div id="caixa_principal">
                <div id="secao_slider">
                    
                    
                    <!-- Start WOWSlider.com BODY section -->
                    <div id="wowslider-container1">
                    <div class="ws_images"><ul>
                            <li><img src="data1/images/bg.png" alt="bg" title="Animes" id="wows1_0"/></li>
                            <li><a href="http://wowslider.net"><img src="data1/images/bg5.png" alt="jquery image carousel" title="Revistas Cientificas" id="wows1_1"/></a></li>
                            <li><img src="data1/images/slide2.jpg" alt="slide2" title="Livros" id="wows1_2"/></li>
                        </ul></div>
                        <div class="ws_bullets"><div>
                            <a href="#" title="bg"><span><img src="data1/tooltips/bg.png" alt="bg"/>1</span></a>
                            <a href="#" title="bg5"><span><img src="data1/tooltips/bg5.png" alt="bg5"/>2</span></a>
                            <a href="#" title="slide2"><span><img src="data1/tooltips/slide2.jpg" alt="slide2"/>3</span></a>
                        </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">bootstrap slideshow</a> by WOWSlider.com v8.8</div>
                    <div class="ws_shadow"></div>
                    </div>	
                    <script type="text/javascript" src="engine1/wowslider.js"></script>
                    <script type="text/javascript" src="engine1/script.js"></script>
                    <!-- End WOWSlider.com BODY section -->  
                    
                    
                </div>
                <section>
                    <div id="caixa_itens">
                        <div id="item_1">
                            Item 1
                        </div>
                        
                        <div id="item_2">
                            Item 2
                        </div>                        
                    </div>

                    <div id="caixa_conteudo">
                        <div id="caixa_conteudo_seg">
                            <div class="caixa_produto">
                                <div class="caixa_imagem">
                                
                                </div>
                                
                                <div class="caixa_descricao">
                                    <p>Nome:</p>
                                    <p>Descrição:</p>
                                    <p>Preço:</p>                                
                                </div>
                                
                                <div class="caixa_detalhes">
                                    <p>Detalhes</p>
                                </div>
                            </div>

                            <div class="caixa_produto">
                                <div class="caixa_imagem">
                                
                                </div>
                                
                                <div class="caixa_descricao">
                                    <p>Nome:</p>
                                    <p>Descrição:</p>
                                    <p>Preço:</p>                                
                                </div>
                                
                                <div class="caixa_detalhes">
                                    <p>Detalhes</p>
                                </div>
                            </div>

                            <div class="caixa_produto">
                                <div class="caixa_imagem">
                                
                                </div>
                                
                                <div class="caixa_descricao">
                                    <p>Nome:</p>
                                    <p>Descrição:</p>
                                    <p>Preço:</p>                                
                                </div>
                                
                                <div class="caixa_detalhes">
                                    <p>Detalhes</p>
                                </div>
                            </div>                        
                        </div>

                        <div id="caixa_conteudo_seg2">
                            <div class="caixa_produto">
                                <div class="caixa_imagem">
                                
                                </div>
                                
                                <div class="caixa_descricao">
                                    <p>Nome:</p>
                                    <p>Descrição:</p>
                                    <p>Preço:</p>                                
                                </div>
                                
                                <div class="caixa_detalhes">
                                    <p>Detalhes</p>
                                </div>
                            </div>

                            <div class="caixa_produto">
                                <div class="caixa_imagem">
                                
                                </div>
                                
                                <div class="caixa_descricao">
                                    <p>Nome:</p>
                                    <p>Descrição:</p>
                                    <p>Preço:</p>
                                </div>
                                
                                <div class="caixa_detalhes">
                                    <p>Detalhes</p>
                                </div>
                            </div>

                            <div class="caixa_produto">
                                <div class="caixa_imagem">
                                
                                </div>
                                
                                <div class="caixa_descricao">
                                    <p>Nome:</p>
                                    <p>Descrição:</p>
                                    <p>Preço:</p>                                
                                </div>
                                
                                <div class="caixa_detalhes">
                                    <p>Detalhes</p>
                                </div>
                            </div>                    
                        </div>
                    </div>
                </section>
            </div>

            
            
            
            
            <div class="caixa_anuncio">
                <div class="anuncio">
                    <img src="imagens/facebook.png" alt="facebook">
                </div>
                
                <div class="anuncio">
                    <img src="imagens/linkedin.png" alt="linkedin">
                </div>
                
                <div class="anuncio">
                    <img src="imagens/twitter.png" alt="twitter">
                </div>                
                
                
            </div>  
                        
        </div>


        <footer>
            <div id="caixa_footer">
                <div class="caixa_footer_central">
                    <div class="caixa_footer_cima">
                        <p>Copyrights© 2018. Todos os direitos reservados.</p> 
                        
                    </div>
                    
                    <div class="caixa_footer_baixo">
                          <p>Bugs Bunny S/A. Avenidas das Rosas, 1789, 11° andar, São Paulo - SP.</p>
                    </div>
                </div>
            </div>
        </footer>
        
        <script src="js/slider.js"></script>
    </body>
</html>