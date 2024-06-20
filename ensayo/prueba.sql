show databases;
create schema pruebita_3;
use pruebita_3;

create table tb_usuarios(
documento int not null,
nombre varchar(100) not null,
fec_nac date not null,
contraseña varchar(100) not null,
foto varchar(100) null,
primary key(documento)
);

select * from tb_usuarios;