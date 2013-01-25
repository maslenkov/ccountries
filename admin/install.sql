CREATE TABLE IF NOT EXISTS `#__countries` (
  `id` SERIAL,
  `name` VARCHAR(32)
) ENGINE = MyISAM;

INSERT INTO `#__countries` (`name`) VALUES ('Country Name');
