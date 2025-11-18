create database sistema;
use sistema;

create table cadastro_produto(
nome_prod varchar (50),
cod_prod int not null,
categoria_prod varchar (20),
marca_prod varchar (20),
modelo_prod varchar (20)
);

create table cadastro_usuario(
nome_usuario varchar(50),
email_usuario varchar (50),
senha_usuario varchar (50)
);
select * from cadastro_usuario