FROM php:7.4-fpm-alpine

#RUN apt update && apt install php php-cli php-fpm php-json php-common php-mysql php-zip php-gd php-mbstring php-curl php-xml php-pear php-bcmath php-pgsql

RUN apk add --no-cache nginx supervisor wget

#Install php extension
RUN apk add php-pgsql php-cli php-fpm php-json php-common php-zip php-gd php-mbstring php-curl php-xml php-pear php-bcmath
#RUN docker-php-ext-install mysqli pdo pdo_mysql pgsql pdo_pgsql
#RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql && docker-php-ext-install pgsql pdo_pgsql
RUN set -ex && apk --no-cache add postgresql-dev
#RUN docker-php-ext-install pdo pdo_pgsql
# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath

RUN mkdir -p /run/nginx

COPY docker/nginx.conf /etc/nginx/nginx.conf

RUN mkdir -p /app
COPY . /app

RUN sh -c "wget http://getcomposer.org/composer.phar && chmod a+x composer.phar && mv composer.phar /usr/local/bin/composer"
RUN cd /app && /usr/local/bin/composer install --no-dev
RUN cd /app && /usr/local/bin/composer dump-autoload

RUN cd /app && chmod -R 777 public/
RUN cd /app && chmod -R 777 storage/
RUN cd /app && chmod -R 777 bootstrap/cache/

RUN chown -R www-data: /app

CMD sh /app/docker/startup.sh
