#!/bin/bash

composer install

exec "$@"

echo "🚀 Entrypoint exécuté avec succès."