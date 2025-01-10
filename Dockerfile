# Dockerfile

FROM php:8.2.12-apache

# Instala as dependências necessárias para o PDO MySQL e o MySQL Client
RUN apt-get update && \
    apt-get install -y default-mysql-client && \
    docker-php-ext-install pdo pdo_mysql
    
RUN a2enmod rewrite
