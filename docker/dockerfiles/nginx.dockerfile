FROM nginx:stable-alpine

ARG UID
ARG GID

ENV UID=${UID}
ENV GID=${GID}

RUN mkdir -p /var/www/html
WORKDIR /var/www/html

RUN addgroup -g ${GID} --system maxmoll
RUN adduser -G maxmoll --system -D -s /bin/sh -u ${UID} maxmoll
RUN sed -i "s/user  nginx/user maxmoll/g" /etc/nginx/nginx.conf