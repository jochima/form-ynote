#!/bin/bash

composer install

exec "$@"

php bin/console cache:clear --env=prod|| true
php bin/console cache:warmup --env=prod || true 

echo "🚀 Entrypoint exécuté avec succès."
