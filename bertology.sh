#!/bin/bash


## local machine commands
composer install
npm install
composer require realrashid/sweet-alert
cp .env.example .env
php artisan key:generate
php artisan vendor:publish --provider="RealRashid\SweetAlert\SweetAlertServiceProvider"
composer require open-admin-org/open-admin
php artisan vendor:publish --provider="OpenAdmin\Admin\AdminServiceProvider"
php artisan admin:install
composer require open-admin-ext/helpers
php artisan admin:import helpers

echo "DONE DOWNLOADING PRE REQUISITES! OPEN VS CODE NOW! - lorens"

exit 1

### deployment command on hostinger
cp .env.example .env
php artisan key:generate
./composer.phar require realrashid/sweet-alert
php artisan vendor:publish --provider="RealRashid\SweetAlert\SweetAlertServiceProvider"
./composer.phar require open-admin-org/open-admin
php artisan vendor:publish --provider="OpenAdmin\Admin\AdminServiceProvider"
php artisan admin:install
./composer.phar require open-admin-ext/helpers
php artisan admin:import helpers
