<?php

    class Victim 
    {
        protected $id;
        protected $postCreationDate;
        protected $firstName;
        protected $lastName;
        protected $age;
        protected $countryOfOrigin;
        protected $photo;
        protected $twitterTag;
        protected $source1;
        protected $source2;
        protected $source3;
        protected $source4;
        protected $source5;
        protected $isEnabled;
        
        // -- -------------- constructors
        public function __construct(
            int $id,
            string $postCreationDate,
            string $firstName, 
            string $lastName, 
            int $age, 
            string $countryOfOrigin, 
            string $photo,
            string $twitterTag, 
            string $source1,
            string $source2, 
            string $source3, 
            string $source4, 
            string $source5, 
            bool $isEnabled = false
        )
        {
            $this->id = $id;
            $this->postCreationDate = $postCreationDate;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->age = $age;
            $this->countryOfOrigin = $countryOfOrigin;
            $this->photo = $photo;
            $this->twitterTag = $twitterTag;
            $this->source1 = $source1;
            $this->source2 = $source2;
            $this->source3 = $source3;
            $this->source4 = $source4;
            $this->source5 = $source5;
            $this->isEnabled = $isEnabled;
        }
        // -- -------------- getters
        public function getId():int
        {
            return $this->id;
        }
        public function getPostCreationDate():string
        {
            return $this->postCreationDate;
        }
        public function getFirstName():string
        {
            return $this->firstName;
        }
        public function getLastName():string
        {
            return $this->lastName;
        }
        public function getAge():int
        {
            return $this->age;
        }
        public function getCountryOfOrigin():string
        {
            return $this->countryOfOrigin;
        }
        public function getPhoto():string
        {
            return $this->photo;
        }
        
        public function getTwitterTag():string
        {
            return $this->twitterTag;
        }
        public function getSource1():string
        {
            return $this->source1;
        }
        public function getSource2():string
        {
            return $this->source2;
        }
        public function getSource3():string
        {
            return $this->source3;
        }
        public function getSource4():string
        {
            return $this->source4;
        }
        public function getSource5():string
        {
            return $this->source5;
        }
        public function getIsEnabled():bool
        {
            return $this->isEnabled;
        }
        // ANCHOR type setters
        // -- -------------- setters
        public function setId(int $id)
        {
            $this->id = $id;
        }
        public function setPostCreationDate($postCreationDate)
        {
            $this->postCreationDate = $postCreationDate;
        }
        public function setFirstName(string $firstName)
        {
            $this->firstName = $firstName;
        }
        public function setLastName(string $lastName)
        {
            $this->lastName = $lastName;
        }
        public function setAge(int $age)
        {
            $this->age = $age;
        }
        public function setCountryOfOrigin(string $countryOfOrigin)
        {
            $this->countryOfOrigin = $countryOfOrigin;
        }
        public function setPhoto(string $photo)
        {
            $this->photo = $photo;
        }
        
        public function setTwitterTag(string $twitterTag)
        {
            $this->twitterTag = $twitterTag;
        }
        public function setSource1(string $source1)
        {
            $this->source1 = $source1;
        }
        public function setSource2(string $source2)
        {
            $this->source2 = $source2;
        }
        public function setSource3(string $source3)
        {
            $this->source3 = $source3;
        }
        public function setSource4(string $source4)
        {
            $this->source4 = $source4;
        }
        public function setSource5(string $source5)
        {
            $this->source5 = $source5;
        }
        public function setIsEnabled(bool $isEnabled)
        {
            $this->isEnabled = $isEnabled;
        }

    }

?>