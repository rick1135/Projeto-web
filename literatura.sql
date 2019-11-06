create database literatura;
use literatura;

create table usuario (
id int auto_increment primary key,
email varchar(50) not null,
usuario varchar(50) not null,
senha varchar(32) not null,
turma varchar(32) not null,
adm tinyint
);


#testes
select * from usuario;

drop table usuario;

delete from usuario;
update usuario set adm=1 where usuario="pedro3";

SELECT adm FROM usuario WHERE usuario="pedro1";
SELECT adm FROM usuario WHERE usuario="pedro3";