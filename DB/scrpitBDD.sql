-- MySQL Script generated by MySQL Workbench
-- Mon May 30 16:53:16 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema happy_health
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema happy_health
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `happy_health` DEFAULT CHARACTER SET utf8 ;
USE `happy_health` ;

-- -----------------------------------------------------
-- Table `happy_health`.`region`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `happy_health`.`region` (
  `id_region` INT NOT NULL AUTO_INCREMENT,
  `name_region` VARCHAR(255) NULL,
  PRIMARY KEY (`id_region`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `happy_health`.`country`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `happy_health`.`country` (
  `id_country` INT NOT NULL AUTO_INCREMENT,
  `name_country` VARCHAR(45) NULL,
  `region_id_region` INT NOT NULL,
  PRIMARY KEY (`id_country`, `region_id_region`),
  INDEX `fk_country_region1_idx` (`region_id_region` ASC) ,
  CONSTRAINT `fk_country_region1`
    FOREIGN KEY (`region_id_region`)
    REFERENCES `happy_health`.`region` (`id_region`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `happy_health`.`years`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `happy_health`.`years` (
  `id_years` INT NOT NULL AUTO_INCREMENT,
  `year` INT NULL,
  PRIMARY KEY (`id_years`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `happy_health`.`values`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `happy_health`.`values` (
  `id_values` INT NOT NULL AUTO_INCREMENT,
  `value` FLOAT NULL,
  PRIMARY KEY (`id_values`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `happy_health`.`country_has_years`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `happy_health`.`country_has_years` (
  `country_id` INT NOT NULL,
  `years_id` INT NOT NULL,
  `happiness_rank` INT NOT NULL,
  `happiness_score` INT NOT NULL,
  `health_score` INT NOT NULL,
  PRIMARY KEY (`country_id`, `years_id`, `happiness_rank`, `happiness_score`, `health_score`),
  INDEX `fk_country_has_years_years1_idx` (`years_id` ASC) ,
  INDEX `fk_country_has_years_country1_idx` (`country_id` ASC) ,
  INDEX `fk_country_has_years_values1_idx` (`happiness_rank` ASC) ,
  INDEX `fk_country_has_years_values2_idx` (`happiness_score` ASC) ,
  INDEX `fk_country_has_years_values3_idx` (`health_score` ASC) ,
  CONSTRAINT `fk_country_has_years_country1`
    FOREIGN KEY (`country_id`)
    REFERENCES `happy_health`.`country` (`id_country`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_country_has_years_years1`
    FOREIGN KEY (`years_id`)
    REFERENCES `happy_health`.`years` (`id_years`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_country_has_years_values1`
    FOREIGN KEY (`happiness_rank`)
    REFERENCES `happy_health`.`values` (`id_values`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_country_has_years_values2`
    FOREIGN KEY (`happiness_score`)
    REFERENCES `happy_health`.`values` (`id_values`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_country_has_years_values3`
    FOREIGN KEY (`health_score`)
    REFERENCES `happy_health`.`values` (`id_values`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
