create database correspondencia;

create table NArea(
IdArea int not null primary key,
nombre varchar(45) not null,
titular varchar(100) not null);

create table Usuarios(
IdUs int not null primary key,
NombreUs varchar(100),
AreaUs varchar(45));