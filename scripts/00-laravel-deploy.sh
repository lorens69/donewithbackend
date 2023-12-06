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


# SweetAlert
composer require -n realrashid/sweet-alert
php artisan vendor:publish --provider="RealRashid\SweetAlert\SweetAlertServiceProvider" --force

# OpenAdmin
composer require -n open-admin-org/open-admin
php artisan vendor:publish --provider="OpenAdmin\Admin\AdminServiceProvider" --force
php artisan admin:install --force

# OpenAdmin Helpers
composer require -n open-admin-ext/helpers
php artisan admin:import helpers --force





