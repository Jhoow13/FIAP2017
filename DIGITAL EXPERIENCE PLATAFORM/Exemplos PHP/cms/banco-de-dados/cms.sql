SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE cms;

USE cms;

CREATE TABLE `categorias` (
  `cat_id` int(3) NOT NULL,
  `cat_nome` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cat_id`);

ALTER TABLE `categorias`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT;

INSERT INTO `categorias` (`cat_id`, `cat_nome`) VALUES
(1, 'PHP'),
(2, 'Mobile'),
(3, 'Marketing'),
(4, 'Empreendedorismo');

CREATE TABLE `posts` (
  `post_id` int(4) NOT NULL,
  `post_cat_id` int(4) NOT NULL,
  `post_nome` varchar(255) NOT NULL,
  `post_autor` varchar(100) NOT NULL,
  `post_data` date NOT NULL,
  `post_conteudo` text NOT NULL,
  `post_imagem` text NOT NULL,
  `post_tags` varchar(100) NOT NULL,
  `post_status` varchar(100) NOT NULL DEFAULT 'rascunho'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

ALTER TABLE `posts`
  MODIFY `post_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;