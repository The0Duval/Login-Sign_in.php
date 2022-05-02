<?php 
 $engine = "mysql";
 $host = "localhost";
 $port = "3306";
 $dbname="wefound";
 $username ="root";
 $password = "root";
 $pdo = new PDO("$engine:host=$host:$port",$username,$password);

 $marequete = $pdo ->prepare("CREATE DATABASE IF NOT EXISTS `wefound`
 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $marequete->execute();

$pdo = new PDO("$engine:host=$host:$port;dbname=$dbname", $username, $password);
$maRequete = $pdo->prepare(
    "CREATE TABLE IF NOT EXISTS `user`(
        `id` INT NOT NULL AUTO_INCREMENT,
        `mail` VARCHAR(255) NOT NULL,
        `password` VARCHAR(256) NOT NULL,
    PRIMARY KEY(`id`)
    )ENGINE=InnoDB;

    CREATE TABLE IF NOT EXISTS `founders`( 
        `id` INT NOT NULL AUTO_INCREMENT,
        `name` VARCHAR(255) NOT NULL,
        `school` VARCHAR(255) NOT NULL,
    PRIMARY KEY(`id`)
    ) ENGINE=InnoDB;");

$marequete->execute();



 ?>