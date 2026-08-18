FROM php:8.2-apache

# Enable Apache mod_rewrite for LavaLust's clean URLs
RUN a2enmod rewrite

# Set Apache DocumentRoot to the public folder
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Allow .htaccess overrides
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Copy project files into the container
COPY . /var/www/html/

# Set permissions so PHP can write to runtime/cache, logs, sessions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/runtime

# Expose port 80 (Render maps this automatically)
EXPOSE 80

CMD ["apache2-foreground"]