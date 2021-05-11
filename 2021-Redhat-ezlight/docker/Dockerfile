FROM ubuntu:18.04

ENV DEBIAN_FRONTEND=noninteractive

MAINTAINER gml "happylei2333@gmail.com"

COPY ./files/sources.list /etc/apt/sources.list
RUN \
        apt-get update && \
        apt-get install -y php-fpm && \
        apt-get install -y nginx && \
        apt-get install -y mysql-server && \
        apt-get install -yqq php-mysql && \
        apt-get install -y php-gd && \
        apt-get install -y php7.2-curl && \
        apt-get install -y php7.2-mbstring && \
        apt-get install -y vim && \
        apt-get install -y curl


COPY ./source /www
COPY ./files/default /etc/nginx/sites-available/default
COPY ./files/nginx.conf /etc/nginx/nginx.conf
COPY readflag /
COPY flag.txt /flag.txt
RUN chmod 555 /readflag && \
  chmod u+s /readflag && \
  chmod 500 /flag.txt

COPY ./files/start.sh ./files/ctf.sql /root/

RUN usermod -d /var/lib/mysql/ mysql
RUN \
        chown -R root:root /www/ && \
        chmod 755 -R /www/ && \
        chmod 777 -R /www/storage && \
        chmod 755 /root/start.sh && \
        chmod +x /root/start.sh

CMD ["bash","/root/start.sh"]
