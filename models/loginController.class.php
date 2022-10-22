<?php

class LoginController extends Login
{
    private $username;
    private $password;

    public function __construct(
        string $username, 
        string $password
    )
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function loginUser()
    {
        if($this->isNotEmptyInput() == false)
        {
            $errorMessage = "Please fill in all the required fields";
            header('location: /error?error=fieldsCheck');
            exit();
        }
        // if no errors after all of the above checks : signup user
        $this->getUser(
            $this->username, 
            $this->password
        );
        header('location: /admin');
        
    }

    // check if none of the fields is empty
    private function isNotEmptyInput():bool
    {
        if ( 
            empty($this->username) || empty($this->password) 
        )
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }
    
}

?>