<?php
// DB functions
require_once($_SERVER['DOCUMENT_ROOT'].'/database/OOPmethod/admin.CRUD.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/database/OOPmethod/Query.class.php');

class Signup extends AdminCRUD
{
    protected function setUser($username, $password, $email, $location)
    {
        // before inserting pw : encrypt it
        $hashPassword = md5($password);
        
        $admin = [
            "username" => $username, 
            "password" => $hashPassword, 
            "email" => $email, 
            "location" => $location
        ];

        $query = $this->create($admin);

        if ($query)
        {
            header('location: /error?error=failed-statement');
            exit();
        }

    }

    // check if username or email exist in database
    protected function checkUser($username, $email):bool
    {
        $sqlStatement = "SELECT username FROM Admins where username= :username OR email= :email";
        $query = Query::sqlPrepare($sqlStatement);

        $variables = [
            ":username" => $username,
            ":email" => $email
        ];
        $query->execute($variables);

        // check variable in DB (how many rows have these usernames or email)
        if($query->rowCount() == 0)
        {
            $resultCheck= false;
        }
        else
        {
            $resultCheck= true;
        }
        return $resultCheck;
    }

    protected function getUser()
    {        
        $query = $this->read();

        if ($query)
        {
            header('location: /error?error=failed-statement');
            exit();
        }

    }
}

?>