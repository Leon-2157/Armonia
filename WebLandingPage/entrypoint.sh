#!/bin/bash
# Install PHP dependencies
composer install

# Jalankan perintah CMD (php artisan serve)
exec "$@"
