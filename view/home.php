<?php

require_once './model/selecionar_noticias_para_home.php';

$noticias_home = new selecionar_home();
$noticias = $noticias_home->ler_ultimas_noticias();

foreach ($noticias as $noticia){
    
    $formatar_tamanho_texto = $noticia[2];
    
    if (strlen($formatar_tamanho_texto) > 600)
        $formatar_tamanho_texto = substr($formatar_tamanho_texto, 0, 600) . '...';
    
    echo '
    <div class="noticia-home">
    <a href="noticia/'.$noticia[0].'" class="ancora-noticia">
    <p>'.$noticia[1].'</p>
    <p class="noticia-texto">
    '.$formatar_tamanho_texto.'
    </p>
    <p class="noticia-leia-mais">Lei mais</p>
    </a>
    </div>';
    
}

?>