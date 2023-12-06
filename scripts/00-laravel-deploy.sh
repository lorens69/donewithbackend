#!/usr/bin/env bash
echo "Running composer"
composer global require hirak/prestissimo
composer install --no-dev --working-dir=/var/www/html

echo "generating application key..."
php artisan key:generate --show

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migrations..."
php artisan migrate --force


composer require --yes realrashid/sweet-alert
php artisan vendor:publish --provider="RealRashid\SweetAlert\SweetAlertServiceProvider" --yes


composer require --yes open-admin-org/open-admin
php artisan vendor:publish --provider="OpenAdmin\Admin\AdminServiceProvider" --yes
php artisan admin:install --yes

composer require --yes open-admin-ext/helpers
php artisan admin:import helpers --yes




