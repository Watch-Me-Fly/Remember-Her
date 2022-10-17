<?php
/**============================================
*     Connect to the database in OOP format
*=============================================**/
class DBConnection
{
    private $DATABASE_DSN = 'mysql:host=localhost;dbname=remember_her';
    private $DATABASE_USER = 'root';
    private $DATABASE_PASSWORD = '';
    
    protected $dbConnect;

    public function __construct()
    {
        if (!isset($this->dbConnect))
        {
            $this->dbConnect = new PDO($this->DATABASE_DSN, $this->DATABASE_USER, $this->DATABASE_PASSWORD, [
                PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,
            ]);
        }
        try 
        {           
            // echo "✅ Connection to database is established ✅";
            
            return $this->dbConnect;
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