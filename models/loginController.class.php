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
            header('location:/admin-login?error=fieldsCheck');
            exit();
        }
        // if no errors after all of the above checks : login user
        $this->getUser(
            $this->username, 
            $this->password
        );
        
        header('location:/admin/dashboard');
        exit();
    }
    /**============================================
    *     check if none of the fields is empty
    *=============================================**/
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
