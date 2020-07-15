<?php
include_once '../models/userMapper.php';
include_once '../models/userModel.php';

    class UserController{
        public  function InsUser($name,$email,$password){
            $useri=new User($name,$email,$password);
            $userMapper=new UserMapper($useri);
            $userMapper->Insert($name,$email,$password);
            return true;
        } 
    }
?>