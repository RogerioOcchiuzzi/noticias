<?php

class selecionar_home{
    
    
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
    
    
    function ler_ultimas_noticias(){
        
        $connect = $this->abrir_conexao();
        
        $sql = "SELECT indice, titulo, noticia_usuario FROM indice_noticias
                ORDER BY indice DESC LIMIT 5";
        $result = $connect->query($sql);
        
        $rows = [];
        
        while($row = mysqli_fetch_array($result))
        {
            $rows[] = $row;
        }

        $connect->close();
        
        return $rows;
        
    }
    
    
}

?>