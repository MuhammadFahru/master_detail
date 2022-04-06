/*
 Navicat Premium Data Transfer

 Source Server         : Local Mysql
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : ik_web_master

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 06/04/2022 16:54:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for t_drh_detail
-- ----------------------------
DROP TABLE IF EXISTS `t_drh_detail`;
CREATE TABLE `t_drh_detail`  (
  `id_drh_detail` int(11) NOT NULL AUTO_INCREMENT,
  `id_drh_master` int(11) NOT NULL,
  `tahun` year NOT NULL,
  `perusahaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bidang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_drh_detail`) USING BTREE,
  INDEX `id_drh_master`(`id_drh_master`) USING BTREE,
  CONSTRAINT `id_drh_master` FOREIGN KEY (`id_drh_master`) REFERENCES `t_drh_master` (`id_drh_master`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_drh_detail
-- ----------------------------
INSERT INTO `t_drh_detail` VALUES (2, 1, 2022, 'Tokopedia', 'IT', '-');
INSERT INTO `t_drh_detail` VALUES (4, 3, 2022, 'Tokopedia', 'IT', '-');
INSERT INTO `t_drh_detail` VALUES (6, 3, 2024, 'Shopee', 'IT', '-');
INSERT INTO `t_drh_detail` VALUES (7, 1, 2024, 'Gojek', 'IT', '-');

-- ----------------------------
-- Table structure for t_drh_master
-- ----------------------------
DROP TABLE IF EXISTS `t_drh_master`;
CREATE TABLE `t_drh_master`  (
  `id_drh_master` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pendidikan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_drh_master`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_drh_master
-- ----------------------------
INSERT INTO `t_drh_master` VALUES (1, 'Muhammad Fahru', 'Jalan Subang, Bandung', '08986108912', 'fahrumuhammad.ozi@gmail.com', 'S2');
INSERT INTO `t_drh_master` VALUES (3, 'Davin', 'Jalan Depok, Bandung', '081234567890', 'example@gmail.com', 'S2');
INSERT INTO `t_drh_master` VALUES (4, 'Bintang', 'Jalan jalan', '0871234567890', 'example@gmail.com', 'S3');

SET FOREIGN_KEY_CHECKS = 1;
