#!/bin/bash

CONTAINER_NAME="php-patterns"

# Проверяем, установлен ли Docker
if ! command -v docker &> /dev/null; then
    echo "Ошибка: Docker не установлен или не добавлен в PATH"
    exit 1
fi

# Проверяем статус контейнера
if docker ps --format '{{.Names}}' | grep -q "^${CONTAINER_NAME}$"; then
    echo "[✓] Контейнер '${CONTAINER_NAME}' работает"
elif docker ps -a --format '{{.Names}}' | grep -q "^${CONTAINER_NAME}$"; then
    echo "[×] Контейнер '${CONTAINER_NAME}' остановлен"
else
    echo "[!] Контейнер '${CONTAINER_NAME}' не существует"
fi

read -p "Нажмите Enter для выхода..."