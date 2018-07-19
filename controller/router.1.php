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

            echo 'Teste:</br>'.$_POST['titulo'].'</br></br>'.$_POST['texto'];
            include './view/postar.php';

            }else if($url[0] == 'contato'){

                include './view/contato.php';

            }else if($url[0] == 'escreva'){
                
                include './view/escreva.php';
                
            }else if($url[0] == 'nos'){

                include './view/nos.php';
                
            }else if($url[0] == 'noticia'){

                include './view/noticia.php';
                
            }else if($url[0] == 'home'){

                include './view/home.php';
                
            }else{
        
                include './view/404.php';
                
            }

        }else{

            header("Location: /noticias/404");
            die();

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