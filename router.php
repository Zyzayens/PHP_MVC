<?php 

        $url = $_SERVER["REQUEST_URI"];
        $path = parse_url($url, PHP_URL_PATH);
        $parts = explode('/', $path);
        $page = '/'.end($parts);

         
    require_once "./controler/controler.php";

    $controler = new controler();
    
    switch($page){
        case "/home":
            $controler->home();
            break;
        case "/login":
            $controler->login();
            break;
        case "/register":
            $controler->register();
            break;
        case "/dashboard":
            $controler->dashboard();
            break;
        default:
            $controler->home();
            break;
    }

?>