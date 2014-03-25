<?php

    function connection($database, $param){
        
        include_once($param.".inc.php");
        
        $dsn="mysql:host=".MYHOST.";dbname=".$database;
        $user=MYUSER;
        $pass=MYPASS;
        
        try{   
            $pdo = new PDO($dsn,$user,$pass);
            return $pdo;            
        } catch (PDOException $except){
            echo "Connection Failed ",$except->getMessage();
            return FALSE;
            exit();
        }
    }
    
    function disconnect(){
        return $pdo = NULL;
    }

