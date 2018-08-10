<?php

if(!empty($_POST['email'])){
    
    require_once './model/login_bd.php';
    
    
    $login = new login_bd();
    $noticia = $login->buscar_usuario($_POST['email'], $_POST['password']);
    
    if($noticia[0] == "login"){
        
        $_SESSION['email'] = $noticia[1];
        $_SESSION['usuario'] = $noticia[2];
        header("Location: http://localhost/noticias");
        die();
    }else{
        
        if($noticia[0] == "email_dont_match"){
            
            echo'
<div class="contato">
    <form method="post">
    	<p class="noticia-texto">Digite seu E-mail</p>
        <h2>Email não cadastrado</h2>
        <input type="text" id="email" name="email" size="40" class="digite-nome" oninput="validate()"></input>
        <h2 id="result"></h2>        
        <p class="noticia-texto">Digite seu password</p>
        <input type="password" name="password" size="40" class="digite-nome"></input>
        <button type="submit" formaction="entrar" class="botao-enviar" >Publicar</button>
    </form>
</div>
        ';
            
        }else if($noticia[0] == "password_dont_match"){
            
            echo'
<div class="contato">
    <form method="post">
    	<p class="noticia-texto">Digite seu E-mail</p>
        <input type="text" id="email" name="email" size="40" class="digite-nome" oninput="validate()"></input>
        <h2 id="result"></h2>
        <p class="noticia-texto">Digite seu password</p>
        <input type="password" name="password" size="40" class="digite-nome"></input>
        <h2>Senha incorreta</h2>
        <button type="submit" formaction="entrar" class="botao-enviar" >Publicar</button>
    </form>
</div>
        ';
            
        }
        
        
        
    }
    
    
}else{
    
    echo'
<div class="contato">
    <form method="post">
    	<p class="noticia-texto">Digite seu E-mail</p>
        <input type="text" id="email" name="email" size="40" class="digite-nome" oninput="validate()"></input>
        <h2 id="result"></h2>
        <p class="noticia-texto">Digite seu password</p>
        <input type="password" name="password" size="40" class="digite-nome"></input>
        <button type="submit" formaction="entrar" class="botao-enviar" >Publicar</button>
    </form>
</div>
        ';
    
    
}


?>