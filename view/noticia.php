<?php 

require_once './model/selecionar_noticia.php';

function mostar_noticia($indice){
    
    
    $noticia_bd = new selecionar_noticia();
    $noticia = $noticia_bd->buscar_noticia($indice);

        
        echo'<div class="noticia">
                <p>'.$noticia[1].'</p>
                <p class="noticia-texto">'.$noticia[2].'</p>
                </div>
            ';

    
    
    
}




?>