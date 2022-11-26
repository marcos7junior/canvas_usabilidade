create database Agenda;
use Agenda;

create table contato (
	email varchar(200) not null
);

alter table contato add id int auto_increment primary key;
alter table contato add nome varchar(45) not null;

 -- rodar apenas para conferir --
select contato.id, contato.email from contato;