-- Cria��o da base de dados chamada "Industria_de_Beleza"
CREATE DATABASE Industria_de_Beleza;
USE Industria_de_Beleza;

-- Tabela "Regiao" com os atributos C�digo e Nome.
CREATE TABLE Regiao (
    Codigo INT PRIMARY KEY, -- Chave prim�ria da tabela Regi�o
    Nome VARCHAR(100)       -- Nome da regi�o
);

-- Tabela "PontoEstrategico" com rela��o � "Regiao" por meio de uma chave estrangeira.
CREATE TABLE PontoEstrategico (
    Codigo INT PRIMARY KEY,   -- Chave prim�ria do ponto estrat�gico
    Nome VARCHAR(100),        -- Nome do ponto estrat�gico
    RegiaoCodigo INT,         -- Chave estrangeira referenciando a tabela "Regiao"
    FOREIGN KEY (RegiaoCodigo) REFERENCES Regiao(Codigo) -- Relacionamento com a tabela "Regiao"
);

-- Tabela "Vendedor" com rela��o � "Regiao" por meio de uma chave estrangeira.
CREATE TABLE Vendedor (
    Codigo INT PRIMARY KEY,  -- Chave prim�ria do vendedor
    Nome VARCHAR(100),       -- Nome do vendedor
    RegiaoCodigo INT,        -- Chave estrangeira referenciando a tabela "Regiao"
    FOREIGN KEY (RegiaoCodigo) REFERENCES Regiao(Codigo) -- Relacionamento com a tabela "Regiao"
);

-- Tabela "Veiculo" com rela��o � "Vendedor" por meio de uma chave estrangeira.
CREATE TABLE Veiculo (
    Codigo INT PRIMARY KEY,
    Nome VARCHAR(100),        -- Nome do ve�culo
    VendedorCodigo INT,       -- C�digo do vendedor associado
    DataUso DATE,             -- Data de uso do ve�culo
    FOREIGN KEY (VendedorCodigo) REFERENCES Vendedor(Codigo)
);

-- Tabela "Produto" que armazena produtos dispon�veis e seu status de venda.
CREATE TABLE Produto (
    Codigo INT PRIMARY KEY,  -- Chave prim�ria do produto
    Nome VARCHAR(100),       -- Nome do produto
    StatusVenda BIT          -- Status de venda (1 = vendido, 0 = n�o vendido)
);

-- Tabela "NotaFiscal" com rela��o � "Vendedor" por meio de uma chave estrangeira.
CREATE TABLE NotaFiscal (
    Codigo INT PRIMARY KEY,  -- Chave prim�ria da nota fiscal
    Data DATE,               -- Data da emiss�o da nota
    VendedorCodigo INT,      -- Chave estrangeira referenciando a tabela "Vendedor"
    FOREIGN KEY (VendedorCodigo) REFERENCES Vendedor(Codigo) -- Relacionamento com a tabela "Vendedor"
);

-- Tabela associativa "NotaFiscalProduto" para criar a rela��o entre nota fiscal e produtos.
CREATE TABLE NotaFiscalProduto (
    NotaFiscalCodigo INT,    -- Chave estrangeira referenciando a tabela "NotaFiscal"
    ProdutoCodigo INT,       -- Chave estrangeira referenciando a tabela "Produto"
    Quantidade INT,          -- Quantidade de produtos vendidos
    FOREIGN KEY (NotaFiscalCodigo) REFERENCES NotaFiscal(Codigo), -- Relacionamento com a tabela "NotaFiscal"
    FOREIGN KEY (ProdutoCodigo) REFERENCES Produto(Codigo)        -- Relacionamento com a tabela "Produto"
);

-- Inser��o das regi�es.
INSERT INTO Regiao (Codigo, Nome) VALUES (1, 'Centro');
INSERT INTO Regiao (Codigo, Nome) VALUES (2, 'Norte'), (3, 'Sul'), (4, 'Leste'), (5, 'Oeste');

-- Inser��o dos vendedores, que est�o associados �s regi�es.
INSERT INTO Vendedor (Codigo, Nome, RegiaoCodigo) VALUES (1, 'Jo�o', 1); -- Vendedor Joao na regi�o Centro
INSERT INTO Vendedor (Codigo, Nome, RegiaoCodigo) 
VALUES 
(2, 'Maria', 2),   -- Vendedora Maria na regi�o Norte
(3, 'Carlos', 3),  -- Vendedor Carlos na regi�o Sul
(4, 'Ana', 4),     -- Vendedora Ana na regi�o Leste
(5, 'Pedro', 5);   -- Vendedor Pedro na regi�o Oeste

-- Inser��o dos veiculos usados pelos vendedores, com as datas de uso.
INSERT INTO Veiculo (Codigo, Nome, VendedorCodigo, DataUso) 
VALUES 
(1, 'Ve�culo A', 1, '2024-09-01'),  -- Ve�culo de Jo�o na regi�o Centro
(2, 'Ve�culo B', 2, '2024-09-03'),  -- Ve�culo de Maria na regi�o Norte
(3, 'Ve�culo C', 3, '2024-09-04'),  -- Ve�culo de Carlos na regi�o Sul
(4, 'Ve�culo D', 4, '2024-09-05'),  -- Ve�culo de Ana na regi�o Leste
(5, 'Ve�culo E', 5, '2024-09-06');  -- Ve�culo de Pedro na regi�o Oeste

-- Inser��o de produtos com o status de venda (1 = vendido e 0 = n�o vendido).
INSERT INTO Produto (Codigo, Nome, StatusVenda) VALUES (1, 'Produto A', 1); -- Produto vendido
INSERT INTO Produto (Codigo, Nome, StatusVenda) 
VALUES 
(2, 'Produto B', 1),  -- Produto vendido
(3, 'Produto C', 0),  -- Produto n�o vendido
(4, 'Produto D', 1);  -- Produto vendido

-- Inser��o de notas fiscais emitidas pelos vendedores nas respectivas datas.
INSERT INTO NotaFiscal (Codigo, Data, VendedorCodigo) VALUES (1, '2024-09-02', 1); -- Nota Fiscal emitida por Jo�o
INSERT INTO NotaFiscal (Codigo, Data, VendedorCodigo) 
VALUES 
(2, '2024-09-03', 2),  -- Nota Fiscal emitida por Maria
(3, '2024-09-04', 3),  -- Nota Fiscal emitida por Carlos
(4, '2024-09-05', 4),  -- Nota Fiscal emitida por Ana
(5, '2024-09-06', 5);  -- Nota Fiscal emitida por Pedro

-- Inser��o dos produtos nas notas fiscais.
INSERT INTO NotaFiscalProduto (NotaFiscalCodigo, ProdutoCodigo, Quantidade) VALUES (1, 1, 10); -- Nota 1 vendeu 10 unidades do Produto A
INSERT INTO NotaFiscalProduto (NotaFiscalCodigo, ProdutoCodigo, Quantidade) 
VALUES 
(2, 2, 5),  -- Nota 2 vendeu 5 unidades do Produto B
(3, 3, 0),  -- Nota 3 n�o vendeu Produto C
(4, 4, 8),  -- Nota 4 vendeu 8 unidades do Produto D
(5, 1, 3);  -- Nota 5 vendeu 3 unidades do Produto A

-- Inser��o de pontos estrat�gicos para as regi�es.
INSERT INTO PontoEstrategico (Codigo, Nome, RegiaoCodigo) 
VALUES (1, 'Ponto A', 1), (2, 'Ponto B', 1), (3, 'Ponto C', 1);  -- Ponto na regi�o Centro
INSERT INTO PontoEstrategico (Codigo, Nome, RegiaoCodigo) 
VALUES 
(4, 'Ponto D', 2),  -- Ponto na regi�o Norte
(5, 'Ponto E', 2),  
(6, 'Ponto F', 3),  -- Ponto na regi�o Sul
(7, 'Ponto G', 3),  
(8, 'Ponto H', 4),  -- Ponto na regi�o Leste
(9, 'Ponto I', 5);  -- Ponto na regi�o Oeste


-- Consulta para listar os pontos estrat�gicos de cada regi�o.
SELECT Regiao.Nome AS Regiao, PontoEstrategico.Nome AS PontoEstrategico
FROM Regiao
JOIN PontoEstrategico ON Regiao.Codigo = PontoEstrategico.RegiaoCodigo;

-- Consulta para listar todas as regi�es cadastradas.
SELECT Nome FROM Regiao;

-- Consulta para listar os vendedores e quais ve�culos utilizaram no �ltimo m�s.
SELECT Vendedor.Nome, Veiculo.Codigo, Veiculo.Nome
FROM Vendedor
JOIN Veiculo ON Vendedor.Codigo = Veiculo.VendedorCodigo
WHERE DataUso BETWEEN DATEADD(MONTH, -1, GETDATE()) AND GETDATE();

-- Consulta para listar os vendedores e suas respectivas regi�es.
SELECT Vendedor.Nome, Regiao.Nome
FROM Vendedor
JOIN Regiao ON Vendedor.RegiaoCodigo = Regiao.Codigo;

-- Consulta para obter os produtos de um vendedor espec�fico (Jo�o, VendedorCodigo = 1).
SELECT 
    Produto.Codigo AS Codigo_Produto,
    Produto.Nome AS Nome_Produto,
    Produto.StatusVenda,
    NotaFiscal.Codigo AS Codigo_NotaFiscal,
    NotaFiscal.Data AS Data_NotaFiscal,
    NotaFiscalProduto.Quantidade AS Quantidade_Produto_Vendido
FROM 
    NotaFiscal
JOIN 
    NotaFiscalProduto ON NotaFiscal.Codigo = NotaFiscalProduto.NotaFiscalCodigo
JOIN 
    Produto ON NotaFiscalProduto.ProdutoCodigo = Produto.Codigo
WHERE 
    NotaFiscal.VendedorCodigo = 1;


-- Consulta para listar os vendedores que venderam um determinado produto (Produto A, ProdutoCodigo = 1).
SELECT Vendedor.Nome
FROM Vendedor
JOIN NotaFiscal ON Vendedor.Codigo = NotaFiscal.VendedorCodigo
JOIN NotaFiscalProduto ON NotaFiscal.Codigo = NotaFiscalProduto.NotaFiscalCodigo
WHERE ProdutoCodigo = 1;

-- Consulta para listar os produtos que ainda n�o foram vendidos.
SELECT Nome FROM Produto WHERE StatusVenda = 0;

-- Consulta para listar os detalhes de um ve�culo espec�fico (Ve�culo com C�digo 1).
SELECT * FROM Veiculo WHERE Codigo = 1;

-- Consulta para obter a quantidade de itens vendidos em cada nota fiscal.
SELECT NotaFiscal.Codigo, SUM(NotaFiscalProduto.Quantidade) AS TotalItens
FROM NotaFiscal
JOIN NotaFiscalProduto ON NotaFiscal.Codigo = NotaFiscalProduto.NotaFiscalCodigo
GROUP BY NotaFiscal.Codigo;

