#!/bin/bash
chown -R root:root /www/ && chmod 755 -R /www/ && chmod 777 -R /www/storage && chmod 777 -R /www/public/upload/
# chattr +a /www/storage/logs
# chattr +a /www/storage/framework/sessions

flagfile=/root/flag.txt
if [ -f $flagfile ]; then
    mv $flagfile /flag.txt
fi
chmod 555 /readflag && chmod u+s /readflag && chmod 500 /flag.txt

/etc/init.d/php7.2-fpm start

find /var/lib/mysql -type f -exec touch {} \; && service mysql start

if [[ -f /root/ctf.sql ]]; then
    mysqladmin -u root password "gmlsec123456"
    mysql -e "source /root/ctf.sql" -uroot -pgmlsec123456
    rm -f /root/ctf.sql
fi

service nginx start
tail -f /var/log/nginx/access.log
