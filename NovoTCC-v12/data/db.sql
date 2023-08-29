CREATE DATABASE `db_clientes` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `senha` char(32) NOT NULL,
  `tipo` char(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

insert into usuarios(email,senha,tipo)
values ('cris@gmail.com',md5('123'),'a'),
('doung@gmail.com',md5('katacuri'),'a'),
('rafael@gmail.com',md5('rafa123'),'p'),
('thithi@gmail.com',md5('énoiis'),'a');


update usuarios set email = REPLACE(email,'gmal','gmail') where id in(5,6,7,8);


create table genero(
	nome varchar(50) primary key
);

insert into genero (nome) values 
('aventura'),
('Ficção juvenil'),
('Literatura'),
('documentario'),
('terror');

select * from genero;

