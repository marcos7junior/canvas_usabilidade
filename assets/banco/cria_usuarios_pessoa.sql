create database usuarios;
use usuarios;

create table pessoa (
	id int auto_increment primary key,
    nome varchar(250) not null,
    email varchar(450) not null,
    senha int(8)
);

insert into pessoa (id, nome, email, senha) values (1, "Joao", "joao@joao.com", 12345678)