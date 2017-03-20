CREATE DATABASE loginapp;

use loginapp;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` (`id`, `username`, `password`) VALUES
(1, 'Gustavo', '123456'),
(2, 'Felipe', '54321'),
(3, 'Guilherme', 'qazqaz'),
(4, 'Ana', 'ana123');

ALTER TABLE `usuarios`
ADD PRIMARY KEY (`id`);

ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
