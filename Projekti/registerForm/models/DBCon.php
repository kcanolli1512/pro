<?php
    class DBconnection{
        public function getConnection(){
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $db='phpmyadmin';
            $conn=mysqli_connect($servername, $username, $password, $db);
            if(!$conn){
            die("Connection failed" . mysqli_connect_error());
        }            
            return $conn;
            
        }
    }

?>