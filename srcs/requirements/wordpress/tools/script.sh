#!/bin/bash

wp core download --allow-root --path="/var/www/html"
cp /wp-config.php /var/www/html/wp-config.php
cp /index.php /var/www/html/index.php
wp core install --allow-root --url="${DOMAIN_NAME}" --title="Inception" --admin_user="${WP_ADMIN}" --admin_password="${WP_ADMIN_PWD}" --admin_email="${WP_AD_EMAIL}" --path="/var/www/html" --skip-email
wp user create "${WP_USER}" "${WP_USER_EMAIL}" --allow-root --role="author" --user_pass="${WP_USER_PWD}" --path="/var/www/html"

exec php-fpm82 -F