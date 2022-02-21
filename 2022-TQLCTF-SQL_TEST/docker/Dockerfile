FROM ubuntu:20.04

ENV DEBIAN_FRONTEND=noninteractive

MAINTAINER gmlsec "gmlsec@qq.com"

COPY ./files/sources.list /etc/apt/sources.list

RUN \
        apt update -y && \
        apt install -y php apache2 mysql-server vim curl gcc && \
        apt install -yqq php-mysql php-gd php-xml
    
COPY ./files/apache2.conf /etc/apache2/apache2.conf
COPY ./files/000-default.conf /etc/apache2/sites-enabled/000-default.conf
COPY ./files/readflag.c /
COPY ./flag /
COPY ./files/start/ /root/

RUN rm /var/www/html/* 
COPY ./html /var/www/html/

RUN \
        chown -R root:root /var/www/html/ && \
        chmod -R 755 /var/www/html && \
        chmod -R 777 /var/www/html/var/
RUN \
        chmod 755 /root/* && \
        chown root:root /flag && \
        chmod 600 /flag && \
        gcc /readflag.c -o /readflag && \
        chmod +s /readflag && \
        rm /readflag.c

CMD ["bash","/root/start.sh"]
EXPOSE 80




