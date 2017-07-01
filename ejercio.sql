/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : ejercio

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2017-06-29 22:50:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for pais
-- ----------------------------
DROP TABLE IF EXISTS `pais`;
CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id_pais`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for propuestas
-- ----------------------------
DROP TABLE IF EXISTS `propuestas`;
CREATE TABLE `propuestas` (
  `id_propuesta` int(11) NOT NULL AUTO_INCREMENT,
  `monto` decimal(10,0) NOT NULL,
  `id_pais_destino` int(11) NOT NULL,
  `id_pais_origen` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_propuesta`),
  KEY `fk_user` (`id_usuario`),
  KEY `fk_pais_destino` (`id_pais_destino`),
  KEY `fk_pais_origen` (`id_pais_origen`),
  CONSTRAINT `fk_pais_destino` FOREIGN KEY (`id_pais_destino`) REFERENCES `pais` (`id_pais`),
  CONSTRAINT `fk_pais_origen` FOREIGN KEY (`id_pais_origen`) REFERENCES `pais` (`id_pais`),
  CONSTRAINT `fk_user` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
