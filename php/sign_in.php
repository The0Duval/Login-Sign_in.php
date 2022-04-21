<?php 

ob_start();

$title = "sign up";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $mail = filter_input(INPUT_POST,"mail");
    $mdp = hash("sha512",filter_input(INPUT_POST,"mdp"));
    $maRequete = $pdo ->prepare("SELECT`mail` FROM `user` WHERE `mail`= :mail;");
    $maRequete -> execute([
        ":mail" => $mail
    ]);

    $user = $maRequete -> fetch();
    if($user == false){
        $maRequete = $pdo->prepare("INSERT INTO `user` (`mail`, `mdp`) VALUES(:mail, :mdp)");
        $maRequete->execute([
            ":mail" => $mail,
            ":mdp" => $mdp
        ]);

        http_response_code(302);
        header('Location : /login');
        exit();
    }else{
        $message = "l'utilisateur existe déja";
        http_response_code(403);
        require_once __DIR__ . "/../html/alerts/baniere.php";
    }

}

require_once __DIR__ . '/../html_partial/sign_in.php';

$content = ob_get_clean();