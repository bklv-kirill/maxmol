#!/bin/bash

docker compose exec -it php php artisan cache:clear
docker compose exec -it php php artisan optimize:clear

echo "Очистка кеша завершена"
