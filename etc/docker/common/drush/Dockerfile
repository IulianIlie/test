FROM drush/drush:7

VOLUME ["/var/www/html"]

WORKDIR /var/www/html

COPY entrypoint.sh /docker-entrypoint.sh

ENTRYPOINT ["/docker-entrypoint.sh"]

RUN adduser drush
USER drush