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
CONFERENCE_CSS_LIB_URL='https://raw.githack.com/OS2ConTicki/display-react/feature/example-data/dist/entry.css'
CONFERENCE_JS_LIB_URL='https://raw.githack.com/OS2ConTicki/display-react/feature/example-data/dist/entry.js'
```
