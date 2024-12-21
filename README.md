# Guia para Rodar uma Aplicação Laravel com Conexão ao Banco de Dados

Este guia descreve os passos necessários para configurar e rodar uma aplicação Laravel localmente, incluindo a conexão ao banco de dados.

---

## Requisitos

Antes de começar, certifique-se de que os seguintes requisitos estão atendidos:

1. **PHP**
   - Versão 8.1 ou superior.
   
   **Configuração do PHP inicial Windows**
   - Ter o Xampp instalado
   - Descomentar nos arquivos php.ini as seguintes linhas:
     - extension=pdo_mysql
     - extension=openssl
     - extension=mbstring
     - extension=tokenizer
     - extension=xml
     - extension=ctype
     - extension=json
     além de instalar o 7zip

2. **Composer**
   - Instalado globalmente para gerenciar dependências PHP.

3. **Banco de Dados**
   - MySQL instanciado pelo Xampp.
   - Acesse o phpMyAdmin pelo Xampp e crie um banco de dados com o nome `blog` ou `qualquer_nome_aceitavel`

4. **Node.js e npm**

5. **Servidor Web**
   - Apache ou Nginx configurado para rodar a aplicação pelo Xampp.

6. **Git**
   - Para clonar o repositório do projeto.

---

## Passos para Configuração

### 1. Clone o Repositório

Clone o repositório Laravel para o seu ambiente local:

```bash
git clone <URL_DO_REPOSITORIO>
cd <PASTA_DO_PROJETO>
```

### 2. Instale as Dependências

```bash
composer install
```

### 3. Configure o .env

```bash
cp .env.example .env
```

### 4. Rode as migrations e verifique se o banco de dados está funcionando corretamente no phpMyAdmin

```bash
php artisan migrate
```

### 5. Rode o servidor

```bash
php artisan serve
```

### 6. Rode o frontend

```bash
npm run start
```

### 7. Acesse a aplicação pelo navegador

```bash
http://localhost:3000
```