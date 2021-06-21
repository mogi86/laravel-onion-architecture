# laravel-onion-architecture

Laravelでオニオンアーキテクチャーでの実装例
Macで動かすことを想定

## Installation

```bash
$ cd /path/to/laravel-onion-architecture
$ composer install
```

## Run App

- docker-compose up

```bash
$ docker-compose up -d
```

## Access to web page

- http://127.0.0.1:8000/

## Demo

- Create new task

```bash
$ curl -v -X POST -H "Content-Type: application/json" \
  -d '{"name":"hoge", "description":"hogehoge!!!"}' \
  "http://127.0.0.1:8000/api/task/"
```

# How to show app log

- Login to app docker container

```bash
$ docker exec -it laravel-onion-architecture /bin/bash
```

- Show log

```bash
# tail -n 10 -F /usr/src/laravel-onion-architecture/storage/logs/laravel.log
```
