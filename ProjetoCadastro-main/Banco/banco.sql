-- Arquivo de criação de banco de dados

drop database if exists projeto1;
create database projeto1;
use projeto1;

create table usuario (
    id_u int(4) primary key not null auto_increment,
    nome_usuario varchar(50) not null,
    email_usuario varchar(50) not null,
    fone_usuario varchar(50) null,
    senha varchar(30) not null
);

<?--insert into usuario
(nome_usuario, fone_usuario, email_usuario, senha) 
values ('Cassio','(18)3622-9046','cassio@mai.com','1234');

select * from usuario;

update  usuario set nome_usuario = "Zezinho", email_usuario = "ze@gmail.com";