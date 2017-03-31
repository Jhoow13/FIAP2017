SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE DATABASE cms;

USE cms;

CREATE TABLE `categorias` (
  `cat_id` int(3) NOT NULL,
  `cat_nome` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cat_id`);

ALTER TABLE `categorias`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT;
