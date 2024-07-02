drop database if exists IFSP;
create database if not exists IFSP;
use IFSP;

create table Cidade
(
	id int auto_increment,
    nome varchar(50),
    estado varchar(02),
    primary key (id)
);
create table Cliente
(
	id int auto_increment,
    nome varchar(50),
    email varchar(50),
    senha varchar(10),
    ativo bool,
    id_cidade int,
    primary key (id),
    constraint fk_ClienteCidade foreign key (id_cidade) references Cidade (id)
);