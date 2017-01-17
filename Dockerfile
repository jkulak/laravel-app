FROM php-zendserver

COPY ./conf/webserver/custom_default.conf /usr/local/zend/etc/sites.d/zend-default-vhost-80.conf
COPY ./conf/webserver/000-default.conf /etc/apache2/sites-available/000-default.conf

ENV PATH "/usr/local/zend/bin:$PATH"

RUN curl -sS https://getcomposer.org/installer \
  | php -- --install-dir=/usr/local/bin --filename=composer

# TODO: move dependencies to composer.json
# TODO: do not use root account for composer?
RUN composer global require "laravel/installer"
ENV PATH "/root/.composer/vendor/bin:$PATH"
