create table Cds(
	Codigo int identity(1,1) not null,
	Nome_cd char(30) not null,
	DataCompra smalldatetime null,
	ValorPago decimal(10, 2)  null,
	LocalCompra char(30) null,
	Album bit not null,
PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO

create table Musicas(
	Id int identity(1,1) not null,
	Numero_musica int not null,
	Nome_musica char(30) not null,
	Artista char(30) not null,
	Tempo time not null,
	CodigoCD int,
PRIMARY KEY CLUSTERED 
(
	Id ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO

insert into Cds(Nome_cd, DataCompra, ValorPago, LocalCompra, Album) VAlUES ('The Beatles', '2022-23-01', 134.45, 'Loja 1', 1)
insert into Cds(Nome_cd, DataCompra, ValorPago, LocalCompra, Album) VAlUES ('Let it be', '2010-28-03', 234.21, 'Loja 2', 1)
insert into Cds(Nome_cd, DataCompra, ValorPago, LocalCompra, Album) VAlUES ('Revolver', '2005-03-09', 180.75, 'Loja 3', 0)
insert into Cds(Nome_cd, DataCompra, ValorPago, LocalCompra, Album) VAlUES ('Help!', '1995-06-12', 312.45, 'Loja 4', 1)
insert into Cds(Nome_cd, DataCompra, ValorPago, LocalCompra, Album) VAlUES ('Abbey Road', '1990-04-11', 434.45, 'Loja 5', 0)

insert into Musicas(Numero_musica, Nome_musica, Artista,Tempo,CodigoCD) values (10, 'Hey jude', 'Jhon Lennon', '0:7:12', 1)
INSERT INTO Musicas(Numero_musica, Nome_musica, Artista, Tempo, CodigoCD) VALUES (20, 'Bohemian Rhapsody', 'Queen', '0:5:55', 2);
INSERT INTO Musicas(Numero_musica, Nome_musica, Artista, Tempo, CodigoCD) VALUES (30, 'Hotel California', 'Eagles', '0:6:30', 3);
INSERT INTO Musicas(Numero_musica, Nome_musica, Artista, Tempo, CodigoCD) VALUES (40, 'Stairway to Heaven', 'Led Zeppelin', '0:8:02', 4);
INSERT INTO Musicas(Numero_musica, Nome_musica, Artista, Tempo, CodigoCD) VALUES (50, 'Like a Rolling Stone', 'Bob Dylan', '0:6:13', 5);
INSERT INTO Musicas(Numero_musica, Nome_musica, Artista, Tempo, CodigoCD) VALUES (60, 'What''s Going On', 'Marvin Gaye', '0:3:52', 6);
INSERT INTO Musicas(Numero_musica, Nome_musica, Artista, Tempo, CodigoCD) VALUES (70, 'Billie Jean', 'Michael Jackson', '0:4:54', 7);
INSERT INTO Musicas(Numero_musica, Nome_musica, Artista, Tempo, CodigoCD) VALUES (80, 'Purple Haze', 'Jimi Hendrix', '0:2:51', 8);
INSERT INTO Musicas(Numero_musica, Nome_musica, Artista, Tempo, CodigoCD) VALUES (90, 'Every Breath You Take', 'The Police', '0:4:13', 9);
INSERT INTO Musicas(Numero_musica, Nome_musica, Artista, Tempo, CodigoCD) VALUES (100, 'Sweet Child o'' Mine', 'Guns N'' Roses', '0:5:56', 10);
INSERT INTO Musicas(Numero_musica, Nome_musica, Artista, Tempo, CodigoCD) VALUES (110, 'Superstition', 'Stevie Wonder', '0:4:26', 11);
INSERT INTO Musicas(Numero_musica, Nome_musica, Artista, Tempo, CodigoCD) VALUES (120, 'Don''t Stop Believin''', 'Journey', '0:4:11', 12);
INSERT INTO Musicas(Numero_musica, Nome_musica, Artista, Tempo, CodigoCD) VALUES (130, 'Imagine', 'John Lennon', '0:3:07', 13);
INSERT INTO Musicas(Numero_musica, Nome_musica, Artista, Tempo, CodigoCD) VALUES (140, 'Rocket Man', 'Elton John', '0:4:41', 14);
INSERT INTO Musicas(Numero_musica, Nome_musica, Artista, Tempo, CodigoCD) VALUES (150, 'I Will Always Love You', 'Whitney Houston', '0:4:31', 15);

SELECT avg(ValorPago) FROM Cds


