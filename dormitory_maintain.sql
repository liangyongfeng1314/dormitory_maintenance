/*
 Navicat Premium Data Transfer

 Source Server         : test
 Source Server Type    : MySQL
 Source Server Version : 50720
 Source Host           : localhost:3306
 Source Schema         : dormitory_maintain

 Target Server Type    : MySQL
 Target Server Version : 50720
 File Encoding         : 65001

 Date: 22/06/2019 23:50:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for d_accendant
-- ----------------------------
DROP TABLE IF EXISTS `d_accendant`;
CREATE TABLE `d_accendant`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `accendant_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '工号',
  `accendant_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '维修人员',
  `pwd` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '登录的密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of d_accendant
-- ----------------------------
INSERT INTO `d_accendant` VALUES (1, '918712', '姚师傅', '12345');
INSERT INTO `d_accendant` VALUES (2, '1', '1', '1');
INSERT INTO `d_accendant` VALUES (3, '123456', '维修人员1', '123456');
INSERT INTO `d_accendant` VALUES (4, '918712', '维修人员2', '918712');

-- ----------------------------
-- Table structure for d_question_list
-- ----------------------------
DROP TABLE IF EXISTS `d_question_list`;
CREATE TABLE `d_question_list`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `studentid` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '提问者的学号',
  `add_question_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '添加问题的学生名字',
  `department_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '学生所属系别',
  `d_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '学生的宿舍号',
  `accendant_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '此条维修问题的维修人',
  `question` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '问题描述',
  `addtime` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '添加时间',
  `counttime` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '倒计时',
  `student_status` int(11) NULL DEFAULT 0 COMMENT '学生状态,1-完成 0-未完成 ',
  `accendant_status` int(11) NOT NULL DEFAULT 0 COMMENT '维修人员状态-1-完成,0-未完成 2-维修人员接受了任务',
  `total_status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0' COMMENT '总状态,1两个人已经完成,2-有一方没有完成',
  `not` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '没完成的时候显示的图标',
  `complete` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '两个人共同完成，存储的图片路径',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 212 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of d_question_list
-- ----------------------------
INSERT INTO `d_question_list` VALUES (207, '1', '1', '信工系', '北区6303', '姚师傅', '灯坏了', '19/06/22', '17987', 2, 1, '0', '/bootstrap/PUBLIC/Home/images/preIcon.png', '/bootstrap/PUBLIC/Home/images/complete.png');
INSERT INTO `d_question_list` VALUES (208, '1', '1', '信工系', '北区6303', '1', '的是否都是分', '19/06/22', '17929', 2, 1, '0', '/bootstrap/PUBLIC/Home/images/preIcon.png', '/bootstrap/PUBLIC/Home/images/complete.png');
INSERT INTO `d_question_list` VALUES (209, '1', '1', '信工系', '北区6303', '1', '1', '19/06/22', '18000', 2, 1, '0', '/bootstrap/PUBLIC/Home/images/preIcon.png', '/bootstrap/PUBLIC/Home/images/complete.png');
INSERT INTO `d_question_list` VALUES (210, '1', '1', '信工系', '北区6303', '1', '上的发生的ff', '19/06/22', '0', 1, 1, '1', '/bootstrap/PUBLIC/Home/images/preIcon.png', '/bootstrap/PUBLIC/Home/images/complete.png');
INSERT INTO `d_question_list` VALUES (211, '918712', '学生2', '体育系', '军塘', '维修人员1', '宿舍的玻璃窗坏了', '19/06/22', '17995', 1, 1, '1', '/bootstrap/PUBLIC/Home/images/preIcon.png', '/bootstrap/PUBLIC/Home/images/complete.png');

-- ----------------------------
-- Table structure for d_student
-- ----------------------------
DROP TABLE IF EXISTS `d_student`;
CREATE TABLE `d_student`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id',
  `department_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '系名',
  `student_id` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '学生学号',
  `student_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '学生姓名',
  `student_pwd` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '学生密码',
  `d_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '宿舍地址',
  `loginnum` int(11) NULL DEFAULT 0 COMMENT '登录次数',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of d_student
-- ----------------------------
INSERT INTO `d_student` VALUES (1, '医药护理', '1314', 'Miss许', '123456', '世界屋脊', NULL);
INSERT INTO `d_student` VALUES (2, '信工系', '201730622140', '姚李强', '123456', '北区6303', NULL);
INSERT INTO `d_student` VALUES (3, '信工系', '1', '1', '1', '北区6303', 299);
INSERT INTO `d_student` VALUES (4, '艺设系', '2', '2', '2', '南区201', NULL);
INSERT INTO `d_student` VALUES (5, '艺设系', '123456', '学生1', '123456', '南区505', 9);
INSERT INTO `d_student` VALUES (6, '体育系', '918712', '学生2', '918712', '军塘', 6);

SET FOREIGN_KEY_CHECKS = 1;
