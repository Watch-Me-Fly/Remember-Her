<?php

    class Admin
    {
        private $id;
        private $username;
        private $password;
        private $email;
        private $location;
        private $isAdmin;

        function __construct(
            int $id,
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

        // ANCHOR type setters
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
        public function getAdminInfo()
        {
            return json_encode([
                'id' => $this->id,
                'username' => $this->username,
                'password' => $this->password,
                'email' => $this->email,
                'location' => $this->location,
                'isAdmin' => $this->isAdmin,
            ]);
        }

    }

?>