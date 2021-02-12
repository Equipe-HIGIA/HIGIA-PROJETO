use sistema_cadastro_prof;


create table profissional(

id int Not null primary key auto_increment,
senha varchar(90) not null,
Primeiro_Nome varchar(90) not null,
Ultimo_Nome varchar(100) not null,
Cidade varchar(100) not null,
CPF varchar(50) not null,
Formacao_Academica varchar(100) not null,
Experiencia_Profi varchar(100) not null,
Especialidade varchar(100) not null,
email varchar(50) not null,
regiao varchar(100) not null
);