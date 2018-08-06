<div class="noticia">
    <p>Mensagem recebida com sucesso!</p>
    <p class="noticia-texto">Muito obrigado por escrever esta mensagem usuario!</p>
</div>

<?php 

$titulo = $_POST['titulo'];
$noticia = $_POST['texto'];

$inserir_no_db = new inserir_noticia();
$inserir_no_db->inserir($titulo, $noticia);


?>

