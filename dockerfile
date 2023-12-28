# Use the official PHP image as the base image
FROM php:latest

# Set the working directory in the container
WORKDIR /var/www/html/

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy composer files and install dependencies
COPY . /var/www/html/
COPY composer.json ./
COPY composer.lock ./
RUN composer install --no-dev --no-interaction --no-autoloader --no-scripts
#COPY . ./
RUN composer dump-autoload --optimize

# Set permissions (optional, adjust as needed)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80
EXPOSE 8080
#CMD bash -c "composer install && php artisan serve --host 0.0.0.0 --port 5001"
# Start PHP's built-in server (adjust as needed)
CMD php artisan serve --host=0.0.0.0 --port=8080
