-- Criar o banco de dados
CREATE DATABASE desenvolvetec;
USE desenvolvetec;

-- Tabela de Serviços
CREATE TABLE servicos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    descricao TEXT NOT NULL,
    icone VARCHAR(50) -- exemplo: 'fas fa-code'
);

-- Tabela de Orçamentos (solicitados pelo botão)
CREATE TABLE orcamentos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255),
  email VARCHAR(255),
  telefone VARCHAR(50),
  mensagem TEXT,
  data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
-- Adicionando colunas adicionais à tabela de Orçamentos
ALTER TABLE orcamentos
ADD COLUMN empresa VARCHAR(255) NULL,
ADD COLUMN servicos VARCHAR(255) NULL,
ADD COLUMN prazo VARCHAR(100) NULL,
ADD COLUMN orcamento VARCHAR(100) NULL,
ADD COLUMN detalhes TEXT NULL;

-- Tabela de Contatos
CREATE TABLE contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    assunto VARCHAR(150),
    mensagem TEXT NOT NULL,
    data_envio DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de Certificações / Parceiros
CREATE TABLE certificacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    icone VARCHAR(50), -- exemplo: 'fab fa-google'
    descricao VARCHAR(255)
);
