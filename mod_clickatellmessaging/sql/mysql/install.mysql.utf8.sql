CREATE TABLE IF NOT EXISTS `cm__clickatell_config` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ApiUsername` varchar(50) NOT NULL,
  `ApiPassword` varchar(100) NOT NULL,
  `ApiId` varchar(100) NOT NULL,

  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

INSERT INTO cm__clickatell_config (`ApiUsername`, `ApiPassword`, `ApiId`) VALUES ('DemoUsername', 'DemoPassword', 'DemoId');
