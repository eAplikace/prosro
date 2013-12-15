SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `prosro` ;
CREATE SCHEMA IF NOT EXISTS `prosro` DEFAULT CHARACTER SET utf8 COLLATE utf8_czech_ci;
USE `prosro` ;

-- -----------------------------------------------------
-- Table `prosro`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `prosro`.`user` ;

CREATE  TABLE IF NOT EXISTS `prosro`.`user` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `pid` INT UNSIGNED NULL DEFAULT NULL COMMENT 'IS NULL - main user (corporation)\nNOT NULL - employee' ,
  `admin` TINYINT(1)  NOT NULL DEFAULT 0 ,
  `cts` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `uts` DATETIME NOT NULL ,
  `ico` VARCHAR(20) NOT NULL ,
  `email` VARCHAR(255) NOT NULL ,
  `email_confirm_code` VARCHAR(45) NULL ,
  `email_confirm_code_ts` DATETIME NULL ,
  `email_confirmed_ts` DATETIME NULL ,
  `pswd` VARCHAR(45) NULL ,
  `pswd_confirm_code` VARCHAR(45) NULL ,
  `pswd_confirm_code_ts` DATETIME NULL ,
  `pswd_changed_ts` DATETIME NULL ,
  `agreement_ts` DATETIME NULL ,
  `active` INT(1) NOT NULL DEFAULT 0 ,
  `last_login` DATETIME NULL ,
  `company_name` VARCHAR(255) NULL ,
  `dic` VARCHAR(20) NULL ,
  `company_street` VARCHAR(225) NULL ,
  `company_town` VARCHAR(225) NULL ,
  `company_psc` VARCHAR(10) NULL ,
  `person_name` VARCHAR(255) NULL ,
  `person_name_prefix` VARCHAR(45) NULL ,
  `person_name_postfix` VARCHAR(45) NULL ,
  `phone` VARCHAR(45) NULL ,
  `other_info` TEXT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_user_user1` (`pid` ASC) ,
  CONSTRAINT `fk_user_user1`
    FOREIGN KEY (`pid` )
    REFERENCES `prosro`.`user` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prosro`.`module_priv`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `prosro`.`module_priv` ;

CREATE  TABLE IF NOT EXISTS `prosro`.`module_priv` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `module_id` INT NOT NULL ,
  `name` VARCHAR(127) NOT NULL ,
  `description` TEXT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prosro`.`module_priv_user_rel`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `prosro`.`module_priv_user_rel` ;

CREATE  TABLE IF NOT EXISTS `prosro`.`module_priv_user_rel` (
  `module_priv_id` INT UNSIGNED NOT NULL ,
  `user_id` INT UNSIGNED NOT NULL ,
  `cts` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `uts` DATETIME NOT NULL COMMENT 'cas poslednej aktivácie práva' ,
  `valid_until` DATETIME NOT NULL ,
  INDEX `fk_module_priv_user_rel_module_priv` (`module_priv_id` ASC) ,
  INDEX `fk_module_priv_user_rel_user1` (`user_id` ASC) ,
  PRIMARY KEY (`module_priv_id`, `user_id`) ,
  CONSTRAINT `fk_module_priv_user_rel_module_priv`
    FOREIGN KEY (`module_priv_id` )
    REFERENCES `prosro`.`module_priv` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_module_priv_user_rel_user1`
    FOREIGN KEY (`user_id` )
    REFERENCES `prosro`.`user` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prosro`.`article`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `prosro`.`article` ;

CREATE  TABLE IF NOT EXISTS `prosro`.`article` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `cts` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `uts` DATETIME NOT NULL ,
  `uid` INT UNSIGNED NOT NULL ,
  `title` VARCHAR(500) NOT NULL ,
  `content` TEXT NOT NULL ,
  `published` TINYINT(1)  NOT NULL DEFAULT 0 ,
  `published_ts` DATETIME NULL ,
  `deleted` TINYINT(1)  NOT NULL DEFAULT 0 ,
  `allow_comments` TINYINT(1)  NOT NULL DEFAULT 0 ,
  `allow_voting` TINYINT(1)  NOT NULL DEFAULT 0 ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_article_user1` (`uid` ASC) ,
  CONSTRAINT `fk_article_user1`
    FOREIGN KEY (`uid` )
    REFERENCES `prosro`.`user` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prosro`.`article_votes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `prosro`.`article_votes` ;

CREATE  TABLE IF NOT EXISTS `prosro`.`article_votes` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `article_id` INT UNSIGNED NOT NULL ,
  `user_id` INT UNSIGNED NOT NULL ,
  `ts` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `ip` VARCHAR(20) NOT NULL ,
  `value` INT(2) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_article_votes_article1` (`article_id` ASC) ,
  INDEX `fk_article_votes_user1` (`user_id` ASC) ,
  CONSTRAINT `fk_article_votes_article1`
    FOREIGN KEY (`article_id` )
    REFERENCES `prosro`.`article` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_article_votes_user1`
    FOREIGN KEY (`user_id` )
    REFERENCES `prosro`.`user` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prosro`.`article_comments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `prosro`.`article_comments` ;

CREATE  TABLE IF NOT EXISTS `prosro`.`article_comments` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `uid` INT UNSIGNED NOT NULL ,
  `article_id` INT UNSIGNED NOT NULL ,
  `cts` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `uts` DATETIME NOT NULL ,
  `content` TEXT NOT NULL ,
  `published` TINYINT(1)  NULL COMMENT 'NULL - not reviewed\n0 - declined\n1 - published' ,
  `published_ts` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_article_comments_user1` (`uid` ASC) ,
  INDEX `fk_article_comments_article1` (`article_id` ASC) ,
  CONSTRAINT `fk_article_comments_user1`
    FOREIGN KEY (`uid` )
    REFERENCES `prosro`.`user` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_article_comments_article1`
    FOREIGN KEY (`article_id` )
    REFERENCES `prosro`.`article` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;



/* COLLATION TEST
CREATE TABLE test_coll(
  id INT auto_increment PRIMARY KEY, 
  `names` varchar(20)
);
*/