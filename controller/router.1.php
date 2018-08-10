<?php
class router{

    public function get_header(){
        include './view/head.php';
    }

    public function get_body(){
        include './view/body.php';
    }

    public function get_contend($url){
            
        if(sizeof($url) == 1){

            if(isset($_POST['titulo']) && isset($_POST['texto']) &&
            ($url[0] == 'postar')){

            include './view/postar.php';

            }else if($url[0] == 'contato'){

                include './view/contato.php';

            }else if($url[0] == 'escreva'){
                
                include './view/escreva.php';
                
            }else if($url[0] == 'nos'){

                include './view/nos.php';
                
            }else if($url[0] == 'home'){

                include './view/home.php';
                
            }else if($url[0] == 'entrar'){
                
                include './view/entrar.php';
                
            }else if($url[0] == 'cadastrar'){
                
                include './view/cadastrar.php';
                
            }else if($url[0] == 'cadastro'){
                
                include './view/cadastro.php';
                
            }else if($url[0] == 'sair'){
                
                include './view/sair.php';
                
            }else{
        
                include './view/404.php';
                
            }

        }else{

            if($url[0] == 'noticia'){
                
                include './view/noticia.php';
                
                mostar_noticia($url[1]);
                
            }else{
                
                include './view/404.php';
                
            }
            
            
        }
        
    }

    public function get_footer(){
        include './view/footer.php';
    }

    public function routing(){

        $url = (isset($_GET['url'])) ? $_GET['url']:'home';
        $url = array_filter(explode('/',$url));      

        return $url;

    }
    
    public function get_view(){

        $this->get_header();
        $this->get_body();
        $this->get_contend($this->routing());           
        $this->get_footer();
    }
    
}