<?php

class login_bd{
    
    
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
    
    
    function buscar_usuario($email, $password){
        
        $connect = $this->abrir_conexao();

        $sql = "SELECT * FROM usuarios WHERE  email = '".$email."'";
        $result = $connect->query($sql);
        
        $resultado_array = mysqli_fetch_array($result);
        
        $resultado_login = [];
        
        if(!empty($resultado_array)){
            
            if($password == $resultado_array[3]){
                
                $resultado_login[0] = "login";
                $resultado_login[1] = $resultado_array[1];
                $resultado_login[2] = $resultado_array[2];
                
            }else{
                
                $resultado_login[0] = "password_dont_match";
                $resultado_login[1] = $resultado_array[1];
                $resultado_login[2] = $resultado_array[2];
                
            }
            
            
            
        }else{
            
            $resultado_login[0] = "email_dont_match";
            
        }       
        
        
        $connect->close();
        
        return $resultado_login;
        
    }
    
}


?>