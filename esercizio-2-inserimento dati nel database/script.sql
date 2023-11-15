drop table esercizioalimento;
create table esercizioalimento(
	id INT primary key auto_increment,
	nome VARCHAR(50) not null,
	stagione VARCHAR(50) not null,
	tipologia VARCHAR(50) not null
);

insert into esercizioalimento(nome,stagione,tipologia) VALUES('nome-1', 'stagione-1', 'tipologia-1');
insert into esercizioalimento(nome,stagione,tipologia) VALUES('nome-2', 'stagione-2', 'tipologia-2');
insert into esercizioalimento(nome,stagione,tipologia) VALUES('nome-3', 'stagione-3', 'tipologia-3');

select * from esercizioalimento;