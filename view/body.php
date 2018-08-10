<body>
<div class="arruma-foter">	
<div class="header">
	<ul class="header-list">
		<li class="logotipo"><a class="ancora-reader" href="/noticias">Notícias</a></li>
		<?php 
		session_start();
            if((isset ($_SESSION['email']) == true) and (isset ($_SESSION['usuario']) == true))
            {
                $logado = $_SESSION['usuario'];
                echo '
<li class="item-lista-header"><a class="ancora-reader" href="escreva">Escreva uma notícia</a></li>
<li class="item-lista-header"><a class="ancora-reader" href="sair">Sair</a></li>
<li class="item-lista-header"><p class="ancora-reader" href="cadastrar">Bem vindo '.$logado.'</p></li>';
              
            }else{
                
                echo '
		<li class="item-lista-header"><a class="ancora-reader" href="entrar">Entrar</a></li>
		<li class="item-lista-header"><a class="ancora-reader" href="cadastrar">Cadastre-se</a></li>';
            }
            
        ?>
	</ul>
</div>
<div class="centraliza-corpo">