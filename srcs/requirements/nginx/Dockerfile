FROM alpine:3.18

RUN apk update && apk upgrade &&  apk add --no-cache nginx gettext
RUN mkdir -p /etc/nginx/ssl
#RUN chmod 777 /var/www/html
#RUN chown -R www-data:www-data /var/www/html

COPY ./conf/nginx.conf /etc/nginx/http.d/default.conf
COPY ./tools/edfirmin.42.crt /etc/nginx/ssl/edfirmin.42.crt
COPY ./tools/edfirmin.42.key /etc/nginx/ssl/edfirmin.42.key

EXPOSE 443

CMD [ "nginx", "-g", "daemon off;" ]
