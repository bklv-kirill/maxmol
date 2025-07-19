#!/bin/bash

if [ ! -f .env ]; then
    if [ -f .env.example ]; then
        cp .env.example .env
        echo "Необходимо заполнить .env файл, созданный на основе .env.example"
        exit 1
    else
        echo "Ошибка: .env.example не найден!"
        exit 1
    fi
fi

docker compose up --build -d nginx

docker compose exec -it php composer install

docker compose exec -it php php artisan key:generate
docker compose exec -it php php artisan migrate

./sh_scripts/cache_clear.sh

echo "Установка звершена"
