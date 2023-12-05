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

yes Y |composer require realrashid/sweet-alert
yes Y |php artisan vendor:publish --provider="RealRashid\SweetAlert\SweetAlertServiceProvider"
yes Y |composer require open-admin-org/open-admin
yes Y |php artisan vendor:publish --provider="OpenAdmin\Admin\AdminServiceProvider"
yes Y | php artisan admin:install
yes Y |composer require open-admin-ext/helpers
yes Y |php artisan admin:import helpers



