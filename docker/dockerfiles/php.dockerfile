FROM php:8.2-fpm-alpine

ARG UID
ARG GID

ENV UID=${UID}
ENV GID=${GID}

RUN mkdir -p /var/www/html
WORKDIR /var/www/html

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN addgroup -g ${GID} --system maxmoll
RUN adduser -G maxmoll --system -D -s /bin/sh -u ${UID} maxmoll

RUN sed -i "s/user = www-data/user = maxmoll/g" /usr/local/etc/php-fpm.d/www.conf
RUN sed -i "s/group = www-data/group = maxmoll/g" /usr/local/etc/php-fpm.d/www.conf
RUN echo "php_admin_flag[log_errors] = on" >> /usr/local/etc/php-fpm.d/www.conf

RUN docker-php-ext-install pdo pdo_mysql

USER maxmoll

CMD ["php-fpm", "-y", "/usr/local/etc/php-fpm.conf", "-R"]