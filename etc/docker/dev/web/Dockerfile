FROM php:5.6-apache

RUN apt-get update && \
    apt-get install -y git libicu-dev libmcrypt-dev libpng-dev libcurl3-dev libxml2-dev libjpeg-dev libpng-dev libssl-dev libmagickwand-dev openssl

RUN pecl install imagick
RUN docker-php-ext-enable imagick

RUN docker-php-ext-configure intl
RUN docker-php-ext-configure gd --enable-gd-native-ttf --with-jpeg-dir=/usr/lib/x86_64-linux-gnu --with-png-dir=/usr/lib/x86_64-linux-gnu
RUN docker-php-ext-install mbstring mysqli pdo_mysql intl mcrypt gd exif curl soap zip bcmath
RUN docker-php-ext-install simplexml zip
RUN docker-php-ext-install hash
RUN docker-php-ext-install gettext

RUN apt-get autoremove -y && \
    apt-get clean all && \
    rm -rf /var/lib/apt/lists/*

#RUN curl -sS https://getcomposer.org/installer | php && \
#    mv composer.phar /usr/local/bin/composer

COPY php.ini /usr/local/etc/php/conf.d/php.ini
COPY vhost.conf /etc/apache2/sites-available/site.conf
COPY entrypoint.sh /usr/local/bin/entrypoint.sh

RUN a2enmod rewrite && \
    a2ensite site && \
    a2dissite 000-default

WORKDIR /var/www/html

EXPOSE 80

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]

CMD ["apache2-foreground"]
