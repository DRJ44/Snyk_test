create database actividadcrud;
use actividadcrud;
create table practica(
    id int not null,
    nombre varchar(100) not null,
    apellido varchar(100) not null,
    correo varchar(100) not null,
    contraseña varchar(100) not null,
    constraint pk_practica primary key (id)
);
