FROM alpine:3.18

RUN apk update && apk upgrade
RUN apk add --no-cache wget curl php82 php82-fpm php82-mysqli mariadb-client

RUN adduser -S user-wp && addgroup -S user-wp

RUN mkdir /var/www /var/www/wordpress && chmod 777 /var/www/wordpress

RUN curl -o /usr/local/bin/wp https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && chmod +x /usr/local/bin/wp

COPY ./conf/www.conf /etc/php82/php-fpm.d/www.conf

COPY ./conf/wp-config.php /wp-config.php

COPY ./tools/script.sh ./script.sh
RUN	chmod 777 ./script.sh

COPY ./conf/index.php /index.php
#RUN cd /var/www


EXPOSE 9000
ENTRYPOINT ["sh", "script.sh"]
