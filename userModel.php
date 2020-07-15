<?php
    class User{

        private $userID;
        private $name;
        private $email;
        private $password;
        private $isAdmin;

        public function __construct($name, $email, $password)
        {
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }

        public function getName()
        {
            return $this->name;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function getPassword()
        {
            return $this->password;
        }
        public function getIsAdmin()
        {
            return $this->isAdmin;
        }
        
        public function setName($name)
        {
            $this->name = $name;
        }
    }
?>