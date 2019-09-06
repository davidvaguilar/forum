<?php 
    try{
        $db = new PDO('mysql:host='. DBSQLMY_SERVER. ';dbname='.DBSQLMY_DATABASE.';charset=utf8',
                        DBSQLMY_SERVER_USERNAME,
                        '',
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                          PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
                     );
       // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        
    }  
?>