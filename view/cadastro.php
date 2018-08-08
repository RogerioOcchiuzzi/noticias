<div class="noticia">
    <p>Cadastro feito com sucesso!</p>
    <p class="noticia-texto">Muito obrigado por se cadastrar!</p>
</div>

<?php 

require_once './model/cadastrar_usuario.php';

$nome = $_POST['nome'];

if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $email = $_POST['email'];
}

$password = $_POST['password'];

$cadastrar_no_db = new cadastrar_usuario();
$cadastrar_no_db->inserir($nome, $email,$password);


?>
