
<?php
require "../../data/pdo.php";
$maRequete = $pdo->prepare("SELECT * FROM `founders`");
$maRequete->execute();
$founder = $maRequete->fetchAll(PDO::FETCH_ASSOC);
$title = "wefound db";
?>

<table class= "studentTable">
    <caption>Les étudiants référencée</caption>
    <tr>
        <th><p class="">Name</p></th>
        <th><p class="">First name</p></th>
    </tr>

    <?php foreach($founder as $founders): ?>
        <tr>
            <td><?=$founders["name"]?></td>
            <td><?=$founders["school"]?></td>
        </tr>
    <?php endforeach; ?> 
</table>
£