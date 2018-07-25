CREATE SCHEMA `projeto_contatos` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `projeto_contatos`.`contatos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NULL,
  `email` VARCHAR(100) NOT NULL,
  `celular` VARCHAR(100) NULL,
  `fixo` VARCHAR(100) NULL,
  `trabalho` VARCHAR(100) NULL,
  `grupo` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));


