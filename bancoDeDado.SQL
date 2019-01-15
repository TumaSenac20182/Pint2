-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema kk2b9oe1yvatj576
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema kk2b9oe1yvatj576
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `kk2b9oe1yvatj576` DEFAULT CHARACTER SET utf8 ;
USE `kk2b9oe1yvatj576`;

-- -----------------------------------------------------
-- Table `kk2b9oe1yvatj576`.`login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kk2b9oe1yvatj576`.`login` (
  `id_table1` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(250) NOT NULL,
  `email` VARCHAR(250) NOT NULL,
  `telefone` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_table1`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kk2b9oe1yvatj576`.`loja`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kk2b9oe1yvatj576`.`loja` (
  `id_dadoloja` INT NOT NULL,
  `nome` VARCHAR(45) NULL,
  `endereco` VARCHAR(45) NULL,
  `cnpj` VARCHAR(45) NULL,
  `seguimento` VARCHAR(45) NULL,
  `login_id_table1` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id_dadoloja`),
  INDEX `fk_loja_login1_idx` (`login_id_table1` ASC),
  CONSTRAINT `fk_loja_login1`
    FOREIGN KEY (`login_id_table1`)
    REFERENCES `kk2b9oe1yvatj576`.`login` (`id_table1`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kk2b9oe1yvatj576`.`endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kk2b9oe1yvatj576`.`endereco` (
  `id_endereco` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `logradouro` VARCHAR(250) NOT NULL,
  `bairro` VARCHAR(250) NOT NULL,
  `numero` INT NOT NULL,
  `cidade` VARCHAR(250) NOT NULL,
  `UFF` VARCHAR(2) NOT NULL,
  `referencias` VARCHAR(300) NULL,
  `loja_id_dadoloja` INT NOT NULL,
  PRIMARY KEY (`id_endereco`),
  INDEX `fk_endereco_loja_idx` (`loja_id_dadoloja` ASC),
  CONSTRAINT `fk_endereco_loja`
    FOREIGN KEY (`loja_id_dadoloja`)
    REFERENCES `kk2b9oe1yvatj576`.`loja` (`id_dadoloja`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kk2b9oe1yvatj576`.`produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kk2b9oe1yvatj576`.`produtos` (
  `id_produtos` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(250) NULL,
  `categoria` VARCHAR(250) NULL,
  `preco` DOUBLE NULL,
  `descricao` VARCHAR(300) NULL,
  `fabricante` VARCHAR(250) NULL,
  `loja_id_dadoloja` INT NOT NULL,
  PRIMARY KEY (`id_produtos`),
  INDEX `fk_produtos_loja1_idx` (`loja_id_dadoloja` ASC),
  CONSTRAINT `fk_produtos_loja1`
    FOREIGN KEY (`loja_id_dadoloja`)
    REFERENCES `kk2b9oe1yvatj576`.`loja` (`id_dadoloja`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
