CREATE DATABASE IF NOT EXISTS `wefound`
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE `wefound`;

CREATE TABLE IF NOT EXISTS `user`(
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
) ENGINE=InnoDB;

-- INSERT INTO `user` (`mail`,`password`)
-- values
-- (`toto`,)