SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `Monitoria` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `Monitoria` ;

-- -----------------------------------------------------
-- Table `Monitoria`.`departamento`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Monitoria`.`departamento` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `chefe` INT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Monitoria`.`professor`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Monitoria`.`professor` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `departamento_id_departamento` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_professor_departamento1_idx` (`departamento_id_departamento` ASC) ,
  CONSTRAINT `fk_professor_departamento1`
    FOREIGN KEY (`departamento_id_departamento` )
    REFERENCES `Monitoria`.`departamento` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Monitoria`.`aluno`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Monitoria`.`aluno` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `curso` VARCHAR(45) NULL ,
  `ano_ingresso` CHAR(5) NULL ,
  `banco` INT NULL ,
  `agencia` INT NULL ,
  `cc` INT NULL ,
  `historico` LONGTEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Monitoria`.`pessoa`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Monitoria`.`pessoa` (
  `cpf` INT NOT NULL ,
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  `senha` VARCHAR(16) NULL ,
  `rg` CHAR(10) NULL ,
  `orgao_emissor` CHAR(6) NULL ,
  `endereco` VARCHAR(45) NULL ,
  `telefone` VARCHAR(45) NULL ,
  `tipo` INT NULL ,
  `matricula` CHAR(9) NULL ,
  `professor_id_professor` INT NOT NULL ,
  `aluno_id_aluno` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_pessoa_professor1_idx` (`professor_id_professor` ASC) ,
  INDEX `fk_pessoa_aluno1_idx` (`aluno_id_aluno` ASC) ,
  CONSTRAINT `fk_pessoa_professor1`
    FOREIGN KEY (`professor_id_professor` )
    REFERENCES `Monitoria`.`professor` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pessoa_aluno1`
    FOREIGN KEY (`aluno_id_aluno` )
    REFERENCES `Monitoria`.`aluno` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Monitoria`.`edital`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Monitoria`.`edital` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `publicacao` VARCHAR(45) NULL ,
  `arquivo` LONGTEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Monitoria`.`selecao`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Monitoria`.`selecao` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nota` VARCHAR(45) NULL ,
  `id_aluno` VARCHAR(45) NULL ,
  `id_projeto` VARCHAR(45) NULL ,
  `aprovado` VARCHAR(45) NULL ,
  `horario_atendimento` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Monitoria`.`relatorio`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Monitoria`.`relatorio` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `arquivo` LONGTEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Monitoria`.`projetoDeMonitoria`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Monitoria`.`projetoDeMonitoria` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `resumo` VARCHAR(45) NOT NULL ,
  `atividades` VARCHAR(45) NULL ,
  `bolsa` TINYINT(1) NULL ,
  `aprovado` TINYINT(1) NULL ,
  `vagas_pedidas` INT NOT NULL ,
  `vagas_aprovadas` INT NULL ,
  `ch_total` INT NULL ,
  `ch_semanal` INT NULL ,
  `periodo_inscricao_inicio` DATETIME NULL ,
  `periodo_inscricao_final` DATETIME NULL ,
  `periodo_selecao` DATETIME NULL ,
  `relatorio_id_relatorio` INT NOT NULL ,
  `edital_id_codigo` INT NOT NULL ,
  `selecao_id` INT NOT NULL ,
  `professor_id_professor` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_projetoDeMonitoria_relatorio_idx` (`relatorio_id_relatorio` ASC) ,
  INDEX `fk_projetoDeMonitoria_edital1_idx` (`edital_id_codigo` ASC) ,
  INDEX `fk_projetoDeMonitoria_selecao1_idx` (`selecao_id` ASC) ,
  INDEX `fk_projetoDeMonitoria_professor1_idx` (`professor_id_professor` ASC) ,
  CONSTRAINT `fk_projetoDeMonitoria_relatorio`
    FOREIGN KEY (`relatorio_id_relatorio` )
    REFERENCES `Monitoria`.`relatorio` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_projetoDeMonitoria_edital1`
    FOREIGN KEY (`edital_id_codigo` )
    REFERENCES `Monitoria`.`edital` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_projetoDeMonitoria_selecao1`
    FOREIGN KEY (`selecao_id` )
    REFERENCES `Monitoria`.`selecao` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_projetoDeMonitoria_professor1`
    FOREIGN KEY (`professor_id_professor` )
    REFERENCES `Monitoria`.`professor` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Monitoria`.`certificado`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Monitoria`.`certificado` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `arquivo` LONGTEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Monitoria`.`monitoria`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Monitoria`.`monitoria` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `data_inicio` DATE NULL ,
  `data_fim` DATE NULL ,
  `semestre` CHAR(5) NULL ,
  `status` VARCHAR(45) NULL ,
  `bolsa` TINYINT(1) NULL ,
  `id_relatorio_aluno` VARCHAR(45) NULL ,
  `id_relatorio_professor` VARCHAR(45) NULL ,
  `unidade` VARCHAR(45) NULL ,
  `orgao` VARCHAR(45) NULL ,
  `componentes_curriculres` VARCHAR(45) NULL ,
  `termo` VARCHAR(45) NULL ,
  `id_professor_orientador` INT NULL ,
  `aluno_id_aluno` INT NOT NULL ,
  `certificado_id_certificado` INT NOT NULL ,
  `professor_id_professor` INT NOT NULL ,
  `relatorio_id_relatorio` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_monitoria_aluno1_idx` (`aluno_id_aluno` ASC) ,
  INDEX `fk_monitoria_certificado1_idx` (`certificado_id_certificado` ASC) ,
  INDEX `fk_monitoria_professor1_idx` (`professor_id_professor` ASC) ,
  INDEX `fk_monitoria_relatorio1_idx` (`relatorio_id_relatorio` ASC) ,
  CONSTRAINT `fk_monitoria_aluno1`
    FOREIGN KEY (`aluno_id_aluno` )
    REFERENCES `Monitoria`.`aluno` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_monitoria_certificado1`
    FOREIGN KEY (`certificado_id_certificado` )
    REFERENCES `Monitoria`.`certificado` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_monitoria_professor1`
    FOREIGN KEY (`professor_id_professor` )
    REFERENCES `Monitoria`.`professor` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_monitoria_relatorio1`
    FOREIGN KEY (`relatorio_id_relatorio` )
    REFERENCES `Monitoria`.`relatorio` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
