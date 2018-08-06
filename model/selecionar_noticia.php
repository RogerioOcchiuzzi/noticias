<?php

class selecionar_noticia{
    
    
    function abrir_conexao(){
        
        $servername = "localhost";
        $username = "webmaster";
        $password = "";
        $dbname = "noticias";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        return $conn;
        
    }
    
    
    function buscar_noticia($indice){
        
        $connect = $this->abrir_conexao();
        
        $sql = "SELECT indice, titulo, noticia_usuario FROM indice_noticias WHERE indice = ".$indice;
        $result = $connect->query($sql);
        
        $resultado_array = mysqli_fetch_array($result);
        
        $connect->close();
        
        return $resultado_array;
        
    }
    
}


?>