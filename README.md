# Como usar esse codigo

## Ativando o WSL 

* Para quem usa o Linux pode pular esse passo.
* Requisito ter win 10/11

Primeiro temos que ativar o WSL(windown subsistem linux) no Windows seguindo os seguintes passos:

Abrir o Painel de Controle depois em Progrmas:
![IMG-painel](/img-uso/painel.jpg)

Agora ativar ou desativar recuros do windows:
![IMG-Recursos](/img-uso/recursos.jpg)

Ative duas coisas **Plataforma de maquina virtual** e **Subsistema do windowns para linux**:
![IMG-ativar](/img-uso/ativar.jpg)


Agora ele vai pedir pra **reiniciar o computador**.

## Istalar Ubuntu

Depois de reiniciar o computador abra o **Microsoft Store** e pesquise "ubunt".
Escolha uma dessas duas versões e clique em *Obter* ou *Instalar*:

![IMG-store](/img-uso/store.jpg)

Depois de instalado va o menu iniciar e presquise **Ubuntu** e abra o aplicativo.

Ele vai pedir um que crie um **usuario** e uma **Senha**.
Quando digitar a senha por questoes de segurança não aparecera nada.
Confirme a senha e espere um pouco.

![IMG-senha](/img-uso/senha.jpg)

Digite o comando:
~~~cmd
clear
~~~
Para limpar a tela.
## Instalar o Docker

A instalação do docker é simples, baixe o instalador e siga os passos de instalação.

link:

Depois da instalação vamos nas configurações

![IMG-doc](/img-uso/doc.jpg)

Nas configuraçoes vamos em **Resourses** >> **WSL Integration** circulado em vermenho ative a caixa circulada em *Verde* e ative o ubuntu que vc instalou no computador e clique em Aplicar.

![IMG-conf](/img-uso/conf.jpg)

### Verificar se o Docker esta rodando no Ubuntu

Abra o Ubuntu e digite o comando:
~~~cmd
docker -v
~~~
Se estiver funcionando vai receber a seguinte resposta.
~~~cmd
Docker version 26.0.0, build 2ae903e
~~~

## Instalar o PHP no Ubuntu e Suas Esteções Nessesarias

### Intalando o PHP 8.2
Todos o comandos a seguir são para se colocar no terminal Ubuntu.

Primeiro vamos atualizar o apt
~~~cmd
sudo apt update
~~~
Ele pode pedir a senha para fazer essa atualização.

Baixar o pacote de instalação do php
~~~cmd
sudo add-apt-repository ppa:ondrej/php
~~~
Vai pedir para dar **Enter** para continuar.

Agora instalar o php 8.2
~~~cmd
sudo apt install php8.2 -y
~~~

### Instalando as Extenções Nescessárias
O comando para instalar as extençoes do php

~~~cmd
sudo apt install php8.3-curl php8.3-cli php8.3-xml php8.3-mysql
~~~
~~~cmd
sudo apt install php8.3-cli unzip
~~~
Para confirmar que o PHP foi instalado corretamento rode o comando
~~~cmd
php -v
~~~
se a saida for algo parecido com:
~~~cmd 
PHP 8.2.19 (cli) (built: May 13 2024 18:20:15) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.2.19, Copyright (c) Zend Technologies
    with Zend OPcache v8.2.19, Copyright (c), by Zend Technologies
~~~
Esta tudo correto.

## Instalar o Composer no Ubuntu
Primeiro vamos atualizar o apt
~~~cmd
sudo apt update
~~~
Execute os comandos para baixar o setup do composer

~~~cmd
cd ~
curl -sS https://getcomposer.org/installer -o composer-setup.php
~~~

~~~cmd
HASH=`curl -sS https://composer.github.io/installer.sig`
~~~
Para instalar o Composer.
~~~cmd
php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
~~~
Para instalar o composer globalmente
~~~cmd
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
~~~

para comfirmar que foi instalado com sucesso o comando
~~~cmd
composer
~~~
Se a saida for algo como
~~~cmd
   ______
  / ____/___  ____ ___  ____  ____  ________  _____
 / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
/ /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
\____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                    /_/
Composer version 2.7.6
~~~
Esta tudo correto.

## Baixar o Projeto
Baixe o projeto usando o comando

~~~cmd
git clone https://github.com/AlcidesSN/laravelDiceForge.git
~~~
Ou o comando se tiver cadastrado o SSH no ubuntu.
~~~cmd
git clone git@github.com:AlcidesSN/laravelDiceForge.git
~~~

## Rodar o Composer
Primeiro abra a pasta do projeto.
~~~cmd
cd laravelDiceForge
~~~
Agora vamos instalar os arquivos que faltam para rodar o projeto usando o comando.

~~~cmd
composer install
~~~
## Testar o Projeto

## Fazer Alterações(Pull Request)