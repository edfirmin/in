FROM debian:buster

RUN apt update -y && apt upgrade -y
RUN apt-get -y install wget
RUN apt-get install -y php7.3\
	php-fpm\
	php-mysql\
	mariadb-client
RUN wget https://fr.wordpress.org/wordpress-6.5.5-fr_FR.tar.gz -P /var/www
#RUN cd /var/www
WORKDIR /var/www
RUN tar -xzf wordpress-6.5.5-fr_FR.tar.gz
RUN rm -rf wordpress-6.5.5-fr_FR.tar.gz
RUN	chown -R root:root /var/www/wordpress
