<?php

class cadastrar_usuario{
    
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
    
    function inserir($nome, $email, $password){
        
        $connect = $this->abrir_conexao();
        
        date_default_timezone_set('America/Sao_Paulo');
        
        $sql = "INSERT INTO usuarios (email, nome_usuario, password)
                VALUES ('$email', '$nome', '$password')";
        
        if ($connect->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
        
        $connect->close();
        
        
    }    
    
    
}

?>