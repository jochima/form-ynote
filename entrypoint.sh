#!/bin/bash

composer install

exec "$@"

php bin/console cache:clear || true
php bin/console cache:warmup || true

echo "🚀 Entrypoint exécuté avec succès."
