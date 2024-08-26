from php:8.1-apache


#instalar dependencias necesarias para potsgress

RUN apt-get update && apt-get install -y \

    linpq-dev \
    && docker-php-ext-install pdo pdo_pqsql pdo_pgsql

#copiar contenido de toda la app en el contendor 
COPY . /var/www/html/

#EXPONER EL PUERTO 80
EXPOSE 80
