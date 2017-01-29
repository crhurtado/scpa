CREATE TABLE `select_1` (
  `id` int(2) NOT NULL default '0',
  `opcion` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM;

INSERT INTO `select_1` (`id`, `opcion`) VALUES (1, 'Opción 1'),
(2, 'Opción 2'),
(3, 'Opción 3'),
(4, 'Opción 4');

CREATE TABLE `select_2` (
  `id` int(2) NOT NULL default '0',
  `opcion` varchar(255) NOT NULL default '',
  `relacion` int(2) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM;

INSERT INTO `select_2` (`id`, `opcion`, `relacion`) VALUES (1, 'Opción 1.1', 1),
(2, 'Opción 1.2', 1),
(3, 'Opción 1.3', 1),
(4, 'Opción 1.4', 1),
(5, 'Opción 2.1', 2),
(6, 'Opción 2.2', 2),
(7, 'Opción 3.1', 3),
(8, 'Opción 3.2', 3),
(9, 'Opción 3.3', 3),
(10, 'Opción 3.4', 3),
(11, 'Opción 4.1', 4),
(12, 'Opción 4.2', 4);

CREATE TABLE `select_3` (
  `id` int(2) NOT NULL default '0',
  `opcion` varchar(255) NOT NULL default '',
  `relacion` int(2) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM;

INSERT INTO `select_3` (`id`, `opcion`, `relacion`) VALUES (1, 'Opción 1.1.1', 1),
(2, 'Opción 1.1.2', 1),
(3, 'Opción 1.2.1', 2),
(4, 'Opción 1.2.2', 2),
(5, 'Opción 1.3.1', 3),
(6, 'Opción 1.3.2', 3),
(7, 'Opción 1.4.1', 4),
(8, 'Opción 1.4.2', 4),
(9, 'Opción 2.1.1', 5),
(10, 'Opción 2.1.2', 5),
(11, 'Opción 2.2.1', 6),
(12, 'Opción 2.2.2', 6),
(13, 'Opción 3.1.1', 7),
(14, 'Opción 3.1.2', 7),
(15, 'Opción 3.2.1', 8),
(16, 'Opción 3.2.2', 8),
(17, 'Opción 3.3.1', 9),
(18, 'Opción 3.3.2', 9),
(19, 'Opción 3.4.1', 10),
(20, 'Opción 3.4.2', 10),
(21, 'Opción 4.1.1', 11),
(22, 'Opción 4.1.2', 11),
(23, 'Opción 4.2.1', 12),
(24, 'Opción 4.2.2', 12);