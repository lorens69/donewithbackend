#!/bin/bash

composer install
npm install
composer require realrashid/sweet-alert
php artisan vendor:publish --provider="RealRashid\SweetAlert\SweetAlertServiceProvider"
cp .env.example .env
php artisan key:generate
composer require open-admin-org/open-admin
php artisan vendor:publish --provider="OpenAdmin\Admin\AdminServiceProvider"
php artisan admin:install
composer require open-admin-ext/helpers
php artisan admin:import helpers
