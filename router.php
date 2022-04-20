<?php

$uri = $_SESSION['REQUEST_URI'];

if ($uri == '/entrer.php'){
    
    if (!isset($_SESSION['user'])){ 
        header('Location:/login');
        exit;
    }else {
        header('Location:/projet.php');
        exit;
    }
} else if ($uri != '/login' && $uri != '/sign_in') {
    
    if(!isset($_SESSION['user'])){
        header('Location:/login');
        exit;
    }
}


switch ($uri) {
    case'/login':
        require_once __DIR__ .'/php_partial/login.php';
        break;

    case'/sign_in':
        require_once __DIR__.'php_partial/sign_in.php';
        break;

    case'/home':
        require_once __DIR__.'/php_partial/home.php';
        break;
    
    default:
        http_response_code(404);
        $content = file_get_contents(__DIR__ . '/html_partial/alerts/404.php');
}

require_once __DIR__.'/html_partial/bases_html.php';
?>