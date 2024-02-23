create table Funcionarios (
	Codigo_func int identity(1,1) not null,
	NomeFunc char(30) not null,
	SobreNome char(30) not null,
	DataNasci smalldatetime not null,
	CPF varchar(14) not null,
	RG varchar(20) not null,
	Endereco varchar(50) not null,
	CEP varchar(10) not null,
	Cidade char(30) not null,
	Fone char(16) null,
	CodigoDepartamento int not null,
	Funcao char(30) not null,
	Salario decimal(10, 2) not null,
PRIMARY KEY CLUSTERED 
(
	[Codigo_func] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO

create table Departamentos(
	Id int identity(1,1) not null,
	Codigo_depto int not null,
	NomeDepto char(30) not null,
PRIMARY KEY CLUSTERED 
(
	[Id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO

INSERT INTO Funcionarios (NomeFunc, SobreNome, DataNasci, CPF, RG, Endereco, CEP, Cidade, Fone, CodigoDepartamento, Funcao, Salario)
VALUES 
('João', 'Silva', '1990-15-05', '123.456.789-01', 'ABC123456', 'Rua A, 123', '12345-678', 'Cidade A', '(11) 1234-5678', 1, 'Analista', 5000.00),
('Maria', 'Santos', '1985-28-02', '987.654.321-09', 'XYZ987654', 'Av. B, 456', '54321-876', 'Cidade B', '(22) 9876-5432', 2, 'Desenvolvedor', 6000.00),
('Carlos', 'Oliveira', '1988-09-10', '111.222.333-44', 'DEF112233', 'Rua C, 789', '98765-432', 'Cidade C', '(33) 4567-8901', 3, 'Gerente', 8000.00),
('Ana', 'Pereira', '1995-12-03', '444.555.666-77', 'GHI445566', 'Av. D, 101', '23456-789', 'Cidade D', '(44) 1234-5678', 4, 'Analista de Marketing', 5500.00),
('Rodrigo', 'Martins', '1980-20-07', '999.888.777-66', 'JKL998877', 'Rua E, 202', '87654-321', 'Cidade E', '(55) 9876-5432', 5, 'Desenvolvedor', 6200.00),
('Juliana', 'Costa', '1992-01-08', '333.222.111-00', 'MNO333111', 'Av. F, 303', '76543-210', 'Cidade F', '(66) 2345-6789', 6, 'Analista Financeiro', 5800.00),
('Felipe', 'Lima', '1987-15-05', '555.444.333-22', 'PQR554433', 'Rua G, 404', '43210-987', 'Cidade G', '(77) 8765-4321', 7, 'Coordenador de Vendas', 7500.00),
('Camila', 'Alves', '1998-27-11', '777.666.555-88', 'STU776655', 'Av. H, 505', '21098-765', 'Cidade H', '(88) 1234-5678', 8, 'Desenvolvedor', 6100.00),
('Roberto', 'Ribeiro', '1983-06-12', '222.333.444-55', 'VWX223344', 'Rua I, 606', '10987-654', 'Cidade I', '(99) 9876-5432', 9, 'Analista de Recursos Humanos', 5700.00),
('Larissa', 'Ferreira', '1991-09-05', '888.999.000-11', 'YZA889900', 'Av. J, 707', '87654-321', 'Cidade J', '(11) 2345-6789', 10, 'Analista de Compras', 5900.00);


/*INSERT INTO Funcionarios (NomeFunc, SobreNome, DataNasci, CPF, RG, Endereco, CEP, Cidade, Fone, CodigoDepartamento, Funcao, Salario) 
values 
('Roberto', 'Ribeiro', '1983-06-12', '222.333.444-55', 'VWX223344', 'Rua I, 606', '50000-001', 'Cidade I', '(99) 9876-5432', 11, 'Telefonista', 5700.00),
('Roberto', 'Ribeiro', '1983-06-12', '222.333.444-55', 'VWX223344', 'Rua I, 606', '50000-001', 'Cidade I', '(99) 9876-5432', 12, 'Analista de Recursos Humanos', 5700.00);*/

INSERT INTO Departamentos(Codigo_depto, NomeDepto)
VALUES 
(1, 'Desenvolvimento de Software'),
(2, 'Recursos Humanos'),
(3, 'Marketing')

select NomeFunc from Funcionarios where CEP = '50000-001' and Funcao = 'Telefonista'
