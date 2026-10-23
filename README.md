# 🎬 Mesa Cinema — Plataforma de Filmes em Cartaz e Recomendações

O **Mesa Cinema** é um site em **PHP** com banco de dados **PostgreSQL**, criado para mostrar os principais filmes que estão em cartaz atualmente e trazer recomendações personalizadas da nossa equipe.

O projeto foi feito para ser simples e direto: quando você clica nas recomendações, é direcionado na hora para os trailers oficiais e para os vídeos do nosso canal no YouTube, o **Mesa Quatro**.

O site conta com uma página inicial de navegação, catálogo de recomendações e uma área completa para cadastro, login e gerenciamento da conta do usuário. O banco de dados armazena apenas as informações necessárias dos clientes cadastrados.

---

## 🚀 1. Tecnologias Utilizadas

- **PHP**: Processamento das informações, navegação e conexão com o banco.
- **PostgreSQL**: Banco de dados relacional para armazenar os usuários.
- **HTML5**: Estrutura das páginas.
- **CSS3**: Estilização e layout visual.
- **PDO (PHP Data Objects)**: Conexão segura entre o PHP e o PostgreSQL.
- **Git & GitHub**: Controle de versão e hospedagem do código.
- **Servidor Web (Apache/Nginx)**: Servidor para rodar o site em deploy.

---

## 🛠️ 2. Funcionalidades do Sistema

### 2.1 Área Pública e Navegação

- **Página Inicial (`index.php`)**: Apresentação do site e links principais.
- **Acompanhar nossos vídeos**: Botão que leva direto para o canal do YouTube (**Mesa Quatro**).
- **Recomendações da Mesa (`filmes.php`)**: Lista com os trailers dos filmes em cartaz favoritos da galera.

### 2.2 Gestão de Usuários e Contas (`/cad`)

- **Cadastro de Clientes (`cad/cadastro.php`)**: Tela para criar novas contas.
- **Login (`cad/login.php`)**: Autenticação de usuários já cadastrados.
- **Atualização de Perfil (`cad/atualiza.php`)**: Opção para alterar dados da conta.
- **Exclusão de Perfil (`cad/delete.php`)**: Opção para apagar a conta do banco de dados.
- **Minha Conta (`conta.php`)**: Painel para visualizar os dados do perfil.

---

## 📦 3. Como Executar o Projeto no Servidor (Deploy)

Para rodar o **Mesa Cinema** no seu servidor, você precisa ter o PHP configurado e o banco PostgreSQL em execução.

### 3.1 Pré-requisitos

- Servidor Web (Apache ou Nginx) ativo.
- PHP 7.4+ instalado.
- PostgreSQL rodando.
- Git instalado.

---

### Passo 1: Acessar a pasta do servidor web

Entre no diretório padrão onde ficam os arquivos dos sites:

cd /var/www/html

---

### Passo 2: Clonar o repositório

Clone o projeto para dentro da pasta do servidor:

git clone https://github.com/TiagoGomesC/novomesacinema.git

Entre no diretório do projeto:

cd /var/www/html/novomesacinema

---

### Passo 3: Criar e configurar o Banco de Dados

O banco de dados se chama `mesacinema`.

Acesse o terminal do PostgreSQL:

psql -U postgres

Rode os comandos abaixo para criar o usuário `mesacinema`, definir a senha `mesacinema123`, criar o banco e ajustar o dono do banco:

CREATE USER mesacinema WITH PASSWORD 'mesacinema123';
CREATE DATABASE mesacinema OWNER mesacinema;
ALTER DATABASE mesacinema OWNER TO mesacinema;

Saia do terminal do PostgreSQL:

\q

Agora, importe o arquivo de backup para criar as tabelas iniciais:

psql -U mesacinema -d mesacinema -f /var/www/html/novomesacinema/backup.sql

---

### Passo 4: Configurar o arquivo de conexão (`conecta.php`)

Abra o arquivo de conexão do PHP:

nano /var/www/html/novomesacinema/conecta.php

Verifique se as credenciais do banco estão exatamente assim:

<?php
$host = "localhost";
$dbname = "mesacinema";
$user = "mesacinema";
$pass = "mesacinema123";

try {
    $conn = new PDO("pgsql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>

---

### Passo 5: Acessar a aplicação no navegador

Abra o navegador e digite o endereço do seu servidor:

http://IP-OU-DOMINIO-DO-SERVIDOR/novomesacinema/

---

## 📋 4. Especificação de Requisitos de Software (SRS)

### 4.1 Escopo do Projeto

O objetivo do **Mesa Cinema** é centralizar as indicações de filmes em cartaz e trailers do canal **Mesa Quatro**. Como o site não vende ingressos nem exibe os filmes na íntegra, a estrutura do banco de dados foca apenas no cadastro de usuários.

### 4.2 Requisitos Funcionais

| ID | Requisito | Descrição | Prioridade |
| :--- | :--- | :--- | :--- |
| **RF01** | Tela Inicial | Mostrar a apresentação e menus do site. | Alta |
| **RF02** | Link do YouTube | Botão direcionando para o canal **Mesa Quatro**. | Alta |
| **RF03** | Recomendações | Listar os filmes em cartaz com seus trailers. | Alta |
| **RF04** | Cadastro | Permitir a criação de contas de usuários. | Alta |
| **RF05** | Login | Autenticar o acesso dos usuários cadastrados. | Alta |
| **RF06** | Gestão de Conta | Permitir alterar e apagar a conta. | Média |

### 4.3 Requisitos Não Funcionais

| ID | Requisito | Descrição | Prioridade |
| :--- | :--- | :--- | :--- |
| **RNF01** | Tecnologias | Desenvolvido em PHP com banco PostgreSQL. | Alta |
| **RNF02** | Conexão com Banco | Conexão via extensão `pdo_pgsql`. | Alta |
| **RNF03** | Estilização | Design próprio usando CSS. | Média |
| **RNF04** | Estrutura Enxuta | Banco com apenas a tabela de clientes. | Média |

---

## 🗄️ 5. Estrutura do Banco de Dados

O banco `mesacinema` possui apenas a tabela necessária para o gerenciamento de contas dos usuários do site.

### 5.1 Tabela `clientes`

Armazena os dados dos usuários cadastrados:

- **`id`**: Identificador único do cliente (Chave Primária).
- **`nome`**: Nome completo do usuário.
- **`email`**: E-mail usado para login.
- **`senha`**: Senha de acesso cadastrada.

---

## 📂 6. Estrutura de Pastas e Arquivos

O projeto está organizado assim:

novomesacinema/
├── cad/
│   ├── atualiza.php
│   ├── cadastro.php
│   ├── delete.php
│   └── login.php
├── imagens/
├── includes/
│   ├── footer.php
│   ├── function.php
│   └── header.php
├── videos/
│   └── video.mp4.png.mp4
├── backup.sql
├── conecta.php
├── conta.php
├── der.md
├── filmes.php
├── index.php
└── style.css

---

## ✍️ 7. Desenvolvedores e Créditos

Desenvolvido por **TiagoGomesC** e a galera do canal **Mesa Quatro**.

© 2026 **MesaCinema**. Todos os direitos reservados.
