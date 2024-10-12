-- Criação do Banco de Dados para a Indústria de Beleza
CREATE DATABASE Industria_de_Beleza;
--USE Industria_de_Beleza;

-- Tabela 'Regiao': Define as regiões geográficas onde os vendedores atuam.
CREATE TABLE Regiao (
    Codigo INT PRIMARY KEY,
    Nome VARCHAR(100)
);

-- Tabela 'PontoEstrategico': Define pontos estratégicos dentro de cada região, como áreas específicas de atuação dos vendedores.
CREATE TABLE PontoEstrategico (
    Codigo INT PRIMARY KEY,
    Nome VARCHAR(100),
    RegiaoCodigo INT,  -- Relacionamento com a tabela 'Regiao'
    FOREIGN KEY (RegiaoCodigo) REFERENCES Regiao(Codigo)
);

-- Tabela 'Vendedor': Representa os vendedores que trabalham para a indústria, associados a uma região específica.
CREATE TABLE Vendedor (
    Codigo INT PRIMARY KEY,
    Nome VARCHAR(100),
    RegiaoCodigo INT,  -- Relacionamento com a tabela 'Regiao'
    FOREIGN KEY (RegiaoCodigo) REFERENCES Regiao(Codigo)
);

-- Tabela 'Veiculo': Contém informações sobre os veículos utilizados pelos vendedores para o trabalho.
CREATE TABLE Veiculo (
    Codigo INT PRIMARY KEY,
    Nome VARCHAR(100), 
    VendedorCodigo INT,  -- Relacionamento com a tabela 'Vendedor'
    FOREIGN KEY (VendedorCodigo) REFERENCES Vendedor(Codigo)
);

-- Tabela 'Produto': Armazena os produtos vendidos pela indústria de beleza, com um status indicando se estão à venda ou não.
CREATE TABLE Produto (
    Codigo INT PRIMARY KEY,
    Nome VARCHAR(100),
    StatusVenda BIT  -- Indica se o produto está disponível para venda (1 = disponível, 0 = indisponível)
);


-- Tabela 'Cliente': Contém informações sobre os clientes que compram os produtos da indústria, associando-os às notas fiscais.
CREATE TABLE Cliente (
    Codigo INT PRIMARY KEY,
    Nome VARCHAR(100),  -- Nome do cliente
    Endereco VARCHAR(255),  -- Endereço do cliente
    DataNascimento DATE,  -- Data de nascimento do cliente
    CPF VARCHAR(11)  -- CPF do cliente
);

-- Tabela 'NotaFiscal': Representa as notas fiscais emitidas para cada venda, associando-as a um vendedor e cliente.
CREATE TABLE NotaFiscal (
    Codigo INT PRIMARY KEY,
    Data DATE,  -- Data de emissão da nota fiscal
    VendedorCodigo INT,  -- Relacionamento com a tabela 'Vendedor'
    ClienteCodigo INT,   -- Relacionamento com a tabela 'Cliente'
    FOREIGN KEY (VendedorCodigo) REFERENCES Vendedor(Codigo),
    FOREIGN KEY (ClienteCodigo) REFERENCES Cliente(Codigo)
);

-- Tabela 'NotaFiscalProduto': Faz a associação entre as notas fiscais e os produtos vendidos, armazenando as quantidades vendidas de cada produto.
CREATE TABLE NotaFiscalProduto (
    NotaFiscalCodigo INT,  -- Relacionamento com a tabela 'NotaFiscal'
    ProdutoCodigo INT,  -- Relacionamento com a tabela 'Produto'
    Quantidade INT,  -- Quantidade do produto vendido na nota fiscal
    FOREIGN KEY (NotaFiscalCodigo) REFERENCES NotaFiscal(Codigo),
    FOREIGN KEY (ProdutoCodigo) REFERENCES Produto(Codigo)
);

-- Tabela 'Escala': Representa a escala de uso dos veículos pelos vendedores, indicando quando um veículo foi utilizado por um vendedor.
CREATE TABLE Escala (
    Codigo INT PRIMARY KEY,
    DataUso DATE,  -- Data em que o veículo foi utilizado
    VendedorCodigo INT,  -- Relacionamento com a tabela 'Vendedor'
    VeiculoCodigo INT,  -- Relacionamento com a tabela 'Veiculo'
    FOREIGN KEY (VendedorCodigo) REFERENCES Vendedor(Codigo),
    FOREIGN KEY (VeiculoCodigo) REFERENCES Veiculo(Codigo)
);



-- Inserindo dados nas tabelas
-- Inserindo regiões e pontos estratégicos
INSERT INTO Regiao (Codigo, Nome) VALUES (1, 'Centro'), (2, 'Norte'), (3, 'Sul');
INSERT INTO PontoEstrategico (Codigo, Nome, RegiaoCodigo) VALUES 
(1, 'Ponto A', 1), 
(2, 'Ponto B', 1), 
(3, 'Ponto C', 1), 
(4, 'Ponto D', 2),
(5, 'Ponto E', 3);

-- Inserindo vendedores, associando-os às regiões
INSERT INTO Vendedor (Codigo, Nome, RegiaoCodigo) VALUES 
(1, 'João', 1), 
(2, 'Maria', 2),
(3, 'Pedro', 3);

-- Inserindo veículos, associando-os a vendedores
INSERT INTO Veiculo (Codigo, Nome, VendedorCodigo) VALUES 
(1, 'Veículo A', 1),
(2, 'Veículo B', 2),
(3, 'Veículo C', 3);

-- Inserindo produtos, com seu status de venda (1 = disponível, 0 = indisponível)
INSERT INTO Produto (Codigo, Nome, StatusVenda) VALUES 
(1, 'Produto A', 1),
(2, 'Produto B', 1),
(3, 'Produto C', 0);

-- Inserindo clientes
INSERT INTO Cliente (Codigo, Nome, Endereco, DataNascimento, CPF) VALUES
(1, 'Carlos Silva', 'Rua A, 123', '1985-05-12', '12345678901'),
(2, 'Ana Oliveira', 'Rua B, 456', '1990-06-24', '23456789012'),
(3, 'Roberto Souza', 'Rua C, 789', '1978-11-03', '34567890123');

-- Inserindo notas fiscais, associando-as aos vendedores e clientes
INSERT INTO NotaFiscal (Codigo, Data, VendedorCodigo, ClienteCodigo) VALUES 
(1, '2024-09-02', 1, 1),
(2, '2024-09-05', 2, 2),
(3, '2024-09-08', 3, 3);

-- Inserindo os produtos vendidos em cada nota fiscal
INSERT INTO NotaFiscalProduto (NotaFiscalCodigo, ProdutoCodigo, Quantidade) VALUES 
(1, 1, 10),
(2, 2, 5),
(3, 3, 7);

-- Inserindo escalas, indicando quando e qual veículo foi usado por cada vendedor
INSERT INTO Escala (Codigo, DataUso, VendedorCodigo, VeiculoCodigo) VALUES
(1, '2024-10-01', 1, 1),
(2, '2024-09-02', 2, 2),
(3, '2024-09-03', 3, 3);

-- Consulta para listar os pontos estratégicos de cada região.
SELECT Regiao.Nome AS Regiao, PontoEstrategico.Nome AS PontoEstrategico
FROM Regiao
JOIN PontoEstrategico ON Regiao.Codigo = PontoEstrategico.RegiaoCodigo;

-- Consulta para listar todas as regiões cadastradas.
SELECT Nome FROM Regiao;

-- Consulta para listar os vendedores e quais veículos utilizaram no último mês.
SELECT Vendedor.Nome AS Vendedor, Veiculo.Nome AS Veiculo, Escala.DataUso
FROM Vendedor
JOIN Escala ON Vendedor.Codigo = Escala.VendedorCodigo
JOIN Veiculo ON Escala.VeiculoCodigo = Veiculo.Codigo
WHERE Escala.DataUso BETWEEN DATEADD(MONTH, -1, GETDATE()) AND GETDATE();

-- Consulta para listar os vendedores e suas respectivas regiões.
SELECT Vendedor.Nome AS Vendedor, Regiao.Nome AS Regiao
FROM Vendedor
JOIN Regiao ON Vendedor.RegiaoCodigo = Regiao.Codigo;

-- Consulta para obter os produtos de um vendedor específico (João, VendedorCodigo = 1).
SELECT Produto.Nome AS Produto, NotaFiscal.Data AS DataVenda, NotaFiscalProduto.Quantidade
FROM NotaFiscal
JOIN NotaFiscalProduto ON NotaFiscal.Codigo = NotaFiscalProduto.NotaFiscalCodigo
JOIN Produto ON NotaFiscalProduto.ProdutoCodigo = Produto.Codigo
WHERE NotaFiscal.VendedorCodigo = 1;

-- Consulta para listar os vendedores que venderam um determinado produto (Produto A, ProdutoCodigo = 1).
SELECT Vendedor.Nome AS Vendedor, Produto.Nome AS Produto
FROM NotaFiscal
JOIN Vendedor ON NotaFiscal.VendedorCodigo = Vendedor.Codigo
JOIN NotaFiscalProduto ON NotaFiscal.Codigo = NotaFiscalProduto.NotaFiscalCodigo
JOIN Produto ON NotaFiscalProduto.ProdutoCodigo = Produto.Codigo
WHERE Produto.Codigo = 1;

-- Consulta para listar os produtos que ainda não foram vendidos.
SELECT Produto.Nome FROM Produto WHERE Produto.StatusVenda = 0;

-- Consulta para listar os detalhes de um veículo específico (Veículo com Código 1).
SELECT Veiculo.Nome AS Veiculo, Vendedor.Nome AS Vendedor, Escala.DataUso
FROM Escala
JOIN Veiculo ON Escala.VeiculoCodigo = Veiculo.Codigo
JOIN Vendedor ON Escala.VendedorCodigo = Vendedor.Codigo
WHERE Veiculo.Codigo = 1;

-- Consulta para obter a quantidade de itens vendidos em cada nota fiscal.
SELECT NotaFiscal.Codigo AS NotaFiscal, SUM(NotaFiscalProduto.Quantidade) AS TotalItens
FROM NotaFiscal
JOIN NotaFiscalProduto ON NotaFiscal.Codigo = NotaFiscalProduto.NotaFiscalCodigo
GROUP BY NotaFiscal.Codigo;




