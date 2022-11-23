FROM php:7.4-fpm-alpine

#RUN apt update && apt install php php-cli php-fpm php-json php-common php-mysql php-zip php-gd php-mbstring php-curl php-xml php-pear php-bcmath php-pgsql

RUN apk add --no-cache nginx supervisor wget

#Install php extension
#RUN apk add php-pgsql php-cli php-fpm php-json php-common php-zip php-gd php-mbstring php-curl php-xml php-pear php-bcmath
RUN apk add php7.4-cli php7.4-json php7.4-common php7.4-mysql php7.4-pgsql php7.4-zip php7.4-gd php7.4-mbstring php7.4-curl php7.4-xml php7.4-bcmath

RUN mkdir -p /run/nginx

COPY docker/nginx.conf /etc/nginx/nginx.conf

RUN mkdir -p /app
COPY . /app

RUN sh -c "wget http://getcomposer.org/composer.phar && chmod a+x composer.phar && mv composer.phar /usr/local/bin/composer"
RUN cd /app && /usr/local/bin/composer install --no-dev
RUN cd /app && /usr/local/bin/composer dump-autoload

RUN chown -R www-data: /app

CMD sh /app/docker/startup.sh
