<?php

if(!empty($_POST['nome'])){
    
    try {
        
        require_once './model/cadastrar_usuario.php';
        
        
        
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $email = $_POST['email'];
            $nome = $_POST['nome'];
            
            $password = $_POST['password'];
            
            $cadastrar_no_db = new cadastrar_usuario();
            $cadastrar_no_db->inserir($nome, $email,$password);
            
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['usuario'] = $_POST['nome'];
            header("Location: http://localhost/noticias/cadastrar");
            die(); 
            
        }else{
            echo'<h1>Erro ao cadastrar o email</h1>';
        }
        
    } catch (Exception $e) {
        
        echo 'Deu pau! '.$e;
        
    }
    
}if(!empty($_SESSION['email'])){
    
    echo'
<div class="noticia">
    <p>Cadastro feito com sucesso!</p>
    <p class="noticia-texto">Muito obrigado por se cadastrar!</p>
</div>';
    
}else{
    
    
    echo '
<div class="contato">
    <form method="post">
    	<p class="noticia-texto">Digite seu Nome completo</p>
        <input type="text" name="nome" size="40" class="digite-nome"></input>
        <p class="noticia-texto">Digite seu E-mail</p>
        <input type="text" name="email" id="email" size="40" class="digite-nome"oninput="validate()"></input>
        <h2 id="result"></h2>
        <p class="noticia-texto">Digite seu password</p>
        <input type="password" name="password" size="40" class="digite-nome"></input>
        <button type="submit" formaction="cadastrar" class="botao-cadastrar">Cadastrar</button>
    </form>
</div>';
    
}
?>