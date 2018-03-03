# barsi
Barsi é uma aplicaço web para a gestão de investimentos em ações, inicialmente da B3. Com ele você cadastra ordens de compra e venda de ações e obtém os cálculos de rendimento da carteira e comparativos com índices diversos (IBOV, IBRX, CDI, IPCA, etc.).

# Setup com docker

Após clonar o projeto, rode na raiz do projeto:
**Note**: Estou considerando que você esteja usando **Linux**.

```
$ make setup
```
Ao final de todo o processo, você verá algo assim:

```application_1  | 2018-03-03 14:39:51,460 INFO success: nginx entered RUNNING state, process has stayed up for > than 1 seconds (startsecs)
application_1  | 2018-03-03 14:39:51,460 INFO success: php-fpm entered RUNNING state, process has stayed up for > than 1 seconds (startsecs)
application_1  | 2018-03-03 14:39:51,460 INFO success: crond entered RUNNING state, process has stayed up for > than 1 seconds (startsecs)```

Esse pedaço de log mostra que o **nginx**, **php-fpm** e **crond** estão rodando com sucesso.

Agora abra uma nova aba no seu terminal e ainda na raiz do projeto, rode o seguinte:

```
$ make key:db
```

Uma **APP_KEY** será gerada em seu .env e tanto a migration quanto o seed serão executados.

Agora é só acessar a aplicação em: http://localhost:8000

Na próxima vez que for desenvolver, você pode executar diretamente **make up** pois já estará tudo configurado.