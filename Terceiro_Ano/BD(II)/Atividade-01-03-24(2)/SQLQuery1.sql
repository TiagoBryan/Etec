create database TB

create table Funcionarios(
	id int primary key identity(1,1) not null,
	nome varchar(60) null,
	email varchar(60) null,
	salario float(10) null,
	data_nascimento date null,
	cidade varchar(60) null,
	estado varchar(2) null
)

insert into Funcionarios (nome, email, salario, data_nascimento, cidade, estado)
values
('João', 'joao1970@gmail.com', 8000.00, '1970-05-20', 'São Paulo', 'SP'),
('Camila', 'camila@gmail.com', 3000.00, '1985-07-23', 'São Paulo', 'SP'),
('Marcio', 'marcio@gmail.com', 900.00, '1982-03-15', 'Campinas', 'SP'),
('Fernanda', 'fernanda@gmail.com', 3500.00, '1987-08-18', 'Rio de Janeiro', 'RJ'),
('José', 'jose@gmail.com', 2200.00, '1990-09-18', 'São Guaxapé', 'MG'),
('Fabiano', 'fabiano@gmail.com', 6800.00, '1981-01-30', 'Poços de Caldas', 'MG'),
('Marcos', 'marcos@gmail.com', 3200.00, '1989-02-08', 'Vitória', 'ES')


select * from Funcionarios where nome like 'a%' or nome like 'e%' or nome like 'i%' or nome like 'o%' or nome like 'u%'
select nome, salario from Funcionarios order by salario desc
select nome, email from Funcionarios order by nome asc
select max(salario) from Funcionarios
select avg(salario) from Funcionarios
select nome, salario, email from Funcionarios where id between 3 and 7
select * from Funcionarios

