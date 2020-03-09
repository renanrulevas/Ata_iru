# Projeto Integrador - Grupo 04


## Livraria Ataîru - E-commerce
<img src="public/img/LivrariaAtairu-logo-Courier_New.png" alt="Livraria Ataîru" width="40%"/>

---

* Irailda Fernandes
* Milena Yamamoto
* Paola Brito
* Regiane Machado
* Renan Martins
* Valter Rodriguez

---

## Onde começar?

* Confira se você possui o laravel e o composer instalados. As linhas abaixo retornarão com a versão do pacote instalado. Caso contrário, você deverá instalá-los:

```
laravel -v
composer -v
```


* Baixe o repositório:

```
git clone <link-pro-repositório>
```

* Instale as bibliotecas necessárias para o projeto:

```
composer install
```

* Entre na pasta onde o repositório foi baixado e rode o servidor com:

```
php artisan serve
```


---

## Como criar o banco de dados?

1. Ligue o XAMP/WAMP/MAMP


2. Crie o banco no MySQL Workbench
* Clique no botão "Create a new schema in the connected server"

<img src="public/img/documentation/migrations01.png" alt="migrations01" width="50%"/>

* Nomeie de atairu e clique em apply

<img src="public/img/documentation/migrations02.png" alt="migrations01" width="50%"/>


3. Crie as migrations no banco de dados
* As migrations já foram criadas na pasta database > migrations, mas devem ser exportadas para o banco de dados pela linha de comando:

```
php artisan migrate
```

<img src="public/img/documentation/migrations03.png" alt="migrations01" width="40%"/>


4. Teste!
* Vá para o navegador, digite localhost e no menu clique em phpMyAdmin

<img src="public/img/documentation/migrations04.png" alt="migrations04" width="40%"/>


* No menu lateral esquerdo, clique em atairu e veja se as colunas estão sendo listadas (deve ter um total de 15 colunas):

<img src="public/img/documentation/migrations05.png" alt="migrations04" width="70%"/>


> OBS.: Caso tenha feito alguma operação errada, basta deletar as tabelas com o seguinte comando:
```
php artisan migrate:rollback
```

> OBS.: Caso queira alterar alguma informação nas migrations, basta atualizar as tabelas com o seguinte comando:
```
php artisan migrate:refresh
```