# symfony-app

Conference app implemented in Symfony

Uses https://github.com/OS2Conference/display-react for displaying data.

## Installing

```sh
docker-compose up -d
symfony console doctrine:migrations:migrate --no-interaction
symfony local:server:start
```

## Configuration

```sh
# .env.local
CONFERENCE_JS_LIB_URL='https://raw.githack.com/rimi-itk/react-app/main/dist/demo.js'
```
