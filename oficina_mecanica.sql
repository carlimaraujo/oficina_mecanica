drop database oficina_mecanica;
CREATE DATABASE oficina_mecanica;
USE oficina_mecanica;
#Estrutura da tabela `cliente`/
drop table if exists cliente;
CREATE TABLE cliente (
idcliente INT NOT NULL AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL,
cpf NUMERIC(11) NOT NULL,
telefone NUMERIC(11) NOT NULL,
PRIMARY KEY (idcliente)
);
#Estrutura da tabela `funcionario`/
drop table if exists funcionario;
CREATE TABLE funcionario (
idfuncionario INT NOT NULL AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL,
cpf NUMERIC(14) NOT NULL,
datanasc DATE NOT NULL,
salario DECIMAL(9) NOT NULL,
funcao VARCHAR(100) NOT NULL,
PRIMARY KEY (idfuncionario)
);
#Estrutura da tabela `produtos`/
drop table if exists produtos;
create table produtos(
idproduto int NOT NULL AUTO_INCREMENT,
nome varchar(100) NOT NULL,
marca varchar(100) NULL,
descricao varchar(100) NULL,
valor decimal(9) NOT NULL,
idfornecedor int NOT NULL,
PRIMARY KEY (idproduto));

#Estrutura da tabela `servicos`/
drop table if exists servicos;
create table servicos(
nome varchar(100) NOT NULL,
idservico int NOT NULL AUTO_INCREMENT,
descricao varchar(100) NULL,
valor decimal(9) NULL,
PRIMARY KEY (idservico)
);
#Estrutura da tabela `fornecedor`/
drop table if exists fornecedor;
create table fornecedor(
nome varchar(100) NOT NULL,
idfornecedor int NOT NULL AUTO_INCREMENT,
produtos varchar(100) NOT NULL,
contato numeric(11) NOT NULL,
PRIMARY KEY (idfornecedor)
);

#Estrutura da tabela `veiculo`/
drop table if exists veiculo;
create table veiculo(
id_veiculo int not null primary key auto_increment,
marca varchar(50) NULL,
modelo varchar(50) NULL,
placa varchar(50) NOT NULL,
cliente_proprietario int NOT NULL,
servico int NOT NULL
);
#Chaves Estrangeiras da tabela `veiculo`/
alter table veiculo
add constraint fk_cliente_proprietario foreign key(cliente_proprietario) references cliente (idcliente);
#Chaves Estrangeiras da tabela `produto`/
alter table produtos
add constraint idfornecedor foreign key(idfornecedor) references fornecedor (idfornecedor);

#Inserção de dados da tabela `funcionario`/
insert into funcionario(idfuncionario,nome,cpf,datanasc,salario,funcao) values (1, 'Maya Malu Ferreira',
67418450621, 19/08/1995, 700.00, 'Atendente'), (2, 'Marcela Sophia Isabel Mendes', 84303446670,
13/01/1995, 700.00, 'Atendente'),
(3, 'Carlos Gabriel Pedro Gomes', 63197148673, 04/03/1987, 1500.00, 'Mecânico'), (4, 'Yuri Renan
Gabriel Peixoto', 19954180648, 02/01/1991, 1500.00, 'Mecânico'), (5, 'Victor Gael Martin das Neves',
'45812353670', 08/07/1990, 1500.00, 'Mecânico'),
(6, 'Diogo Theo Anderson Fernandes', 35890512641, 12/06/1989, 1500.00, 'Borracheiro'), (7, 'Osvaldo
Bernardo Marcos Vinicius Porto', 73830492685, 06/06/1985, 1500.00, 'Borracheiro'), (8, 'Vitor Breno
Moura', 40323509657, 22/07/1985, 1500.00, 'Borracheiro'),
(9, 'Marlene Rosângela Ester Galvão', 14437214684, 13/03/1998, 800.00, 'Faxineira');
#Inserção de dados da tabela `servicos`/
insert into servicos(idservico, nome, descricao,valor) values (1, 'Troca de óleo', 'Troca de óleo', 100.0), (2,'Troca de
escapamento', 'Troca de Escapamento', 50.00), (3, 'Freios', 'Revisão, reparação e substituição de freios', 47.50), (4,
'Motor/cabeçote', 'Revisão e manutenção do motor', 2.000),
(5, 'Suspençao', 'Manutenção da suspenção', 70.00), (6, 'Câmbio', 'Manutenção do Cãmbio', 200.00), (7,
'Reisão Geral', 'Revisão Geral', 100.00), (8, 'Troca de Pneu', 'Troca de Pneu', 50.00);
#Inserção de dados da tabela `fornecedor`/
insert into fornecedor(idfornecedor, nome, contato, produtos) values (null, 'Geraldo Raul Heitor de Paula',
79981629916, 1), (null, 'Rodrigo Heitor Erick da Silva', 86983811079, 2), (null, 'Caleb Nelson Danilo
Drumond', 84987534513, 3), (null, 'Tomás Kauê da Rosa', 92981696020, 4), (null, 'Leonardo Thomas Breno
Cardoso', 16999148676, 5),
(null, 'Davi Osvaldo Paulo Santos', 61984600309, 6), (null, 'Henry Pietro Brito', 82989310238, 7), (null, 'Cauê
Ruan Nascimento', 82997665829, 7), (null, 'Oliver Thomas Figueiredo', 31985525660, 9), (null, 'Breno
Vinicius Fogaça', 31999568868, 10), (null, 'Paulo Renato da Conceição', 61995741427, 11), (null, 'Hugo
Theo Farias', 51982849248, 12);
#Inserção de dados da tabela `produtos`/
insert into produtos(idproduto,nome,marca, descricao, valor, idfornecedor) values (1, 'Faróis de Led',
'Lumi', '1 farol de milha universal off-road + kit instalação', 30.00, 1), (2, 'Molas Esportivas', 'Eibach
volkswagen comfortline rline 1.4 turbo', 'Volkswagen Golf MK7 2.0 GTI 2013+ / Audi A3 Sport 1.8 / 2.0
TFSI Hatch 2012+', 1500.00, 2),
(3, 'Palhetas', 'MCH Tech One', 'Palheta Limpa Parabrisa Traseiro e Dianteiro', 20.00, 3),(4, 'Suporte
Celular', 'Exbom/Altomex', 'Suporte Celular Carro Veicular Trava Automática Anti Queda', 40.00, 4), (5,
'Central multimídia', 'Roadstar', 'Central Multimidia Roadstar Rs-804br Tela 7 Mp5 Android', 1000.00, 5),
(6, 'Alarme', 'Pósitron', 'Alarme De Carro Automotivo Positron Cyber Px360bt Universal', 500.00, 6), (7,
'Suporte de bicicleta', 'Atrio', 'Suporte Para Bike Automotivo 3 Bikes 45kg Atrio Bi212 Loi', 400.00, 7),
(8, 'Cera Automotiva', 'Johnson', 'Cera Automotiva Grand Prix Brilho Proteção 200g Tradicional', 30.00,
8),
(9, 'Limpa vidros', 'EasyTech', 'Limpa Vidros Em Spray Automotivo Carro 500ml Easytech', 35.00, 9),
(10,'Pretinho para Pneu', 'Batom Black', 'Pretinho Automotivo Baba De Onça-20 A 30 Dias No Pneu',
30.00, 10), (11, 'Silicone', 'Bucas', 'Silicone Gel Perfumado P/ Painéis Plásticos Vinil Carro Casa', 25.00,
11),
(12, 'Cheirinho Automotivo', 'Little Trees', 'Little Trees Vanilla Cheirinho Carro', 15.00, 12);
#Inserção de dados da tabela `cliente`/

insert into cliente(idcliente,nome,cpf,telefone) values (null, 'Breno Vicente Silveira', 15455913000,
65992939642),
(null, 'Elias Sérgio da Mata', 63467421750, 21988861529 ),
(null, 'Osvaldo Kauê Moreira', 61849564779, 31984044139 ),
(null, 'Sônia Vera Porto', 41781122520, 98985582861 ),
(null, 'Raul Vicente Henrique Campos', 31387205870, 82984336188 ),
(null, 'Jéssica Tânia Letícia Viana', 96830448328, 92984443309),
(null, 'Giovanna Beatriz Rocha', 58522680892, 83993050257 ),
(null, 'Luna Marlene Corte Real', 88208801488, 83981305679 ),
(null, 'Erick Theo Eduardo Souza', 57501935009, 96985188799 ),
(null, 'Gabriela Raimunda Luzia Lima', 01453330356, 95996642558),
(null, 'Vitor Danilo Nunes', 25992317872, 21986870157),
(null, 'Otávio Ian Novaes', 74233044500, 83997730013),
(null, 'Guilherme Yago Eduardo Pires', 71049359593, 68989919611),
(null, 'Manuela Cristiane Novaes', 66166253460, 11996574769),
(null, 'Francisca Liz Aragão', 64820667203, 75996071151),
(null, 'Gael Caleb Moraes', 93091216373, 54984976093),
(null, 'Carlos Eduardo Geraldo Isaac Monteiro', 84723584455, 63998869664),
(null, 'Benedito Thales Thomas Mendes', 64541407841, 79985944510),
(null, 'Lorena Larissa Oliveira', 70220765880, 43987155279),
(null, 'Gael Filipe Nunes', 63844497226, 11992652695);
#Inserção de dados da tabela `veiculo`/
insert into veiculo(placa,cliente_proprietario,marca, modelo, servico) values ('HWB-0750', 3, 'Fiat',
'LINEA ESSEN.SUBLIME Dual.1.8 Flex 16V 4p', 1),
('MUY-2851', 4, 'Fiat','Palio Weekend Sport 1.6 mpi 16V 4p', 2),
('MZZ-3383', 5, 'Fiat', 'Uno 1.6 mpi 2p e 4p', 5),
('NBB-4525', 6, 'VW - VolksWagen', 'Fox Sportline/Sports 1.6/1.6 Tot.Flex 4p', 3),
('JDT-9388', 7, 'VW - VolksWagen', 'Fox BLUEMOTION 1.0 Mi Total Flex 12V 5p', 2),
('MNB-3374', 8, 'VW - VolksWagen', 'AMAROK Highline CD 2.0 16V TDI 4x4 Dies.', 5),
('NEW-0305', 10, 'Toyota', 'Band.Picape CD 4p Chassi Longo Diesel', 8),
('IAJ-2729', 11, 'Toyota', 'Hilux CD SR D4-D 4x2 3.0 163cv TDI Dies.', 1),
('JND-4102', 12, 'Toyota', 'Corolla XEi 2.0 Flex 16V Aut.', 4),
('MSK-6020', 14, 'Citroen', 'C4 LOUNGE Tendance 2.0 Flex 4p Aut.', 1),
('MZJ-4966', 15, 'Citroen', 'AIRCROSS GLX ATACAMA 1.6 Flex 16V 5p Mec', 6),
('MXO-3314', 16, 'Citroen', 'Xsara Exclusive 1.6 16V 5p Mec.', 2),
('HFV-2857', 17, 'Citroen', 'Xsara Break Exclusive 2.0 16V', 3),
('NDI-6437', 20, 'Honda', 'Accord Sed', 4);

select p.*,f.nome as fornecedor_nome from produtos p inner join fornecedor f 
on p.idfornecedor=f.idfornecedor;

select v.*, c.nome,s.nome as nome_servico as cliente_proprietario from veiculo v inner join cliente c
on v.cliente_proprietario=c.idcliente inner join servico s 
on v.servico=s.idservico;

select v.*, s.nome as nome_servico from veiculo v inner join servicos s 
on v.servico=s.idservico;
