FROM php:7.3-apache

RUN apt-get -y update --fix-missing \
    && apt-get upgrade -y

RUN apt-get -y install --fix-missing apt-utils \
                                     build-essential \
                                     curl \
                                     zip

RUN apt-get -y install apt-utils wget \
                                 mc \
                                 git

# Install xdebug
RUN pecl install xdebug-2.7.2 \
&& docker-php-ext-enable xdebug

# Other PHP7 Extensions
RUN docker-php-ext-install pdo_mysql mysqli tokenizer json

RUN apt-get -y install zlib1g-dev libicu-dev

RUN docker-php-ext-install -j$(nproc) intl
RUN docker-php-ext-install mbstring

RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN docker-php-ext-install -j$(nproc) gd

# Enable apache modules
RUN a2enmod rewrite headers