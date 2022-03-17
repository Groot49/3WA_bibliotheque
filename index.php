<?php
session_start();

require "./controller/HomeController.php";
require "./controller/UserController.php";
require "./controller/BookController.php";

$url = isset($_GET['url']) ? $_GET['url'] : "home";

$homeController = new HomeController();
$userController = new UserController();
$bookController = new BookController();

switch($url){
    
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°° ROUTES AVEC VUE °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    case "home" : 
        $homeController->home();
        break;
        
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°° ROUTES SANS VUE °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°


}