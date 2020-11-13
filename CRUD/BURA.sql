-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema bura_crud
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bura_crud
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bura_crud` DEFAULT CHARACTER SET utf8 ;
USE `bura_crud` ;

-- -----------------------------------------------------
-- Table `bura_crud`.`tb_data`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bura_crud`.`tb_data` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nim` VARCHAR(45) NOT NULL,
  `nama_lengkap` VARCHAR(45) NOT NULL,
  `kota_asal` VARCHAR(45) NOT NULL,
  `tanggal_lahir` VARCHAR(45) NOT NULL,
  `nama_ortu` VARCHAR(100) NOT NULL,
  `alamat_ortu` VARCHAR(130) NOT NULL,
  `kodepos` INT(50) NOT NULL,
  `nomor_telepon` INT(50) NOT NULL,
  `status` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
