#!/bin/bash

echo Copying the configuration example file
cp .env.example .env

#echo Install dependencies
#docker exec -it egresso-app composer install

echo Generate key
php artisan key:generate

#echo Make migrations
#php artisan migrate

#echo Make seeds
#php artisan db:seed

echo up server
php artisan serve --host=0.0.0.0 --port=8181
