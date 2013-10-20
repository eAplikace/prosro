--SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
--SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
--SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `prosro` DEFAULT CHARACTER SET cp1250 COLLATE cp1250_czech_cs ;
USE `prosro` ;

-- -----------------------------------------------------
-- Table `prosro`.`user`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `prosro`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `pid` INT NOT NULL COMMENT '=0 - main user (corporation)\n>0 - employee' ,
  `admin` TINYINT(1)  NOT NULL DEFAULT 0 ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_user_user1` (`pid` ASC) ,
  CONSTRAINT `fk_user_user1`
    FOREIGN KEY (`pid` )
    REFERENCES `prosro`.`user` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = cp1250
COLLATE = cp1250_czech_cs;


-- -----------------------------------------------------
-- Table `prosro`.`module_priv`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `prosro`.`module_priv` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(127) NOT NULL ,
  `description` TEXT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = cp1250
COLLATE = cp1250_czech_cs;


-- -----------------------------------------------------
-- Table `prosro`.`module_priv_user_rel`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `prosro`.`module_priv_user_rel` (
  `module_priv_id` INT NOT NULL ,
  `user_id` INT NOT NULL ,
  INDEX `fk_module_priv_user_rel_module_priv` (`module_priv_id` ASC) ,
  INDEX `fk_module_priv_user_rel_user1` (`user_id` ASC) ,
  PRIMARY KEY (`module_priv_id`, `user_id`) ,
  CONSTRAINT `fk_module_priv_user_rel_module_priv`
    FOREIGN KEY (`module_priv_id` )
    REFERENCES `prosro`.`module_priv` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_module_priv_user_rel_user1`
    FOREIGN KEY (`user_id` )
    REFERENCES `prosro`.`user` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = cp1250
COLLATE = cp1250_czech_cs;


-- -----------------------------------------------------
-- Table `prosro`.`article`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `prosro`.`article` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `cts` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `uts` TIMESTAMP NOT NULL ,
  `uid` INT NOT NULL ,
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
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = cp1250
COLLATE = cp1250_czech_cs;


-- -----------------------------------------------------
-- Table `prosro`.`article_votes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `prosro`.`article_votes` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `article_id` INT NOT NULL ,
  `user_id` INT NOT NULL ,
  `ts` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `ip` VARCHAR(20) NOT NULL ,
  `value` INT(2) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_article_votes_article1` (`article_id` ASC) ,
  INDEX `fk_article_votes_user1` (`user_id` ASC) ,
  CONSTRAINT `fk_article_votes_article1`
    FOREIGN KEY (`article_id` )
    REFERENCES `prosro`.`article` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_article_votes_user1`
    FOREIGN KEY (`user_id` )
    REFERENCES `prosro`.`user` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = cp1250
COLLATE = cp1250_czech_cs;


-- -----------------------------------------------------
-- Table `prosro`.`article_comments`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `prosro`.`article_comments` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `uid` INT NOT NULL ,
  `article_id` INT NOT NULL ,
  `cts` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `uts` TIMESTAMP NOT NULL ,
  `content` TEXT NOT NULL ,
  `published` TINYINT(1)  NULL COMMENT 'NULL - not reviewed\n0 - declined\n1 - published' ,
  `published_ts` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_article_comments_user1` (`uid` ASC) ,
  INDEX `fk_article_comments_article1` (`article_id` ASC) ,
  CONSTRAINT `fk_article_comments_user1`
    FOREIGN KEY (`uid` )
    REFERENCES `prosro`.`user` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_article_comments_article1`
    FOREIGN KEY (`article_id` )
    REFERENCES `prosro`.`article` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = cp1250
COLLATE = cp1250_czech_cs;



--SET SQL_MODE=@OLD_SQL_MODE;
--SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
--SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
