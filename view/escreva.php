<?php
require_once './model/inserir_noticia.php';?>

<div class="contato">
    <form method="post">
        <input type="text" name="titulo" value="Digite o titulo da notícia" size="40" class="digite-nome"></input>
        <textarea name="texto" rows="25" cols="100" class="digite-mensagem">Digite o texto</textarea>
        <button type="submit" formaction="postar" class="botao-enviar">Publicar</button>
    </form>
</div>
