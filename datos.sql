drop schema if exists `DBPweb1`;

create schema if not exists `DBPweb1` default character set utf8 collate utf8_sapanish_ci;

USE `DBPweb1`;

CREATE TABLE `usuario`(
`clave_usuario` int(15) not null auto_increment,
`nombre` varchar(50) not null,
`apellido` varchar(50) not null,
`pais` varchar(50) not null,
`email` text not null,
'main' varchar(20) not null,
`fecha_registro` datetime not null default current_timestamp,
primary key clave_usuario
) engine=Innodb default charset=utf8;