# \U0001f680 DesenvolveTEC (T�tulo Provis�rio)

> Seu Sistema Web para TCC (Trabalho de Conclus�o de Curso)

## \U0001f31f Sobre o Projeto

Este reposit�rio cont�m o c�digo-fonte do projeto **DesenvolveTEC**, desenvolvido como parte do requisito para a conclus�o do curso Informátia Para internet.

A aplica��o tem como objetivo principal [**Objetivo Central** -  fornecer uma plataforma de gerenciamento de servi�os e contato com clientes, ou um sistema de agendamento, etc.].

O projeto � uma aplica��o web completa, desenvolvida para demonstrar profici�ncia em [Insira as Principais �reas de Foco, Ex: desenvolvimento full-stack, seguran�a de dados, arquitetura web].

## \u2728 Funcionalidades Principais

* **P�ginas Institucionais:** Se��es como `Sobre`, `Servi�os` e `Contato` (`sobre.php`, `servicos.php`, `contato.php`).
* **Conex�o com Banco de Dados:** Estrutura para gerenciamento de dados persistentes (`paginas/conexao.php`).
* **Gest�o de Dados:** Inser��o, consulta e manipula��o de informa��es via banco de dados (`bd/desenvolvetec.sql` e scripts PHP).
* **Estiliza��o:** Design responsivo e customizado atrav�s de CSS (`css/estilo.css`).

## \U0001f6e0\ufe0f Tecnologias Utilizadas

O projeto foi constru�do com as seguintes tecnologias:

* **Backend:** **PHP** 
* **Banco de Dados:** **MySQL/MariaDB** (Script SQL fornecido em `bd/desenvolvetec.sql`)
* **Frontend:** **HTML5** e **CSS3**
* **Servidor:** Requer um ambiente de servidor (como **Apache** ou **Nginx**) e o interpretador PHP (geralmente via **XAMPP** ou **WAMP**).

## \u2699\ufe0f Instala��o e Execu��o Local

Siga os passos abaixo para configurar e executar o projeto em seu ambiente local.

### Pr�-requisitos

* Servidor web 
* Interpretador PHP
* Cliente MySQL

### Passos

1.  **Clone o Reposit�rio:**
    ```bash
    git clone [https://github.com/BrunoMarquesRedol/TCC.git](https://github.com/BrunoMarquesRedol/TCC.git)
    ```

2.  **Configurar o Servidor:**
    * Mova a pasta do projeto (`TCC`) para o diret�rio de projetos do seu servidor web (Ex: `htdocs` no XAMPP).

3.  **Configurar o Banco de Dados:**
    * Crie um novo banco de dados no seu cliente MySQL (Ex: phpMyAdmin). Sugest�o de nome: `desenvolvetec`.
    * Importe o arquivo `bd/desenvolvetec.sql` para este novo banco de dados.

4.  **Ajustar a Conex�o (se necess�rio):**
    * Verifique e ajuste as credenciais de conex�o no arquivo `paginas/conexao.php` para corresponderem �s configura��es do seu banco de dados local (usu�rio, senha, nome do banco).

5.  **Acessar a Aplica��o:**
    * Abra o navegador e acesse o endere�o: `http://localhost/TCC/` (ou o nome do diret�rio principal).

## \U0001f91d Contribui��o

Este � um projeto de TCCl, mas feedbacks e sugest�es s�o bem-vindos.
