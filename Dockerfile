FROM php:7.2.4-fpm
RUN apt-get update -y && apt-get install -y openssl zip unzip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring
WORKDIR /egresso2.0
COPY . /egresso2.0
RUN composer install --no-plugins --no-scripts
COPY ./run.sh /
EXPOSE 8181