# EstudosPOO_1-estagio
## Visão Geral
Esse é um dos projetos que foram feitos para estudo de Programação Orientada a Objetos guiados pelo livro "PHP Programando com Orientação a Objetos"
de 2007, escrito por Pablo Dall'Oglio. Todos os códigos desse diretório foram apresentados no livro.

## Pré-requisitos

Primeiro, baixe os pacotes da sua distribuição, no exemplo será no ubuntu 22.04

```bash
sudo apt-get update 
```

Em seguida, atualize seus pacotes

```bash
sudo apt-get upgrade
```

Instale pacotes para usar um repositório HTTPS

```bash
sudo apt-get install \
    apt-transport-https \
    ca-certificates \
    curl \
    gnupg \
    lsb-release
```


Instale o Apache 2

```bash
sudo apt install apache2
```

- Verifique seu servidor web

```bash
sudo systemctl status apache2
```
- Inicie um servidor

```bash
sudo systemctl start apache2
```
- Crie um diretório para seu dominio

```bash
sudo mkdir /var/www/html/your_domain
```
- Use your_domain/Projeto_name/nome_do_projeto.php no navegador

Após isso, clone o projeto para um diretório

```bash
git clone git@github.com:BennyJ0hann/PHP-estagio.git
```