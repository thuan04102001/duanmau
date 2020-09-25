<?php
    function connect(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=bantool", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
            //echo "Connected successfully";
        } catch(PDOException $e) {
            //echo "Connection failed: " . $e->getMessage();
        }
    }
?>