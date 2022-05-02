<?php
require "../../data/pdo.php";
$maRequete = $pdo->prepare("SELECT * FROM `user`");
$maRequete->execute();
$users = $maRequete->fetchAll(PDO::FETCH_ASSOC);
$title = "wefound db";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<body>
        <a href="/login">page login</a>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>mail</th>
                    <th>password</th>
                    <th>supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                    <tr>
                        <td><?= $user["id"] ?></td>
                        <td> <?= $user["mail"] ?></td>
                        <td><?=$user["mdp"] ?></td>
                        <td>
                            <a href="supp.php?id=<?=$user["id"]?>" >
                                supprimer
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>