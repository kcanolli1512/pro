<?php
include_once '../control/userController.php';
    if(isset($_POST['button'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $view=new InsertView();
        $view->insertUser($name,$email,$password);

    }
    class InsertView{
        public function insertUser($name,$email,$password){
            $controller=new UserController();
            $response = $controller->InsUser($name,$email,$password);
            
            if($response){
                ?>
                <h1>U regjistrua me sukses</h1>
                <?php
            }
            else{
                ?>
                <h1>Nuk u regjistrua me sukses</h1>
                <?php
            }
        }
    }
?>