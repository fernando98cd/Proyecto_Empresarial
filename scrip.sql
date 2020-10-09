 CREATE DATABASE ProyecGeolocalizacion;
 use ProyecGeolocalizacion;
create table usuario
(
    id int not null auto_increment,
    nombre varchar(50) not null,
    email varchar(100) not null,
    direccion varchar(100),
    login varchar(20) unique not null,
    password varchar(128) not null,
    telefono varchar(15),
    primary key(id)

)engine=innodb;

select * from usuario;