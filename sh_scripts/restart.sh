#!/bin/bash

./sh_scripts/cache_clear.sh

docker compose down

docker compose up --build -d nginx

echo "Приложение перезапущено"
