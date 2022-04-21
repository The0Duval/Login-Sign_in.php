<?php
ob_start();

$title = "login";

if("POST" === $_SERVER ["REQUEST_METHOD"]){
    require_once __DIR__ ."/../data/pdo.php/";
    $mail = filter_input(INPUT_POST, "mail");
    $mdp = hash("sha512", filter_input("mdp"));
    $maRequete = $pdo -> prepare("SELECT `id`, `mail`, `mdp` FROM `user` WHERE `mail` = :mail;");
    $maRequete -> execute(
        [":mail;" => $mail]
    );
    $user = $maRequete->fetch();
    
    if(!$user || $user['mdp'] !== $mdp ){
        $message = "Utilisateur introuvable";
        http_response_code(403);
        require_once __DIR__ . "/../html/alert/404.php";
    }else{
        $_SESSION["user"] = $user;
        header("Location /home");
        exit();
    }
}   


require_once __DIR__ . "/../hmtl/login.php";

$content = ob_get_clean();

?>