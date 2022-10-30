<?php

class SignupController extends Signup
{
    private $username;
    private $password;
    private $email;
    private $location;
    private $isAdmin;

    public function __construct(
        string $username, 
        string $password, 
        string $email, 
        string $location, 
        bool $isAdmin = false
    )
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->location = $location;
        $this->isAdmin = $isAdmin;
    }

    // when to sign up an admin ?
    public function signupUser()
    {
        if($this->isNotEmptyInput() == false)
        {
            header('location: /admin-login?error=fieldsCheck');
            exit();
        }
        if($this->checkUsername() == false)
        {
            header('location: /admin-login?error=invalid-username');
            exit();
        }
        if($this->checkEmail() == false)
        {
            header('location: /admin-login?error=invalid-email');
            exit();
        }
        if($this->matchUser() == false)
        {
            header('location: /admin-login?error=UsernameOrEmailTaken');
            exit();
        }
        // if no errors after all of the above checks : signup user
        $this->setUser(
            $this->username, 
            $this->password,
            $this->email, 
            $this->location
        );
        
    }

    // check if none of the fields is empty
    private function isNotEmptyInput():bool
    {
        if ( 
            empty($this->username) || empty($this->password) || 
            empty($this->email) || empty($this->location)
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

    // check if username is valid
    private function checkUsername():bool
    {
        // check if characters exist inside username (searches for patterns)
        // restricting characters to this indicated
        if (!preg_match("/^[a-zA-Z0-9]*/", $this->username))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    // check email address
    private function checkEmail():bool
    {
        // use a filter to check format
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    // match password (if there are 2 fields for password)
    // private function matchPassword()
    // {
    //     if ($this->password !== $this->passwordRepeat)
    //     {
    //         $result = false;
    //     }
    //     else
    //     {
    //         $result = true;
    //     }
    //     return $result;
    // }

    // to check the username and password from signup class
    private function matchUser():bool
    {
        if ( 
            $this->checkUser($this->username, $this->email)
        )
        {
            // if it is true, it means that user exists, refuse registration
            $result = false;
        }
        else
        {
            // if check user is false, user does not exist, register ok
            $result = true;
        }
        return $result;
    }
}

?>
