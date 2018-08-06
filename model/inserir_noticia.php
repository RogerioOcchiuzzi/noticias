<?php

class inserir_noticia{
    
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
    
    function inserir($titulo, $noticia){
        
        $connect = $this->abrir_conexao();
        
        date_default_timezone_set('America/Sao_Paulo');
        
        $sql = "INSERT INTO indice_noticias (titulo, noticia_usuario, usuario, data_publicacao)
                VALUES ('$titulo', '$noticia', 'Usuario Teste','".date('Y-m-d H:i:s')."')";
        
        if ($connect->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $connect->error;
        } 
        
        $connect->close();
        
        
    }
    
    
}

?>