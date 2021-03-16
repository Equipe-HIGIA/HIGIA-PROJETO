 USE HIGIA;

CREATE TABLE USUARIO(
id int primary key auto_increment,
cpf varchar(14) not null,
senha varchar(128) not null,
nome varchar(255) not null,
endereco varchar(255) not null,
numero int not null,
cep varchar(11) not null,
cidade int not null,
celular varchar(20) not null,
fixo varchar(20),
email varchar(255) not null,
genero char(1)

);

create table profissional(
id int primary key auto_increment,
paginas varchar(255),
especialidade varchar(255) not null,
qualificacao varchar(255) not null,
ambiente char(1),
grupo int default 1,
localatendimento char(1),
servico text,
raio decimal(6,2),
idades varchar(255),
especial char(1) default 'S',
usuario_id int
);

alter table profissional add constraint fk_profissional_usuario foreign key (usuario_id) references usuario(id);

create table cliente(
id int primary key auto_increment,
nivel int,
medicamentos varchar(255),
usuario_id int
);

alter table cliente add constraint fk_cliente_usuario foreign key (usuario_id) references usuario(id);

create table cliente_profissional(
id int primary key auto_increment,
cliente_id int,
profissional_id int,
data timestamp,
comentario varchar(255),
nota int
);

alter table cliente_profissional add constraint fk_cliente_profissional_cliente foreign key (cliente_id) references cliente(id);

alter table cliente_profissional add constraint fk_cliente_profissional_profissional foreign key (profissional_id) references profissional(id);


