<?php

require_once("../functions/postagens.php");

$action=$_SERVER["REQUEST_URI"];

$post = ["/postagem"=>"posta",];

$get = ["/"=>"lispost",];

switch ($_SERVER["REQUEST_METHOD"]) {
    case 'GET':
        $function= $get[$action];
        call_user_func($function);
        break;
    case 'POST':
        $function= $post[$action];
        call_user_func($function,$_POST);
        break;
    default:
        # code...
        break;
    
}