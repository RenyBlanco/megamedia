-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema megamedia
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `megamedia` ;

-- -----------------------------------------------------
-- Schema megamedia
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `megamedia` DEFAULT CHARACTER SET utf8 ;
USE `megamedia` ;

-- -----------------------------------------------------
-- Table `megamedia`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `megamedia`.`usuarios` ;

CREATE TABLE IF NOT EXISTS `megamedia`.`usuarios` (
  `idusuarios` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `correo` VARCHAR(100) NOT NULL,
  `clave` VARCHAR(254) NOT NULL,
  `estado` TINYINT NULL DEFAULT 1,
  PRIMARY KEY (`idusuarios`))
ENGINE = InnoDB;

INSERT INTO `usuarios` (`idusuarios`, `nombre`, `correo`, `clave`, `estado`) VALUES
(1, 'Reinaldo Blanco', 'rey.blanco@yahoo.com', '$2y$10$pyR3uWUnHnQO7GM6MkqaA.ck49rURMuP8sdJ2yi1gczjNidOlE1UC', 1);
-- -----------------------------------------------------
-- Table `megamedia`.`notas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `megamedia`.`notas` ;

CREATE TABLE IF NOT EXISTS `megamedia`.`notas` (
  `idnotas` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(150) NOT NULL,
  `tipo_nota` TINYINT NOT NULL,
  `nota` TEXT NOT NULL,
  `fecha` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `idusuarios` INT NOT NULL,
  `estado` TINYINT NULL DEFAULT 1,
  PRIMARY KEY (`idnotas`),
  INDEX `fk_notas_usuarios_idx` (`idusuarios` ASC) VISIBLE,
  CONSTRAINT `fk_notas_usuarios`
    FOREIGN KEY (`idusuarios`)
    REFERENCES `megamedia`.`usuarios` (`idusuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

INSERT INTO `notas` (`idnotas`, `titulo`, `tipo_nota`, `nota`, `fecha`, `idusuarios`, `estado`) VALUES
(1, 'Prueba de nota', 1, 'Es un texto de prueba para verificar la opcion de guardar\r\n  ', '2024-01-19 09:37:47', 1, 1),
(2, 'Prueba de Noticia', 3, 'Este texto es para probar la opcion de editar (editado)\r\n ', '2024-01-19 09:54:31', 1, 1);

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
