create table usuarios(
id int auto_increment primary key,
nome varchar(40) not null,
sobrenome varchar(80) not null,
usuario varchar (20) unique not null,
email varchar (100) unique not null,
senha varchar (20) not null,
confirmar_senha varchar (20) not null
)