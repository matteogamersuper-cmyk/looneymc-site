FROM trafex/php-nginx:latest

COPY --chown=nobody:nobody public/ /var/www/html/

EXPOSE 8080
