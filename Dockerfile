FROM php:8.0-apache

WORKDIR /var/www/html

RUN apt update
RUN docker-php-ext-install mysqli

COPY . .

EXPOSE 80 443