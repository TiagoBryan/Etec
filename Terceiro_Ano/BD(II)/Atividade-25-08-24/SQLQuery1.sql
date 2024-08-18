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





