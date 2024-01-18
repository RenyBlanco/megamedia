-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `megamedia` ;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `megamedia` DEFAULT CHARACTER SET utf8 ;
USE `megamedia` ;

-- -----------------------------------------------------
-- Table `mydb`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `megamedia`.`usuarios` ;

CREATE TABLE IF NOT EXISTS `megamedia`.`usuarios` (
  `idusuarios` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `correo` VARCHAR(100) NOT NULL,
  `clave` VARCHAR(254) NOT NULL,
  PRIMARY KEY (`idusuarios`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`notas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `megamedia`.`notas` ;

CREATE TABLE IF NOT EXISTS `megamedia`.`notas` (
  `idnotas` INT NOT NULL AUTO_INCREMENT,
  `tipo_nota` TINYINT NOT NULL,
  `nota` TEXT NOT NULL,
  `idusuarios` INT NOT NULL,
  PRIMARY KEY (`idnotas`),
  INDEX `fk_notas_usuarios_idx` (`idusuarios` ASC) VISIBLE,
  CONSTRAINT `fk_notas_usuarios`
    FOREIGN KEY (`idusuarios`)
    REFERENCES `megamedia`.`usuarios` (`idusuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
