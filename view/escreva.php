<?php
require_once './model/inserir_noticia.php';?>

<div class="contato">
    <form method="post">
    	<p class="noticia-texto">Digite o titulo da notícia</p>
        <input type="text" name="titulo" size="40" class="digite-nome"></input>
        <p class="noticia-texto">Digite a notícia</p>
        <textarea name="texto" rows="25" cols="100" class="digite-mensagem"></textarea>
        <button type="submit" formaction="postar" class="botao-enviar">Publicar</button>
    </form>
</div>
