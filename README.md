# symfony-app

Conference app implemented in Symfony

Uses https://github.com/OS2Conference/display-react for displaying data.

## Installing

```sh
docker-compose up -d
symfony console doctrine:migrations:migrate --no-interaction
symfony local:server:start
```
