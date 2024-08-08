#!/bin/bash

wp core download --allow-root --path="/var/www/wordpress"
cp /wp-config.php /var/www/wordpress/wp-config.php
cp /index.php /var/www/wordpress/index.php
wp core install --allow-root --url="${DOMAIN_NAME}" --title="Inception" --admin_user="${WP_ADMIN}" --admin_password="${WP_ADMIN_PWD}" --admin_email="${WP_AD_EMAIL}" --path="/var/www/wordpress" --skip-email
wp user create "${WP_USER}" "${WP_USER_EMAIL}" --allow-root --role="author" --user_pass="${WP_USER_PWD}" --path="/var/www/wordpress"

exec php-fpm82 -F