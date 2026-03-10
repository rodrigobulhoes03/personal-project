FROM php:8.1-apache

# Instalar a extensão PDO MySQL
RUN docker-php-ext-install pdo_mysql

# Copiar arquivos do projeto (opcional, mas pode ser útil)
# COPY ./src /var/www/html
# COPY ./config /var/www/config