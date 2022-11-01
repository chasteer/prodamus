-- Adminer 4.8.1 MySQL 5.7.38 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `csv`;
CREATE TABLE `csv` (
  `order_id` bigint(20) NOT NULL,
  `sum` float NOT NULL,
  `date` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `csv` (`order_id`, `sum`, `date`) VALUES
(124,	120,	'2022-11-01 04:55:20'),
(2,	43,	'2022-11-01 04:55:28'),
(3,	634,	'2022-11-01 04:55:35');

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `sum` float NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `orders` (`id`, `sum`, `created_at`, `updated_at`) VALUES
(124,	120,	'2022-11-01 04:55:20',	'2022-11-01 05:13:54'),
(2,	43,	'2022-11-01 05:14:05',	'2022-11-01 05:14:05'),
(523,	1264670,	'2022-11-01 05:14:13',	'2022-11-01 05:14:13');

-- 2022-11-01 06:26:12
