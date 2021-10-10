-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 24, 2021 at 03:32 PM
-- Server version: 8.0.16
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_locadora`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_automovel`
--

CREATE TABLE `tb_automovel` (
  `TB_AUTOMOVEL_ID` int(11) NOT NULL,
  `TB_AUTOMOVEL_NOME` varchar(32) NOT NULL,
  `TB_AUTOMOVEL_ANO_FAB` int(11) DEFAULT NULL,
  `TB_AUTOMOVEL_COR` varchar(32) NOT NULL,
  `TB_AUTOMOVEL_KM` decimal(10,2) DEFAULT NULL,
  `TB_AUTOMOVEL_VALOR_D` decimal(10,2) DEFAULT NULL,
  `TB_AUTOMOVEL_STATUS` varchar(16) DEFAULT NULL,
  `TB_MARCA_ID` int(11) NOT NULL,
  `TB_MODELO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_automovel`
--

INSERT INTO `tb_automovel` (`TB_AUTOMOVEL_ID`, `TB_AUTOMOVEL_NOME`, `TB_AUTOMOVEL_ANO_FAB`, `TB_AUTOMOVEL_COR`, `TB_AUTOMOVEL_KM`, `TB_AUTOMOVEL_VALOR_D`, `TB_AUTOMOVEL_STATUS`, `TB_MARCA_ID`, `TB_MODELO_ID`) VALUES
(1, 'CIVIC EXS', 2010, 'PRETO', '60000.00', '5550.00', 'DISPONIVEL', 2, 2),
(3, 'LANCER', 2014, 'VERMELHO', '23000.00', '160.00', 'DISPONIVEL', 9, 2),
(4, 'PALIO EXS', 2001, 'CINZA', '140000.00', '90.00', 'DISPONIVEL', 3, 6),
(5, 'FLUENCE ELITE', 2015, 'BRANCO', '95000.00', '130.00', 'DISPONIVEL', 12, 2),
(6, 'COROLA XEI', 2011, 'BRANCO', '150000.00', '140.00', 'DISPONIVEL', 13, 2),
(8, 'HB20', 2011, 'AZUL', '98000.00', '120.00', 'DISPONIVEL', 10, 6),
(9, 'FIESTA', 2012, 'VERMELHO', '120000.00', '130.00', 'DISPONIVEL', 4, 6),
(10, 'AMAROK', 2014, 'VERDE', '154000.00', '20000.00', 'DISPONIVEL', 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cargo`
--

CREATE TABLE `tb_cargo` (
  `TB_CARGO_ID` int(11) NOT NULL,
  `TB_CARGO_NOME` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_cargo`
--

INSERT INTO `tb_cargo` (`TB_CARGO_ID`, `TB_CARGO_NOME`) VALUES
(2, 'LOCADOR'),
(3, 'MECANICO'),
(4, 'MANOBRISTAS'),
(5, 'GERENTE');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `TB_CLIENTE_ID` int(11) NOT NULL,
  `TB_CLIENTE_NOME` varchar(128) NOT NULL,
  `TB_CLIENTE_TEL` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `TB_CLIENTE_SEXO` varchar(16) DEFAULT NULL,
  `TB_CLIENTE_EMAIL` varchar(32) NOT NULL,
  `TB_CLIENTE_SENHA` varchar(32) NOT NULL,
  `TB_CLIENTE_ENDERECO` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `TB_CLIENTE_COMPLEMENTO` varchar(32) DEFAULT NULL,
  `TB_CLIENTE_BAIRRO` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `TB_CLIENTE_CIDADE` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `TB_CLIENTE_UF` char(2) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `TB_CLIENTE_DT_NASC` date DEFAULT NULL,
  `TB_CLIENTE_DT_CAD` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_cliente`
--

INSERT INTO `tb_cliente` (`TB_CLIENTE_ID`, `TB_CLIENTE_NOME`, `TB_CLIENTE_TEL`, `TB_CLIENTE_SEXO`, `TB_CLIENTE_EMAIL`, `TB_CLIENTE_SENHA`, `TB_CLIENTE_ENDERECO`, `TB_CLIENTE_COMPLEMENTO`, `TB_CLIENTE_BAIRRO`, `TB_CLIENTE_CIDADE`, `TB_CLIENTE_UF`, `TB_CLIENTE_DT_NASC`, `TB_CLIENTE_DT_CAD`) VALUES
(4, 'ROMEU ANTONI BASTOS', '18 45334545', 'MASCULINO', 'ROMEU_ANTONIO@HOTMAIL.COM', '123', 'AV. BARONESA 34', 'FUNDOS', 'HORTENCIA', 'TIRADENTES', 'MG', '1970-07-22', '2010-10-10'),
(5, 'JOAQUIM DE OLIVEIRA ASSIS', '18 94332929', 'MASCULINO', 'JOAQUIM_OLIVERS@YAHOO.COM', '123', 'AV. DO ESTADO, 3422', '4 ANDAR', 'VITORIA RÉGEA', 'TIRADENTES', 'MG', '2009-09-09', '2010-10-10'),
(6, 'ROGERIO FARIAS DE MELO', '22 6550303', 'MASCULINO', 'FARIAS_MELO@HOTMAIL.COM', '123', 'RUA PATRIARCA, 342', '', 'ROCHEDO', 'MONTE ALTO', 'BA', '1980-10-23', '2010-06-04'),
(7, 'PAULA DA SILVA VIEIRA', '22 94330202', 'FEMININO', 'PAULINHA2000@YAHOO.COM', '123', 'RUA BARONESA, 4300', '', 'JEQUITIBÁ', 'CANOAS', 'PR', '1994-03-12', '2010-06-04'),
(10, 'ALEXANDRE MARQUES GRANADO', '34 43556767', 'MASCULINO', 'GRANADO_ALEXANDRE@HOTMAIL.COM', '123', 'AV. DAS NAÇÕES UNIDAS, 3231', 'BLOCO C', 'CENTRO', 'SÃO PAULO', 'SP', '1980-12-04', '2011-08-01'),
(11, 'ANDRE VIEIRA', '11 43445677', 'MASCULINO', 'ANDREANDRE@OUTLOOK.COM', '123', 'RUA DO BARRÃO, 2345', 'FUNDO', 'GARÇA', 'SANTANA DE PARNAIBA', 'SP', '2000-09-04', '2016-09-29'),
(12, 'Yuri Sa', '23135', 'MASCULINO', 'yuri@sa2.com.br', '147852', 'Teste', 'Complemento', 'Bairro', 'Cidade', 'SP', '1980-12-04', '2011-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_funcionario`
--

CREATE TABLE `tb_funcionario` (
  `TB_FUNCIONARIO_ID` int(11) NOT NULL,
  `TB_FUNCIONARIO_NOME` varchar(64) NOT NULL,
  `TB_FUNCIONARIO_TEL` varchar(16) DEFAULT NULL,
  `TB_FUNCIONARIO_DT_CONTRATO` date NOT NULL,
  `TB_CARGO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_funcionario`
--

INSERT INTO `tb_funcionario` (`TB_FUNCIONARIO_ID`, `TB_FUNCIONARIO_NOME`, `TB_FUNCIONARIO_TEL`, `TB_FUNCIONARIO_DT_CONTRATO`, `TB_CARGO_ID`) VALUES
(1, 'JOSÉ BENEDITO', '11 94553838', '2010-12-20', 5),
(2, 'ANTONIO BONILHA', '12 3943939', '2011-01-05', 2),
(3, 'LUZIA PEREIRA DA SILVA', '11 93423445', '2011-01-05', 2),
(4, 'JOAQUIM PEREIRA DA SILVA', '18 4553434', '2011-06-12', 3),
(5, 'ANTONIO DIA BASTOS', '18 3403922', '2010-10-10', 3),
(6, 'ARMANDO ARAUJO DE ANDRADE', '14 34233344', '2012-06-21', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_locacao`
--

CREATE TABLE `tb_locacao` (
  `TB_LOCACAO_ID` int(11) NOT NULL,
  `TB_LOCACAO_TIPO` varchar(32) NOT NULL,
  `TB_LOCACAO_VALOR` decimal(10,2) NOT NULL,
  `TB_LOCACAO_DT_INICIO` date DEFAULT NULL,
  `TB_LOCACAO_DT_FIM` date DEFAULT NULL,
  `TB_CLIENTE_ID` int(11) NOT NULL,
  `TB_FUNCIONARIO_ID` int(11) NOT NULL,
  `TB_AUTOMOVEL_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_locacao`
--

INSERT INTO `tb_locacao` (`TB_LOCACAO_ID`, `TB_LOCACAO_TIPO`, `TB_LOCACAO_VALOR`, `TB_LOCACAO_DT_INICIO`, `TB_LOCACAO_DT_FIM`, `TB_CLIENTE_ID`, `TB_FUNCIONARIO_ID`, `TB_AUTOMOVEL_ID`) VALUES
(1, 'MENSAL', '5400.00', '2016-06-05', '2016-07-05', 1, 6, 1),
(2, 'SEMANAL', '910.00', '2016-06-05', '2016-06-12', 5, 3, 4),
(3, 'MENSAL', '3900.00', '2016-06-05', '2016-07-05', 1, 3, 5),
(4, 'DIÁRIA', '130.00', '2016-06-07', '2016-06-08', 6, 2, 9),
(5, 'MENSAL', '4800.00', '2016-06-12', '2016-07-12', 6, 2, 3),
(6, 'MENSAL', '4800.00', '2016-06-12', '2016-07-12', 10, 2, 6),
(7, 'SEMANAL', '1120.00', '2016-09-20', '2016-09-27', 1, 3, 3),
(8, 'SEMANAL', '980.00', '2016-10-10', '2016-10-17', 4, 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_marca`
--

CREATE TABLE `tb_marca` (
  `TB_MARCA_ID` int(11) NOT NULL,
  `TB_MARCA_NOME` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_marca`
--

INSERT INTO `tb_marca` (`TB_MARCA_ID`, `TB_MARCA_NOME`) VALUES
(1, 'LIFAN'),
(2, 'HONDA'),
(3, 'FIAT'),
(4, 'FORD'),
(5, 'CHEVROLET'),
(6, 'JEEP'),
(7, 'VOLKSWAGEM'),
(9, 'MITSUBICHI'),
(10, 'HYUNDAI'),
(11, 'BMW'),
(12, 'RENAULT'),
(13, 'TOYOTA'),
(14, 'AUDI'),
(15, 'BUGATTI'),
(16, 'FERRARI'),
(17, 'SUBARU'),
(18, 'ASTON MARTIN'),
(19, 'PORSCHE'),
(20, 'TESTE');

-- --------------------------------------------------------

--
-- Table structure for table `tb_modelo`
--

CREATE TABLE `tb_modelo` (
  `TB_MODELO_ID` int(11) NOT NULL,
  `TB_MODELO_DESC` varchar(32) NOT NULL,
  `TB_MODELO_OBS` varchar(255) NOT NULL,
  `TB_MODELO_DATA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_modelo`
--

INSERT INTO `tb_modelo` (`TB_MODELO_ID`, `TB_MODELO_DESC`, `TB_MODELO_OBS`, `TB_MODELO_DATA`) VALUES
(1, 'RACING', '', 0),
(2, 'SEDAN', '', 0),
(3, 'PICKUP', '', 0),
(4, 'UTILITÁRIO', '', 0),
(5, 'WAGON', '', 0),
(6, 'HATCH', '', 0),
(7, 'COUPÊ', '', 0),
(8, 'SUV', '', 0),
(9, 'OFF ROAD', '', 0),
(10, 'Modelo', 'OBS', 1234),
(11, 'Modelo MODULARIZADO', 'OBS MODULARIZADO', 999);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_automovel`
--
ALTER TABLE `tb_automovel`
  ADD PRIMARY KEY (`TB_AUTOMOVEL_ID`),
  ADD KEY `pk_marca_fk_automovel` (`TB_MARCA_ID`),
  ADD KEY `pk_modelo_fk_automovel` (`TB_MODELO_ID`);

--
-- Indexes for table `tb_cargo`
--
ALTER TABLE `tb_cargo`
  ADD PRIMARY KEY (`TB_CARGO_ID`);

--
-- Indexes for table `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`TB_CLIENTE_ID`);

--
-- Indexes for table `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  ADD PRIMARY KEY (`TB_FUNCIONARIO_ID`),
  ADD KEY `pk_cargo_fk_funcionario` (`TB_CARGO_ID`);

--
-- Indexes for table `tb_locacao`
--
ALTER TABLE `tb_locacao`
  ADD PRIMARY KEY (`TB_LOCACAO_ID`),
  ADD KEY `pk_cliente_fk_locacao` (`TB_CLIENTE_ID`),
  ADD KEY `pk__funcionario_fk_locacao` (`TB_FUNCIONARIO_ID`),
  ADD KEY `pk_automovel_fk_locacao` (`TB_AUTOMOVEL_ID`);

--
-- Indexes for table `tb_marca`
--
ALTER TABLE `tb_marca`
  ADD PRIMARY KEY (`TB_MARCA_ID`);

--
-- Indexes for table `tb_modelo`
--
ALTER TABLE `tb_modelo`
  ADD PRIMARY KEY (`TB_MODELO_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_automovel`
--
ALTER TABLE `tb_automovel`
  MODIFY `TB_AUTOMOVEL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_cargo`
--
ALTER TABLE `tb_cargo`
  MODIFY `TB_CARGO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `TB_CLIENTE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;

--
-- AUTO_INCREMENT for table `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  MODIFY `TB_FUNCIONARIO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_locacao`
--
ALTER TABLE `tb_locacao`
  MODIFY `TB_LOCACAO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_marca`
--
ALTER TABLE `tb_marca`
  MODIFY `TB_MARCA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_modelo`
--
ALTER TABLE `tb_modelo`
  MODIFY `TB_MODELO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_automovel`
--
ALTER TABLE `tb_automovel`
  ADD CONSTRAINT `pk_marca_fk_automovel` FOREIGN KEY (`TB_MARCA_ID`) REFERENCES `tb_marca` (`TB_MARCA_ID`),
  ADD CONSTRAINT `pk_modelo_fk_automovel` FOREIGN KEY (`TB_MODELO_ID`) REFERENCES `tb_modelo` (`TB_MODELO_ID`);

--
-- Constraints for table `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  ADD CONSTRAINT `pk_cargo_fk_funcionario` FOREIGN KEY (`TB_CARGO_ID`) REFERENCES `tb_cargo` (`TB_CARGO_ID`);

--
-- Constraints for table `tb_locacao`
--
ALTER TABLE `tb_locacao`
  ADD CONSTRAINT `pk__funcionario_fk_locacao` FOREIGN KEY (`TB_FUNCIONARIO_ID`) REFERENCES `tb_funcionario` (`TB_FUNCIONARIO_ID`),
  ADD CONSTRAINT `pk_automovel_fk_locacao` FOREIGN KEY (`TB_AUTOMOVEL_ID`) REFERENCES `tb_automovel` (`TB_AUTOMOVEL_ID`),
  ADD CONSTRAINT `pk_cliente_fk_locacao` FOREIGN KEY (`TB_CLIENTE_ID`) REFERENCES `tb_cliente` (`TB_CLIENTE_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
