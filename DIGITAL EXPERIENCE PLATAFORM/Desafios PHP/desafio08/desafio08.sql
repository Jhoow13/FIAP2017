CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `usuarios`  ADD PRIMARY KEY (`id`);

ALTER TABLE `usuarios`  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

