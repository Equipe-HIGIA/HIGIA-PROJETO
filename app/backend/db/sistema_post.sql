use sistema_post;


create table posts(

id int(110) Not null primary key auto_increment,
image varchar(1000) not null,
titulo varchar(3000) not null,
Area_Texto varchar(25000) not null,
subtitulo varchar(100) not null,
area_texto_principal varchar(1559) not null,
opcao varchar(1000) not null,
preco varchar(1000) not null
);