#!/bin/bash

docker compose up --build -d nginx

./sh_scripts/cache_clear.sh

echo "Приложение запущено"
