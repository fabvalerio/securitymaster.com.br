# Dockerfile

FROM php:8.2.12-apache

# Instala as dependências necessárias para o PDO MySQL e o MySQL Client
RUN apt-get update && apt-get install -y default-mysql-client && apt-get install -y msmtp msmtp-mta
    
RUN a2enmod rewrite

#RUN echo 'sendmail_path = "/usr/bin/msmtp -t"' >> /usr/local/etc/php/php.ini

