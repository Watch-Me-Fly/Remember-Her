<?php
    class Admin
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
        // -- -------------- getters
        public function getId():int
        {
            return $this->id;
        }
        public function getUsername() :string
        {
            return $this->username;
        }
        public function getPassword() :string
        {
            return $this->password;
        }
        public function getEmail() :string
        {
            return $this->email;
        }
        public function getLocation() :string
        {
            return $this->location;
        }
        public function getIsAdmin():bool
        {
            return $this->isAdmin;
        }

        // -- -------------- setters
        public function setId(int $id)
        {
            $this->id = $id;
        }
        public function setUsername(string $username)
        {
            $this->username = $username;
        }
        public function setPassword(string $password)
        {
            $this->password = $password;
        }
        public function setEmail(string $email)
        {
            $this->email = $email;
        }
        public function setLocation(string $location)
        {
            $this->location = $location;
        }
        public function setIsAdmin(bool $isAdmin):bool
        {
            if ($this->isAdmin == null)
            {
                return false;
            }
            $this->isAdmin = $isAdmin;
        }
        
    }
?>
