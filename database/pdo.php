<?php
// ';port=' . $DATABASE_PORT .

    // creating a new connection class to the database
    function pdo_connect() {

        // define connection variables
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'root';
        $DATABASE_PASSWORD = '';
        $DATABASE_PORT = '';
        $DATABASE_NAME = 'remember_her';

        // create an instance of the database
        $pdo = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME , $DATABASE_USER, $DATABASE_PASSWORD);
        // $pdo = new PDO('mysql:host=localhost;dbname=remember_her;', "root", "");

        // try to connect to the database
        try 
        {
            // asking it to tell us what kind of errors we are having
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               
            echo "✅ Connection is established ✅";
            
            return $pdo;
        } 
        // if connection fails, catch the exception 
        catch (PDOException $Exception) 
        {

            // obtain details of the exception error
            throw new PDOException(
                $Exception->getMessage( ) , 
                $Exception->getCode( )
            );

            echo "❌ Failed to connect to database ❌";
            
            // tell me that connection failed
            exit('❌ Failed to connect to database ❌');
        }
    }
    
    pdo_connect();
?>
