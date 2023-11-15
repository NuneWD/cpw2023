drop database esercizi;
create database esercizi;
use esercizi;

drop table stagione;
create table stagione(
	id INT primary key auto_increment,
	nome VARCHAR(50) not null,
	giorni INT
);

drop table tipologia;
create table tipologia(
	id INT primary key auto_increment,
	nome VARCHAR(50) not null
);

drop table alimento;
create table alimento(
	id INT primary key auto_increment,
	nome VARCHAR(50) not null,
	stagione_id INT,
	tipologia_id INT not null,
	foreign key (stagione_id) references stagione(id),
	foreign key (tipologia_id) references tipologia(id)
);


insert into stagione(nome,giorni) VALUES('stagione-1', 31);
insert into stagione(nome,giorni) VALUES('stagione-2', 30);

insert into tipologia(nome) VALUES('tipologia-1');
insert into tipologia(nome) VALUES('tipologia-2');

insert into alimento(nome,stagione_id,tipologia_id) VALUES('nome-1', 1, 1);
insert into alimento(nome,stagione_id,tipologia_id) VALUES('nome-2', 1, 2);
insert into alimento(nome,stagione_id,tipologia_id) VALUES('nome-3', 2, 3);



select * from stagione;
select * from tipologia;
select * from alimento;