-- =============================================
-- BANCO DE DADOS DESENVOLVETEC - COMPLETO
-- =============================================

-- Criar banco de dados
CREATE DATABASE IF NOT EXISTS desenvolvetec 
CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;

USE desenvolvetec;

-- =============================================
-- TABELA: usuarios (Sistema de Login)
-- =============================================
CREATE TABLE IF NOT EXISTS usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    nivel ENUM('admin', 'editor') DEFAULT 'editor',
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    ultimo_login TIMESTAMP NULL,
    ativo BOOLEAN DEFAULT TRUE
);

-- =============================================
-- TABELA: equipe (Membros da Equipe)
-- =============================================
CREATE TABLE IF NOT EXISTS equipe (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    cargo VARCHAR(100) NOT NULL,
    foto VARCHAR(255) DEFAULT NULL,
    descricao TEXT,
    ordem_exibicao INT DEFAULT 0,
    ativo BOOLEAN DEFAULT TRUE,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =============================================
-- TABELA: orcamentos (Solicitações de Orçamento)
-- =============================================
CREATE TABLE IF NOT EXISTS orcamentos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    empresa VARCHAR(100) DEFAULT NULL,
    servicos TEXT,
    prazo VARCHAR(50) DEFAULT NULL,
    orcamento VARCHAR(50) DEFAULT NULL,
    detalhes TEXT NOT NULL,
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('pendente', 'respondido', 'finalizado') DEFAULT 'pendente',
    ip_address VARCHAR(45) DEFAULT NULL
);

-- =============================================
-- TABELA: contatos (Formulário de Contato)
-- =============================================
CREATE TABLE IF NOT EXISTS contatos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) DEFAULT NULL,
    assunto VARCHAR(200) NOT NULL,
    mensagem TEXT NOT NULL,
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('pendente', 'respondido', 'finalizado') DEFAULT 'pendente',
    ip_address VARCHAR(45) DEFAULT NULL
);

-- =============================================
-- TABELA: projetos (Projetos Realizados)
-- =============================================
CREATE TABLE IF NOT EXISTS projetos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(200) NOT NULL,
    descricao TEXT NOT NULL,
    imagem VARCHAR(255) DEFAULT NULL,
    link VARCHAR(255) DEFAULT NULL,
    categoria VARCHAR(100) DEFAULT 'Geral',
    tecnologias TEXT,
    data_projeto DATE DEFAULT NULL,
    destaque BOOLEAN DEFAULT FALSE,
    ativo BOOLEAN DEFAULT TRUE,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =============================================
-- INSERIR DADOS DE EXEMPLO
-- =============================================

-- =============================================
-- USUÁRIOS DO SISTEMA
-- =============================================
INSERT INTO usuarios (username, password, nome, email, nivel) VALUES 
('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Administrador Principal', 'admin@desenvolvetec.com', 'admin'),
('gestor', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Gestor de Projetos', 'gestor@desenvolvetec.com', 'editor'),
('marketing', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Responsável Marketing', 'marketing@desenvolvetec.com', 'editor');

-- =============================================
-- MEMBROS DA EQUIPE
-- =============================================

INSERT INTO equipe (id, nome, cargo, foto, descricao, ordem_exibicao, ativo, data_criacao) VALUES
(2, 'KELLY SABARÁ', 'PROFESSORA E MENTORA', 'imagens/kelly.jpg', 'Descrição padrão', 1, 1, '2025-11-13'),
(3, 'MARIA EDUARDA SANTOS', 'MARKETING/ADMINISTRATIVO', 'imagens/maria.jpg', 'Descrição padrão', 2, 1, '2025-11-13'),
(4, 'LUIZ RENATO NASCIMENTO', 'MARKETING', 'imagens/luiz.jpg', 'Descrição padrão', 3, 1, '2025-11-13'),
(5, 'DAVI DOS SANTOS MIRANDA', 'DESENVOLVIMENTO', 'imagens/davi.jpg', 'Descrição padrão', 4, 1, '2025-11-13'),
(6, 'BRUNO MARQUES REDOL BAPTISTA', 'DESENVOLVIMENTO', 'imagens/bruno.jpg', 'Descrição padrão', 5, 1, '2025-11-13'),
(7, 'ROBERTA PEREIRA QUEIROZ', 'MARKETING/ADMINISTRATIVO', 'imagens/roberta.jpg', 'Descrição padrão', 6, 1, '2025-11-13'),
(8, 'RAFAELA SILVA MOURA', 'DESENVOLVIMENTO', 'imagens/rafaela.jpg', 'Descrição padrão', 7, 1, '2025-11-13'),
(9, 'VITOR SANTOS DA SILVA', 'MARKETING/ADMINISTRATIVO', 'imagens/vitor_santos.jpg', 'Descrição padrão', 8, 1, '2025-11-13'),
(10, 'GUSTAVO NOGUEIRA', 'DESENVOLVIMENTO', 'imagens/gustavo.jpg', 'Descrição padrão', 9, 1, '2025-11-13'),
(11, 'GEOVANNA LESSA', 'MARKETING', 'imagens/geovanna_lessa.jpg', 'Descrição padrão', 10, 1, '2025-11-13'),
(12, 'MILENA SILVA', 'MARKETING', 'imagens/milena.jpg', 'Descrição padrão', 11, 1, '2025-11-13'),
(13, 'DEYSIANE DE JESUS', 'MARKETING', 'imagens/deysiane_jesus.jpg', 'Descrição padrão', 12, 1, '2025-11-13'),
(14, 'PEDRO SIQUEIRA', 'MARKETING', 'imagens/pedro_siqueira.jpg', 'Descrição padrão', 13, 1, '2025-11-13'),
(15, 'GABRIEL SLUSARZ', 'MARKETING', 'imagens/gabriel_slusarz.jpg', 'Descrição padrão', 14, 1, '2025-11-13'),
(16, 'VICTOR LOMELINO', 'MARKETING', 'imagens/victor_lomelino.jpg', 'Descrição padrão', 15, 1, '2025-11-13'),
(17, 'JEAN FIGUEIREDO', 'MARKETING', 'imagens/jean.jpg', 'Descrição padrão', 16, 1, '2025-11-13'),
(18, 'CAIO RIBEIRO', 'DESENVOLVIMENTO', 'imagens/caio.jpg', 'Descrição padrão', 17, 1, '2025-11-13'),
(19, 'MATHEUS HAYASHI', 'DESENVOLVIMENTO', 'imagens/mateus.jpg', 'Descrição padrão', 18, 1, '2025-11-13'),
(20, 'CECÍLIA GONÇALVES', 'PORTA VOZ', 'imagens/cecilia.jpg', 'Descrição padrão', 19, 1, '2025-11-13'),
(21, 'RAFAEL LOPES', 'MARKETING', 'imagens/rafael.jpg', 'Descrição padrão', 20, 1, '2025-11-13');


-- =============================================
-- SOLICITAÇÕES DE ORÇAMENTO (EXEMPLOS)
-- =============================================
INSERT INTO orcamentos (nome, email, telefone, empresa, servicos, prazo, orcamento, detalhes, status) VALUES 
('Carlos Eduardo', 'carlos@empresa.com', '(11) 99999-9999', 'Tech Solutions Ltda', 'Desenvolvimento Front-end, Desenvolvimento Back-end', 'Médio prazo (1-2 meses)', 'R$ 3.000 - R$ 5.000', 'Precisamos desenvolver um sistema de gestão para nossa empresa com módulos de vendas, estoque e relatórios. O sistema deve ser responsivo e ter integração com APIs de pagamento.', 'pendente'),
('Mariana Santos', 'mariana@loja.com', '(11) 98888-8888', 'Moda Elegante', 'Design Exclusivo, Marketing Digital', 'Urgente (1-2 semanas)', 'Até R$ 1.000', 'Gostaria de criar um site institucional para minha loja de roupas. Preciso de um design moderno e catálogo de produtos online.', 'respondido'),
('Ricardo Oliveira', 'ricardo@consultoria.com', '(11) 97777-7777', 'Oliveira Consultoria', 'Desenvolvimento Back-end, Suporte Contínuo', 'Sem prazo definido', 'Acima de R$ 5.000', 'Desenvolvimento de plataforma SaaS para gestão de consultorias com múltiplos usuários e diferentes níveis de acesso.', 'pendente');

-- =============================================
-- CONTATOS RECEBIDOS (EXEMPLOS)
-- =============================================
INSERT INTO contatos (nome, email, telefone, assunto, mensagem, status) VALUES 
('Fernanda Lima', 'fernanda@email.com', '(11) 96666-6666', 'Parceria Comercial', 'Gostaria de agendar uma reunião para discutir possibilidade de parceria entre nossas empresas.', 'pendente'),
('Roberto Alves', 'roberto@empresa.com', '(11) 95555-5555', 'Suporte Técnico', 'Preciso de ajuda para resolver um problema no site que vocês desenvolveram. O formulário de contato não está enviando emails.', 'respondido'),
('Patrícia Mendes', 'patricia@startup.com', '(11) 94444-4444', 'Novo Projeto', 'Tenho interesse em desenvolver um aplicativo mobile para minha startup. Podemos conversar sobre orçamento?', 'pendente');

-- =============================================
-- PROJETOS REALIZADOS (EXEMPLOS)
-- =============================================
INSERT INTO projetos (titulo, descricao, imagem, link, categoria, tecnologias, data_projeto, destaque) VALUES 
('Sistema de Impressão Térmica', 'Desenvolvimento de sistema integrado para impressão de fichas em eventos escolares utilizando impressora térmica e tecnologias web.', 'imagens/Impressora.png', 'https://vestuarioaxel.my.canva.site/impressoratermica', 'Sistema', 'PHP, JavaScript, HTML, CSS', '2024-06-01', TRUE),
('Placar de Jogos Interclasse', 'Sistema web para controle e exibição de placares em tempo real durante competições esportivas escolares.', 'imagens/tabelaEsportiva.png', 'https://vestuarioaxel.my.canva.site/interclasse', 'Web App', 'JavaScript, CSS, HTML5', '2024-08-15', TRUE),
('Site Cleide Lanches', 'Desenvolvimento de site institucional e estratégias de marketing digital para lanchonete local.', 'imagens/cleidelanches.jpg', 'https://jogos-emojis2023.my.canva.site/cleide-lanches', 'Site Institucional', 'HTML, CSS, JavaScript', '2024-07-10', FALSE),
('Loja Virtual Liart', 'E-commerce especializado em miçangas e acessórios com catálogo completo e sistema de pedidos.', 'imagens/liart.png', 'https://jogos-emojis2023.my.canva.site/liart-cec-lia-ramos', 'E-commerce', 'PHP, MySQL, JavaScript', '2024-09-01', TRUE),
('Delícias di Rainara', 'Site para confeitaria artesanal com cardápio online, sistema de pedidos e integração com redes sociais.', 'imagens/deliciasdirainara.png', 'https://vestuarioaxel.my.canva.site/c-pia-de-del-cias-di-rainara', 'Site Institucional', 'HTML, CSS, PHP', '2024-08-20', FALSE);

-- =============================================
-- CONFIGURAÇÕES DO SISTEMA
-- =============================================
CREATE TABLE IF NOT EXISTS configuracoes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    chave VARCHAR(100) NOT NULL UNIQUE,
    valor TEXT NOT NULL,
    descricao VARCHAR(255) DEFAULT NULL,
    data_atualizacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO configuracoes (chave, valor, descricao) VALUES 
('nome_empresa', 'DesenvolveTec', 'Nome oficial da empresa'),
('email_contato', 'agenciadesenvolvetec@gmail.com', 'E-mail principal para contato'),
('telefone_contato', '+55 11 91281-2313', 'Telefone para contato'),
('endereco', 'Rua Ermênio de Oliveira Penteado, 30 (Jardim Helena), Caieiras, SP', 'Endereço físico'),
('instagram', '@desenvolvetec', 'Perfil do Instagram'),
('whatsapp', '+5511912812313', 'Número do WhatsApp'),
('site_escola', 'https://eteccaieiras.cps.sp.gov.br/', 'Site da escola ETEC Caieiras'),
('horario_funcionamento', 'Segunda a Sexta: 8h às 18h', 'Horário de atendimento'),
('sobre_empresa', 'Somos uma agência de tecnologia e performance criada por programadores, para utilitários de todas as áreas. Desenvolvemos projetos baseados em inteligência de mercado.', 'Texto sobre a empresa');

-- =============================================
-- LOGS DO SISTEMA
-- =============================================
CREATE TABLE IF NOT EXISTS logs_sistema (
    id INT PRIMARY KEY AUTO_INCREMENT,
    usuario_id INT DEFAULT NULL,
    acao VARCHAR(100) NOT NULL,
    descricao TEXT NOT NULL,
    ip_address VARCHAR(45) DEFAULT NULL,
    user_agent TEXT,
    data_log TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE SET NULL
);

-- =============================================
-- BACKUP AUTOMÁTICO (OPCIONAL)
-- =============================================
CREATE TABLE IF NOT EXISTS backups (
    id INT PRIMARY KEY AUTO_INCREMENT,
    arquivo VARCHAR(255) NOT NULL,
    tamanho BIGINT DEFAULT 0,
    data_backup TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    usuario_id INT DEFAULT NULL,
    observacoes TEXT,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE SET NULL
);

-- =============================================
-- ÍNDICES PARA MELHOR PERFORMANCE
-- =============================================

-- Índices para tabela de usuários
CREATE INDEX idx_usuarios_username ON usuarios(username);
CREATE INDEX idx_usuarios_email ON usuarios(email);
CREATE INDEX idx_usuarios_nivel ON usuarios(nivel);

-- Índices para tabela de orçamentos
CREATE INDEX idx_orcamentos_email ON orcamentos(email);
CREATE INDEX idx_orcamentos_data_envio ON orcamentos(data_envio);
CREATE INDEX idx_orcamentos_status ON orcamentos(status);

-- Índices para tabela de contatos
CREATE INDEX idx_contatos_email ON contatos(email);
CREATE INDEX idx_contatos_data_envio ON contatos(data_envio);
CREATE INDEX idx_contatos_status ON contatos(status);

-- Índices para tabela de projetos
CREATE INDEX idx_projetos_categoria ON projetos(categoria);
CREATE INDEX idx_projetos_destaque ON projetos(destaque);
CREATE INDEX idx_projetos_data_projeto ON projetos(data_projeto);

-- Índices para tabela de equipe
CREATE INDEX idx_equipe_ordem ON equipe(ordem_exibicao);
CREATE INDEX idx_equipe_ativo ON equipe(ativo);

-- =============================================
-- VISUALIZAÇÕES ÚTEIS (VIEWS)
-- =============================================

-- View para estatísticas do dashboard
CREATE VIEW view_dashboard_estatisticas AS
SELECT 
    (SELECT COUNT(*) FROM orcamentos) as total_orcamentos,
    (SELECT COUNT(*) FROM orcamentos WHERE data_envio >= NOW() - INTERVAL 7 DAY) as orcamentos_semana,
    (SELECT COUNT(*) FROM contatos) as total_contatos,
    (SELECT COUNT(*) FROM contatos WHERE data_envio >= NOW() - INTERVAL 7 DAY) as contatos_semana,
    (SELECT COUNT(*) FROM equipe WHERE ativo = TRUE) as total_equipe,
    (SELECT COUNT(*) FROM usuarios WHERE ativo = TRUE) as total_usuarios,
    (SELECT COUNT(*) FROM projetos WHERE ativo = TRUE) as total_projetos;

-- View para orçamentos recentes
CREATE VIEW view_orcamentos_recentes AS
SELECT 
    id,
    nome,
    email,
    empresa,
    servicos,
    data_envio,
    status
FROM orcamentos 
ORDER BY data_envio DESC 
LIMIT 10;

-- =============================================
-- PROCEDURES ÚTEIS (OPCIONAL)
-- =============================================

-- Procedure para limpar logs antigos
DELIMITER //
CREATE PROCEDURE sp_limpar_logs_antigos(IN dias INT)
BEGIN
    DELETE FROM logs_sistema 
    WHERE data_log < NOW() - INTERVAL dias DAY;
END//
DELIMITER ;

-- Procedure para backup de dados
DELIMITER //
CREATE PROCEDURE sp_estatisticas_mensais(IN mes INT, IN ano INT)
BEGIN
    SELECT 
        COUNT(*) as total_orcamentos,
        SUM(CASE WHEN status = 'respondido' THEN 1 ELSE 0 END) as orcamentos_respondidos,
        COUNT(*) as total_contatos,
        SUM(CASE WHEN status = 'respondido' THEN 1 ELSE 0 END) as contatos_respondidos
    FROM orcamentos 
    WHERE MONTH(data_envio) = mes AND YEAR(data_envio) = ano;
END//
DELIMITER ;

-- =============================================
-- MENSAGEM DE CONFIRMAÇÃO  
-- =============================================
SELECT 'Banco de dados DesenvolveTec criado com sucesso!' as mensagem;

-- Mostrar estatísticas iniciais
SELECT 
    (SELECT COUNT(*) FROM usuarios) as usuarios_cadastrados,
    (SELECT COUNT(*) FROM equipe) as membros_equipe,
    (SELECT COUNT(*) FROM orcamentos) as orcamentos_cadastrados,
    (SELECT COUNT(*) FROM projetos) as projetos_cadastrados,
    (SELECT COUNT(*) FROM contatos) as contatos_cadastrados;  