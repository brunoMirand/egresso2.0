#!/bin/bash
echo Copying the configuration example file
cp .env.example .env

echo Install dependencies
composer update

echo Generate key
php artisan key:generate

#echo Make migrations
#php artisan migrate

#echo Make seeds
#php artisan db:seed

figlet EGRESSO 2.0
echo up server
php artisan serve --host=0.0.0.0 --port=8181

