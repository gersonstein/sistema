/*
Navicat MySQL Data Transfer

Source Server         : Mysql
Source Server Version : 50635
Source Host           : localhost:3306
Source Database       : gas

Target Server Type    : MYSQL
Target Server Version : 50635
File Encoding         : 65001

Date: 2017-05-04 01:30:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categorias
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES ('4', 'Gás');
INSERT INTO `categorias` VALUES ('5', 'Água');

-- ----------------------------
-- Table structure for enderecos
-- ----------------------------
DROP TABLE IF EXISTS `enderecos`;
CREATE TABLE `enderecos` (
  `id` int(11) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `id_usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of enderecos
-- ----------------------------

-- ----------------------------
-- Table structure for grupos
-- ----------------------------
DROP TABLE IF EXISTS `grupos`;
CREATE TABLE `grupos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `criado` datetime DEFAULT NULL,
  `modificado` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`nome`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of grupos
-- ----------------------------
INSERT INTO `grupos` VALUES ('1', 'usuario', '2015-10-16 20:41:06', '2015-10-16 20:41:06');
INSERT INTO `grupos` VALUES ('2', 'Revendedor', '2015-10-16 20:43:23', '2015-10-16 20:43:23');
INSERT INTO `grupos` VALUES ('3', 'admin', '2015-11-16 13:21:25', '2015-11-16 13:21:25');

-- ----------------------------
-- Table structure for produtos
-- ----------------------------
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `preco` float(7,0) DEFAULT NULL,
  `observacao` varchar(255) DEFAULT NULL,
  `quantidade` decimal(5,0) DEFAULT NULL,
  `criado` date DEFAULT NULL,
  `modificado` date DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of produtos
-- ----------------------------
INSERT INTO `produtos` VALUES ('5', 'gaz teste', 'teste', '23', '23', '23', '2016-01-12', '2016-01-12', '1');
INSERT INTO `produtos` VALUES ('6', 'gaz teste2', '22', '22', '22', '22', '2016-01-12', '2016-01-12', '1');
INSERT INTO `produtos` VALUES ('7', '3', '3', '3', '3', '3', '2016-01-12', '2016-01-12', '1');
INSERT INTO `produtos` VALUES ('8', 'gaz teste2', '22', '88', '55', '10', '2016-04-08', '2016-04-08', '1');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `CPF` int(11) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('19', '2', '2@2.com', 'ea85bac43d19bfe5bebd05cd5a572252c7eb465f', '127', '127', '3');
INSERT INTO `usuarios` VALUES ('20', 'teste final', 'gerson@gmail.com', 'ea85bac43d19bfe5bebd05cd5a572252c7eb465f', '1233', '123', '3');
INSERT INTO `usuarios` VALUES ('21', 'user', 'user@user.com', '1234567', '123', '123', '1');
INSERT INTO `usuarios` VALUES ('23', 'dddd', 'dddd@user.com', '', '0', '', '0');
INSERT INTO `usuarios` VALUES ('24', 'dddd', 'gerson.cstsi@gmail.com', '', '0', '', '0');
