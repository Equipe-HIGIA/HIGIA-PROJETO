use sistema_cadastro_cliente;


create table cliente(

id int Not null primary key auto_increment,
email varchar(50) not null,
senha varchar(90) not null,
Primeiro_Nome varchar(90) not null,
Ultimo_Nome varchar(100) not null,
Cidade varchar(100) not null,
CPF varchar(50) not null,
regiao varchar(100) not null
);