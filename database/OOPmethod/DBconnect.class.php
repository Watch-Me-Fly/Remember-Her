<?php
/**============================================
*     Connect to the database in OOP format
*=============================================**/
class DBConnection
{
    protected $dbConnect;

    public static function PDO()
    {
        $DATABASE_DSN = 'mysql:host=localhost;dbname=remember_her';
        $DATABASE_USER = 'root';
        $DATABASE_PASSWORD = '';

        if (!isset($dbConnect))
        {
            $dbConnect = new PDO($DATABASE_DSN, $DATABASE_USER, $DATABASE_PASSWORD, [
                PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,
            ]);
        }
        try 
        {           
            // echo "✅ Connection to database is established ✅";
            
            return $dbConnect;
        } 
        // if connection fails, catch the exception 
        catch (PDOException $Exception) 
        {

            // obtain details of the exception error
            throw new PDOException(
                $Exception->getMessage( ) , 
                $Exception->getCode( )
            );
            
            // tell me that connection failed
            exit('❌ Failed to connect to database ❌');
        }
    }
}
?>