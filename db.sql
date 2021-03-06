DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `year` int(11) unsigned NOT NULL,
  `semester` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `courses` (`id`, `name`, `year`, `semester`)
VALUES
(1, 'Module A1',1,1),
(2, 'Module B2',2,1),
(3, 'Module C3',3,1),
(4, 'Module A4',4,1),
(5, 'Module B5',1,1),
(6, 'Module C6',2,1),
(7, 'Module A7',3,1),
(8, 'Module B8',4,1),
(9, 'Module C9',1,1),
(10, 'Module A10',2,1),
(11, 'Module B11',3,1),
(12, 'Module C12',4,1),
(13, 'Module A13',1,1),
(14, 'Module B14',2,1),
(15, 'Module C15',3,1),
(16, 'Module A16',4,1),
(17, 'Module B17',1,1),
(18, 'Module C18',2,1),
(19, 'Module A19',3,1),
(20, 'Module B20',4,1),
(21, 'Module C21',1,1),
(22, 'Module A22',2,1),
(23, 'Module B23',3,1),
(24, 'Module C24',4,1),
(25, 'Module A25',1,1),
(26, 'Module B26',2,1),
(27, 'Module C27',3,1),
(28, 'Module A28',4,1),
(29, 'Module B29',1,1),
(30, 'Module C30',2,1),
(31, 'Module A31',3,1),
(32, 'Module B32',4,1),
(33, 'Module C33',1,1),
(34, 'Module A34',2,1),
(35, 'Module B35',3,1),
(36, 'Module C36',4,1),
(37, 'Module A37',1,1),
(38, 'Module B38',2,1),
(39, 'Module C39',3,1),
(40, 'Module A40',4,1),
(41, 'Module B41',1,1),
(42, 'Module C42',2,1),
(43, 'Module A43',3,1),
(44, 'Module B44',4,1),
(45, 'Module C45',1,1),
(46, 'Module A46',2,1),
(47, 'Module B47',3,1),
(48, 'Module C48',4,2),
(49, 'Module A49',1,2),
(50, 'Module B50',2,2),
(51, 'Module C51',3,2),
(52, 'Module A52',4,2),
(53, 'Module B53',1,2),
(54, 'Module C54',2,2),
(55, 'Module A55',3,2),
(56, 'Module B56',4,2),
(57, 'Module C57',1,2),
(58, 'Module A58',2,2),
(59, 'Module B59',3,2),
(60, 'Module C60',4,2),
(61, 'Module A61',1,2),
(62, 'Module B62',2,2),
(63, 'Module C63',3,2),
(64, 'Module A64',4,2),
(65, 'Module B65',1,2),
(66, 'Module C66',2,2),
(67, 'Module A67',3,2),
(68, 'Module B68',4,2),
(69, 'Module C69',1,2),
(70, 'Module A70',2,2),
(71, 'Module B71',3,2),
(72, 'Module C72',4,2),
(73, 'Module A73',1,2),
(74, 'Module B74',2,2),
(75, 'Module C75',3,2),
(76, 'Module A76',4,2),
(77, 'Module B77',1,2),
(78, 'Module C78',2,2),
(79, 'Module A79',3,2),
(80, 'Module B80',4,2),
(81, 'Module C81',1,2),
(82, 'Module A82',2,2),
(83, 'Module B83',3,2),
(84, 'Module C84',4,2),
(85, 'Module A85',1,2),
(86, 'Module B86',2,2),
(87, 'Module C87',3,2),
(88, 'Module A88',4,2),
(89, 'Module B89',1,2),
(90, 'Module C90',2,2),
(91, 'Module A91',3,2),
(92, 'Module B92',4,2),
(93, 'Module C93',1,2),
(94, 'Module A94',2,2),
(95, 'Module B95',3,2),
(96, 'Module C96',4,2),
(97, 'Module A97',1,2),
(98, 'Module B98',2,2),
(99, 'Module A99',3,2),
(100, 'Module B100',4,2),
