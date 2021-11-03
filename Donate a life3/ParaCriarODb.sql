create database jogo
default character set utf8 
default collate utf8_general_ci;

use jogo;

CREATE TABLE `usuarios` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `nome` varchar(50) NOT NULL,
   `senha` varchar(50) NOT NULL,
   `sexo` enum('m','f') DEFAULT NULL,
   `cap` int,
   PRIMARY KEY (`id`)
 ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;