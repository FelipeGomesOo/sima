# Sima

Este projeto foi desenvolvido com:

- **PHP**
- **HTML**
- **Sass**
- **JavaScript**
- **jQuery**

A automação de tarefas é feita com **Gulp**, responsável por compilar arquivos da pasta `src` para a pasta `public`.

### Repositório do projeto:

- HTTPS: [https://github.com/FelipeGomesOo/sima.git](https://github.com/FelipeGomesOo/sima.git)
- SSH: `git@github.com:FelipeGomesOo/sima.git`

---

## Requisitos

Antes de iniciar, você precisa ter instalado em sua máquina:

- Servidor **Apache**
- **PHP** (recomendado: 7.4 ou superior)
- **Node.js**
- **npm**
- (Opcional, para o blog) **MySQL** + **phpMyAdmin**

---

## Instalação das dependências necessárias

### 1️ Instalar o Node.js e npm

Baixe e instale o Node.js, que já inclui o npm:  
[https://nodejs.org/](https://nodejs.org/)

Para verificar se a instalação foi concluída com sucesso:

```bash
node -v
npm -v
```

### 2️ Instalar o Gulp (globalmente)
Instale o Gulp de forma global para usar os comandos no terminal:

```bash
npm install --global gulp-cli
```

---

## Como rodar o projeto localmente

### 1️ Clonar o repositório

```bash
git clone https://github.com/FelipeGomesOo/sima.git
```
### 2️ Instalar as dependências
Acesse a pasta do projeto no terminal e execute:

```bash
npm install
```

### 3️ Configurar o arquivo de ambiente
Coloque o arquivo de ambiente (fornecido separadamente) dentro da pasta /public.
Edite as variáveis conforme necessário para o seu ambiente (URLs, caminhos, etc.).

### 4️ Configurar o Apache
Configure o Apache para servir o projeto a partir da pasta /public.

Exemplos:
Se usa XAMPP ou MAMP: crie um host virtual apontando para a pasta public.
Ou edite o arquivo de configuração do Apache conforme preferir.

### 5 Compilar os arquivos com o Gulp
#### Para processar Sass e JavaScript:
```bash 
gulp
```
#### Para manter o Gulp observando alterações automaticamente:
```bash
gulp watch
```
---

### 📂 Rodando o blog (opcional)
O blog está na pasta /Blog e funciona em WordPress.

#### Passos para rodar o blog localmente:
1) Copie a pasta /Blog via FTP.
2) Faça o backup do banco de dados do WordPress da produção.
3) Importe esse banco de dados no seu phpMyAdmin local.
4) Edite o arquivo wp-config.php (dentro da pasta Blog) para usar o banco local.
5) Configure seu Apache para servir a pasta /Blog, caso queira rodá-la separadamente.

#### ℹ️ Observações importantes
1) Os arquivos PHP são processados diretamente pelo servidor Apache.
2) O Gulp processa apenas arquivos Sass e JS da pasta src para a pasta public.
3) A pasta /public é a pasta que funciona como raiz pública do projeto.
