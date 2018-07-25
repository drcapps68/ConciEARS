 <?php 
    /**
     *Provides the database connection
     *
     *PHP version 7
     *
     *@author Liz Mahoney <emahoney5@mail.greenriver.edu>
     *@version 1.0
     */
    
    /**
     *Connects to the database
     *
     *@return true if connection is successful, otherwise false.
     */
    function getConnection()
    {
        $dsn = 'mysql:host=localhost;dbname=conciear_database';
        $username = 'conciear_admin';
        $password = 'x8Hy,g7WTrU7';
    
        
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