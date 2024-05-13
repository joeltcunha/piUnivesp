-- Cria o SCHEMA PJ_SISTEMAS
CREATE SCHEMA IF NOT EXISTS `PJ_SISTEMAS`;

-- Define o SCHEMA PJ_SISTEMAS como padrão para os comandos subsequentes
USE `PJ_SISTEMAS`; 

-- Criação das tabelas dentro do SCHEMA PJ_SISTEMAS

-- Tabela de Clientes
CREATE TABLE Clientes (
    ClienteID INT PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(255) NOT NULL,
    CPF CHAR(11) UNIQUE,
    Endereco VARCHAR(255),
    Telefone VARCHAR(20)
);

-- Tabela de Fornecedores
CREATE TABLE Fornecedores (
    FornecedorID INT PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(255) NOT NULL,
    CNPJ CHAR(14) UNIQUE,
    Endereco VARCHAR(255),
    Telefone VARCHAR(20)
);

-- Tabela de Colaboradores
CREATE TABLE Colaboradores (
    ColaboradorID INT PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(255) NOT NULL,
    CPF CHAR(11) UNIQUE,
    Cargo VARCHAR(100),
    Salario DECIMAL(10, 2)
);

-- Tabela de Produtos
CREATE TABLE Produtos (
    ProdutoID INT PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(255) NOT NULL,
    Descricao TEXT,
    Preco DECIMAL(10, 2),
    FornecedorID INT,
    FOREIGN KEY (FornecedorID) REFERENCES Fornecedores(FornecedorID)
);

-- Tabela de Ordens de Serviço
CREATE TABLE OrdensServico (
    OrdemServicoID INT PRIMARY KEY AUTO_INCREMENT,
    ClienteID INT,
    ColaboradorID INT,
    DataEmissao DATE,
    DataConclusao DATE,
    Status VARCHAR(50),
    FOREIGN KEY (ClienteID) REFERENCES Clientes(ClienteID),
    FOREIGN KEY (ColaboradorID) REFERENCES Colaboradores(ColaboradorID)
);

-- Tabela de Itens da Ordem de Serviço
CREATE TABLE ItensOrdemServico (
    ItemOrdemServicoID INT PRIMARY KEY AUTO_INCREMENT,
    OrdemServicoID INT,
    ProdutoID INT,
    Quantidade INT,
    PrecoUnitario DECIMAL(10, 2),
    FOREIGN KEY (OrdemServicoID) REFERENCES OrdensServico(OrdemServicoID),
    FOREIGN KEY (ProdutoID) REFERENCES Produtos(ProdutoID)
);