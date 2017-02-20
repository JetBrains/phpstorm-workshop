FROM php:7.1

MAINTAINER maxim.kolmakov@jetbrains.com

# Install PECL extensions
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug