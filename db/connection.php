<?php
    
    /**
     *Provides the database connection
     *
     *PHP version 7
     *
     *@author Dan Capps <dcapps@mail.greenriver.edu>
     *@version 1.0
     */
    
    /**
     *Connects to the database
     *
     *@return true if connection is successful, otherwise false.
     */
    function getConnection()
    {
        $dsn = 'mysql:host=localhost;dbname=dcapps_conciears';
        $username = 'dcapps_conciears';
        $password = 'W!nn1e123';
    
        
        try{
            $connection = new PDO($dsn, $username, $password);
            
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $connection;
        } catch(PDOException $ex){
            
            echo 'Exception connecting to DB: ' .$ex->getMessage();
            exit();
        }
        
        return $connection;
        
    }
    
?>   