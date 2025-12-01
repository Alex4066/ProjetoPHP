create database Sistema;
use Sistema;

create table cadastro_produto(
id_produto INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome_prod varchar (50),
cod_prod int not null,
categoria_prod varchar (20),
marca_prod varchar (20),
modelo_prod varchar (20)
);

create table cadastro_usuario(
id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome_usuario varchar(50),
email_usuario varchar (50),
-- 255 minimo senha hash 
senha_usuario varchar (255) 
);

select * from cadastro_usuario