FROM php:7.2.4-fpm
RUN apt-get update -y && apt-get install -y openssl zip unzip git && apt-get install -y figlet
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo pdo_mysql mbstring
WORKDIR /app
COPY . /app
COPY ./run.sh /
EXPOSE 8181