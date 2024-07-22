# FROM alpine:3.18

# RUN apk update && apk upgrade && apk add --no-cache mariadb mariadb-client mariadb-server-utils
# RUN chown -R mysql:root /var/lib/mysql

FROM debian:buster

RUN apt update -y && apt upgrade -y && apt-get install mariadb-server -y

COPY ./conf/mariadb.cnf /etc/mysql/mariadb.cnf
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
COPY ./tools/script.sh /
RUN chmod +x /script.sh
CMD [ "/script.sh" ]