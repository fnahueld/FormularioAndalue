base de datos

----- tabla de usuarios

create table usuario(
 idUsuario varchar(40) not null primary key, 
 nombreUsuario varchar(40) not null, 
 apellidoUsuario varchar(40) not null, 
 contrasenaUsuario varchar(40) not null, 
 tipoUsuario int not null );

insert into usuario(idUsuario,nombreUsuario,apellidoUsuario,contrasenaUsuario,tipoUsuario) values('javier@rains.cl','JAvier','Rain','123456',1); 
----  tabla tipo de usuario

create table tipoUsuario(
    idTipoUsuario int not null primary key,
    descripcionTipoUsuario varchar(40) not null
    );
insert into tipoUsuario(idTipoUsuario,descripcionTipoUsuario) values (1,'Administrador');
insert into tipoUsuario(idTipoUsuario,descripcionTipoUsuario) values (2,'Cliente');
insert into tipoUsuario(idTipoUsuario,descripcionTipoUsuario) values (3,'Moderador');
----