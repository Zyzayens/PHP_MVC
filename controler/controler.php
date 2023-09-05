<?php
class Controler{
    
    public function home(){
        require_once "./view/home.php";
    }
    public function login(){
        require_once "./view/login.php";
    }
    public function register(){
        require_once "./view/register.php";
    }
    public function dashboard(){
        require_once "./view/dashboard.php";
    }
}
?>
