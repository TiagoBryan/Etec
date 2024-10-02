Create database Vendas

CREATE TABLE TBL_Estado_Civil (
    cod_est_civ INT PRIMARY KEY,
    desc_est_civ VARCHAR(50)
);

CREATE TABLE TBL_Cliente (
    cod_cliente INT PRIMARY KEY,
    nome_cliente VARCHAR(100),
    cod_est_civ INT,
    salario DECIMAL(10, 2),
    FOREIGN KEY (cod_est_civ) REFERENCES TBL_Estado_Civil(cod_est_civ)
);

CREATE TABLE TBL_Conjuge (
    cod_conjuge INT PRIMARY KEY,
    nome_conjuge VARCHAR(100),
    cod_cliente INT,
    FOREIGN KEY (cod_cliente) REFERENCES TBL_Cliente(cod_cliente)
);

CREATE TABLE TBL_Telefone (
    cod_fone INT PRIMARY KEY,
    cod_cliente INT,
    numero_fone VARCHAR(20),
    FOREIGN KEY (cod_cliente) REFERENCES TBL_Cliente(cod_cliente)
);

CREATE TABLE TBL_Tipo_Fone (
    cod_fone INT PRIMARY KEY,
    desc_fone VARCHAR(50)
);

CREATE TABLE TBL_Produto (
    cod_produto INT PRIMARY KEY,
    nome_produto VARCHAR(100),
    tipo_produto VARCHAR(50)
);

CREATE TABLE TBL_Func (
    cod_func INT PRIMARY KEY,
    nome_func VARCHAR(100)
);

CREATE TABLE TBL_Premio (
    cod_func INT PRIMARY KEY,
    valor_premio DECIMAL(10, 2),
    FOREIGN KEY (cod_func) REFERENCES TBL_Func(cod_func)
);

CREATE TABLE TBL_Dependente (
    cod_dep INT PRIMARY KEY,
    nome_dep VARCHAR(100),
    data_nasc DATE,
    cod_func INT,
    FOREIGN KEY (cod_func) REFERENCES TBL_Func(cod_func)
);


CREATE TABLE TBL_Pedido (
    cod_pedido INT PRIMARY KEY,
    cod_cliente INT,
    cod_func INT,
    data_pedido DATE,
    FOREIGN KEY (cod_cliente) REFERENCES TBL_Cliente(cod_cliente),
    FOREIGN KEY (cod_func) REFERENCES TBL_Func(cod_func)
);

CREATE TABLE TBL_Item_Pedido (
    cod_pedido INT,
    cod_produto INT,
    qtde_produto INT,
    PRIMARY KEY (cod_pedido, cod_produto),
    FOREIGN KEY (cod_pedido) REFERENCES TBL_Pedido(cod_pedido),
    FOREIGN KEY (cod_produto) REFERENCES TBL_Produto(cod_produto)
);

--Parte 1 --
INSERT INTO TBL_Estado_Civil (cod_est_civ, desc_est_civ) VALUES (1, 'Solteiro'), (2, 'Casado'), (3, 'Divorciado');
INSERT INTO TBL_Cliente (cod_cliente, nome_cliente, cod_est_civ, salario) VALUES (1, 'João Silva', 2, 3000.00), (2, 'Maria Oliveira', 1, 4500.00), (3, 'Carlos Souza', 2, 5000.00);
INSERT INTO TBL_Conjuge (cod_conjuge, nome_conjuge, cod_cliente) VALUES (1, 'Ana Silva', 1), (2, 'Juliana Souza', 3);
INSERT INTO TBL_Telefone (cod_fone, cod_cliente, numero_fone) VALUES (1, 1, '1234-5678'), (2, 2, '2345-6789'), (3, 3, '3456-7890');
INSERT INTO TBL_Tipo_Fone (cod_fone, desc_fone) VALUES (1, 'Residencial'), (2, 'Celular'), (3, 'Comercial');
INSERT INTO TBL_Produto (cod_produto, nome_produto, tipo_produto) VALUES (1, 'Produto A', 'Eletrônico'), (2, 'Produto B', 'Móvel'), (3, 'Produto C', 'Eletrodoméstico');
INSERT INTO TBL_Func (cod_func, nome_func) VALUES (1, 'Francisco'), (2, 'Roberto'), (3, 'Ana Paula');
INSERT INTO TBL_Premio (cod_func, valor_premio) VALUES (1, 1000.00), (2, 1500.00), (3, 2000.00);
INSERT INTO TBL_Dependente (cod_dep, nome_dep, data_nasc, cod_func) VALUES (1, 'Pedro', '2010-05-15', 1), (2, 'Lucas', '2012-08-20', 2), (3, 'Beatriz', '2015-10-10', 3);
INSERT INTO TBL_Pedido (cod_pedido, cod_cliente, cod_func, data_pedido) VALUES (1, 1, 1, '2024-08-01'), (2, 2, 2, '2024-08-02'), (3, 3, 3, '2024-08-03');
INSERT INTO TBL_Item_Pedido (cod_pedido, cod_produto, qtde_produto) VALUES (1, 1, 2), (2, 2, 3), (3, 3, 1);


SELECT C.nome_cliente, T.numero_fone FROM TBL_Cliente C INNER JOIN TBL_Telefone T ON C.cod_cliente = T.cod_cliente;

SELECT C.nome_cliente, CJ.nome_conjuge FROM TBL_Cliente C INNER JOIN TBL_Conjuge CJ ON C.cod_cliente = CJ.cod_cliente WHERE C.cod_est_civ = (SELECT cod_est_civ FROM TBL_Estado_Civil WHERE desc_est_civ = 'Casado');

SELECT C.nome_cliente, T.numero_fone, TF.desc_fone FROM TBL_Cliente C INNER JOIN TBL_Telefone T ON C.cod_cliente = T.cod_cliente INNER JOIN TBL_Tipo_Fone TF ON T.cod_fone = TF.cod_fone;

SELECT P.*, C.nome_cliente, F.nome_func FROM TBL_Pedido P INNER JOIN TBL_Cliente C ON P.cod_cliente = C.cod_cliente INNER JOIN TBL_Func F ON P.cod_func = F.cod_func;

SELECT P.cod_pedido, P.data_pedido, C.nome_cliente FROM TBL_Pedido P INNER JOIN TBL_Cliente C ON P.cod_cliente = C.cod_cliente INNER JOIN TBL_Func F ON P.cod_func = F.cod_func WHERE F.nome_func = 'Francisco';

--Parte 2--
INSERT INTO TBL_Cliente (cod_cliente, nome_cliente, cod_est_civ, salario) VALUES (4, 'Rener', 1, 4000.00), (5, 'Daniel', 2, 3500.00);
INSERT INTO TBL_Produto (cod_produto, nome_produto, tipo_produto) VALUES (4, 'Fosforo', 'Utilidades');
INSERT INTO TBL_Func (cod_func, nome_func) VALUES (4, 'Roseane');
INSERT INTO TBL_Pedido (cod_pedido, cod_cliente, cod_func, data_pedido) VALUES(4, 4, 1, '2024-08-04'),(5, 5, 4, '2024-08-05');
INSERT INTO TBL_Item_Pedido (cod_pedido, cod_produto, qtde_produto) VALUES(4, 1, 1),(4, 4, 2),(5, 1, 1),(5, 2, 1),(5, 3, 1);

SELECT p.cod_pedido, p.data_pedido, f.nome_func FROM TBL_Pedido p JOIN TBL_Cliente c ON p.cod_cliente = c.cod_cliente JOIN TBL_Func f ON p.cod_func = f.cod_func WHERE c.nome_cliente = 'Rener';

SELECT f.nome_func, d.nome_dep, d.data_nasc FROM TBL_Func f JOIN TBL_Dependente d ON f.cod_func = d.cod_func;

SELECT p.cod_pedido, p.data_pedido, pr.nome_produto FROM TBL_Pedido p JOIN TBL_Item_Pedido ip ON p.cod_pedido = ip.cod_pedido JOIN TBL_Produto pr ON ip.cod_produto = pr.cod_produto;

SELECT p.cod_pedido, p.data_pedido, f.nome_func FROM TBL_Pedido p JOIN TBL_Item_Pedido ip ON p.cod_pedido = ip.cod_pedido JOIN TBL_Produto pr ON ip.cod_produto = pr.cod_produto JOIN TBL_Func f ON p.cod_func = f.cod_func WHERE pr.nome_produto = 'Fosforo';

SELECT p.cod_pedido, p.data_pedido, pr.nome_produto FROM TBL_Pedido p JOIN TBL_Cliente c ON p.cod_cliente = c.cod_cliente JOIN TBL_Item_Pedido ip ON p.cod_pedido = ip.cod_pedido JOIN TBL_Produto pr ON ip.cod_produto = pr.cod_produto WHERE c.nome_cliente = 'Daniel';

SELECT pr.nome_produto FROM TBL_Pedido p JOIN TBL_Item_Pedido ip ON p.cod_pedido = ip.cod_pedido JOIN TBL_Produto pr ON ip.cod_produto = pr.cod_produto JOIN TBL_Func f ON p.cod_func = f.cod_func WHERE f.nome_func = 'Roseane';

SELECT c.nome_cliente, pr.nome_produto FROM TBL_Pedido p JOIN TBL_Cliente c ON p.cod_cliente = c.cod_cliente JOIN TBL_Item_Pedido ip ON p.cod_pedido = ip.cod_pedido JOIN TBL_Produto pr ON ip.cod_produto = pr.cod_produto;

SELECT f.nome_func, pr.nome_produto FROM TBL_Pedido p JOIN TBL_Item_Pedido ip ON p.cod_pedido = ip.cod_pedido JOIN TBL_Produto pr ON ip.cod_produto = pr.cod_produto JOIN TBL_Func f ON p.cod_func = f.cod_func;

--Parte 3 --

INSERT INTO TBL_Produto (cod_produto, nome_produto, tipo_produto) VALUES (5, 'Produto D', 'Eletrônico'), (6, 'Produto E', 'Móvel'), (7, 'Produto F', 'Eletrodoméstico');

-- Group By --
SELECT F.nome_func, SUM(P.valor_premio) AS total_premio FROM TBL_Func F JOIN TBL_Premio P ON F.cod_func = P.cod_func GROUP BY F.nome_func;

SELECT F.nome_func, COUNT(D.cod_dep) AS qtde_dependentes FROM TBL_Func F LEFT JOIN TBL_Dependente D ON F.cod_func = D.cod_func GROUP BY F.nome_func;

SELECT EC.desc_est_civ, COUNT(C.cod_cliente) AS qtde_clientes FROM TBL_Cliente C JOIN TBL_Estado_Civil EC ON C.cod_est_civ = EC.cod_est_civ GROUP BY EC.desc_est_civ;

-- SubQuery --

SELECT * FROM TBL_Cliente C WHERE NOT EXISTS ( SELECT 1 FROM TBL_Telefone T WHERE T.cod_cliente = C.cod_cliente);

SELECT * FROM TBL_Cliente C WHERE C.cod_est_civ = (SELECT cod_est_civ FROM TBL_Estado_Civil WHERE desc_est_civ = 'Solteiro');

SELECT * FROM TBL_Cliente C WHERE C.cod_est_civ = (SELECT cod_est_civ FROM TBL_Estado_Civil WHERE desc_est_civ = 'Casado');

SELECT * FROM TBL_Func F WHERE NOT EXISTS (SELECT 1 FROM TBL_Premio P WHERE P.cod_func = F.cod_func);

SELECT * FROM TBL_Func F WHERE NOT EXISTS (SELECT 1 FROM TBL_Dependente D WHERE D.cod_func = F.cod_func);

SELECT * FROM TBL_Produto P WHERE NOT EXISTS (SELECT 1 FROM TBL_Item_Pedido IP WHERE IP.cod_produto = P.cod_produto);

