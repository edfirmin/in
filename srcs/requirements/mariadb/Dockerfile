# FROM alpine:3.18

# RUN apk update && apk upgrade && apk add --no-cache mariadb mariadb-client mariadb-server-utils

FROM alpine:3.18

RUN apk update && apk upgrade && apk add --no-cache mariadb mariadb-client mariadb-server-utils mysql mysql-client gettext
#RUN apk update && apk upgrade && apk add --no-cache mariadb mariadb-client mariadb-server-utils gettext

COPY ./tools/script.sh /script.sh
RUN  chmod 777 /script.sh

EXPOSE 3306
ENTRYPOINT ["sh", "/script.sh" ]