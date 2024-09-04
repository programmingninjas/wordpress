FROM ubuntu:20.04

ENV DEBIAN_FRONTEND=noninteractive
ENV TZ=Asia/Kolkata

RUN apt update && apt install -y apache2 \
    php libapache2-mod-php php-mysql php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip curl sudo

RUN mkdir -p /srv/www && chown www-data: /srv/www && curl https://wordpress.org/latest.tar.gz | sudo -u www-data tar zx -C /srv/www

COPY wordpress.conf /etc/apache2/sites-available/wordpress.conf

RUN a2ensite wordpress && a2enmod rewrite && a2dissite 000-default

COPY wp-config.php /srv/www/wordpress/wp-config.php

CMD ["apache2ctl", "-D", "FOREGROUND"]

