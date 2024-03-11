# CRUD Simples em PHP com Bootstrap, XAMPP e MySQL
Este é um projeto simples de CURD (Create, Update, Read, Delete) desenvolvido em PHP, utilizando o framework front-end Bootstrap para o design e o XAMPP para executar o servidor Apache e o banco de dados MySQL localmente.

## Pré-requisitos
Certifique-se de ter o seguinte software instalado em sua máquina:

* XAMPP: **XAMPP** é um pacote de software gratuito e de código aberto que contém o Apache HTTP Server, MySQL, PHP e Perl. Ele é usado aqui para fornecer um ambiente de desenvolvimento local. Você pode fazer o download e instalar a versão adequada para o seu sistema operacional em https://www.apachefriends.org/index.html.

## Configuração do Banco de Dados
1. Inicie o XAMPP e certifique-se de que os serviços Apache e MySQL estão sendo executados.
2. Abra o phpMyAdmin no seu navegador acessando **http://localhost/phpmyadmin**.
3. Crie um novo banco de dados com o nome desejado para o projeto (por exemplo, **crud_php**).

## Estrutura do Banco de Dados

Para criar a estrutura da tabela necessária, execute os seguintes scripts SQL:

* **create_table_users.sql**
* **create_table_colors.sql**
* **create_table_user_colors.sql**

Estes arquivos estão localizados dentro da pasta **migrations** deste projeto.

## Executando o Projeto
Clone ou baixe este repositório para o seu ambiente local.
Mova os arquivos para o diretório htdocs dentro do diretório de instalação do XAMPP.
Acesse o projeto em seu navegador web, digitando http://localhost/nome-do-diretorio-do-projeto na barra de endereços.

## Funcionalidades

Este projeto oferece as seguintes funcionalidades básicas de CRUD:

* Create (Criar): Adiciona novos registros ao banco de dados.
* Read (Ler): Exibe todos os registros existentes na tabela.
* Update (Atualizar): Permite a edição de registros existentes.
* Delete (Excluir): Remove registros do banco de dados.

## Tecnologias Utilizadas
* **PHP:** Linguagem de programação utilizada para o back-end.
* **Bootstrap:** Framework front-end utilizado para o design e a responsividade.
* **MySQL:** Sistema de gerenciamento de banco de dados utilizado para armazenar os dados.
  
## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para fazer um fork deste projeto e enviar suas solicitações de pull.

## Autor
Este projeto foi desenvolvido por Erick Adriél Garcia.

#
