FROM alpine:3.18

WORKDIR /var/www/html

RUN mkdir -p /etc/nginx/ssl
RUN touch /var/www/html/index.html
RUN chmod 755 /var/www/html
RUN addgroup -S nginx && adduser -S nginx -G nginx
RUN chown -R nginx:nginx /var/www/html

RUN apk update && apk upgrade &&  apk add --no-cache nginx gettext

COPY ./conf/nginx.conf /etc/nginx/http.d/default.conf
COPY ./tools/img.png /var/www/html
COPY ./conf/page.html /var/www/html/index.html
COPY ./tools/edfirmin.42.crt /etc/nginx/ssl/edfirmin.42.crt
COPY ./tools/edfirmin.42.key /etc/nginx/ssl/edfirmin.42.key

RUN ln -sf /dev/stdout /var/log/nginx/access.log \
    && ln -sf /dev/stderr /var/log/nginx/error.log
    
EXPOSE 443

CMD [ "nginx", "-g", "daemon off;" ]
