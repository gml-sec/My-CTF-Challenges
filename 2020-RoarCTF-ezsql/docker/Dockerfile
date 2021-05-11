From ubuntu:20.04

ENV DEBIAN_FRONTEND=noninteractive

MAINTAINER gml "happylei2333@gmail.com"

RUN apt-get update -y

RUN apt-get -y install mysql-server
RUN apt-get -yqq install apache2
RUN apt-get -yqq install php libapache2-mod-php
RUN apt-get install -yqq php-mysql
RUN sed -i 's/Options Indexes FollowSymLinks/Options None/' /etc/apache2/apache2.conf

ADD ./html /var/www/html
RUN rm /var/www/html/index.html
RUN usermod -d /var/lib/mysql/ mysql

COPY flag.txt /root/flag.txt
COPY start.sh /root/start.sh
RUN chmod +x /root/start.sh
ENTRYPOINT cd /root; ./start.sh
EXPOSE 80