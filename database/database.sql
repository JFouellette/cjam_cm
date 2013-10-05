SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `cjam` ;
CREATE SCHEMA IF NOT EXISTS `cjam` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `cjam` ;

-- -----------------------------------------------------
-- Table `cjam`.`cm_users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjam`.`cm_users` ;

CREATE TABLE IF NOT EXISTS `cjam`.`cm_users` (
  `name` VARCHAR(45) NOT NULL,
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `privilege` INT NOT NULL DEFAULT 1,
  `phone` VARCHAR(45) NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cjam`.`cm_sessions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjam`.`cm_sessions` ;

CREATE TABLE IF NOT EXISTS `cjam`.`cm_sessions` (
  `session_id` VARCHAR(40) NOT NULL DEFAULT 0,
  `ip_address` VARCHAR(45) NOT NULL DEFAULT 0 COMMENT '	',
  `user_agent` VARCHAR(120) NOT NULL,
  `last_activity` INT(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` TEXT NOT NULL,
  PRIMARY KEY (`session_id`),
  INDEX `last_activity_idx` (`last_activity` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cjam`.`cm_meetings`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjam`.`cm_meetings` ;

CREATE TABLE IF NOT EXISTS `cjam`.`cm_meetings` (
  `info_id` INT NOT NULL,
  `client_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`info_id`, `client_id`, `user_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cjam`.`cm_infonights`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjam`.`cm_infonights` ;

CREATE TABLE IF NOT EXISTS `cjam`.`cm_infonights` (
  `info_id` INT NOT NULL,
  `datetime` DATETIME NOT NULL,
  PRIMARY KEY (`info_id`),
  CONSTRAINT `id`
    FOREIGN KEY (`info_id`)
    REFERENCES `cjam`.`cm_meetings` (`info_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cjam`.`cm_clients`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjam`.`cm_clients` ;

CREATE TABLE IF NOT EXISTS `cjam`.`cm_clients` (
  `client_id` INT NOT NULL,
  `firstname` VARCHAR(45) NULL,
  `lastname` VARCHAR(45) NULL,
  `phone` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `repondeur` TINYINT(1) NULL,
  `callback` TINYINT(1) NULL,
  `question` VARCHAR(45) NULL,
  `facts` VARCHAR(45) NULL,
  `language` INT NULL,
  `available` INT NULL,
  PRIMARY KEY (`client_id`),
  CONSTRAINT `client_id`
    FOREIGN KEY (`client_id`)
    REFERENCES `cjam`.`cm_meetings` (`info_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cjam`.`cm_research`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjam`.`cm_research` ;

CREATE TABLE IF NOT EXISTS `cjam`.`cm_research` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `subject` VARCHAR(45) NULL,
  `question` TEXT NULL,
  `research` LONGTEXT NULL,
  `user` INT NOT NULL,
  `client_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `client_id_fk_idx` (`client_id` ASC),
  CONSTRAINT `user_fk`
    FOREIGN KEY (`id`)
    REFERENCES `cjam`.`cm_users` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `client_id_fk`
    FOREIGN KEY (`client_id`)
    REFERENCES `cjam`.`cm_clients` (`client_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
