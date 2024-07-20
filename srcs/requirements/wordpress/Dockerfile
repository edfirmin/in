FROM alpine:3.18

RUN apk update && apk upgrade
RUN apk add --no-cache wget
RUN apk add php82\
	php82-fpm\
	php82-mysqli

#COPY ./conf/www.conf /etc/php82/php-fpm.d/www.conf

RUN mkdir /var/www /var/www/html && chmod 667 /var/www/html
RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar -P /usr/local/bin/wp
WORKDIR /usr/local/bin/wp
RUN chmod +x wp-cli.phar
#RUN	chown -R root:root /var/www/wordpress


EXPOSE 9000
