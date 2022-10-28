<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/database/OOPmethod/admin.crud.php');

    class Admin extends AdminCRUD
    {
        public $id;
        public $username;
        public $password;
        public $email;
        public $location;
        public $isAdmin;

        function __construct(
            ?int $id,
            string $username, 
            string $password, 
            string $email, 
            string $location, 
            bool $isAdmin = false
            )
        {
            $this->id = $id;
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
            $this->location = $location;
            $this->isAdmin = $isAdmin;
        }
        
    }
?>
