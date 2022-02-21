#!/bin/bash

flagfile=/root/flag.txt
if [ -f $flagfile ]; then
    mv $flagfile /flag
fi

if [ `grep -c 'secure_file_priv' /etc/mysql/my.cnf` -eq '0' ]; then
    dir=`openssl rand -hex 16` 
    mkdir /tmp/$dir && chmod 777 /tmp/$dir
    sed -i "s/secret/$dir/g" /root/dir.sh
    echo "[mysqld]" >> /etc/mysql/my.cnf
    echo "secure_file_priv='/tmp/$dir'" >> /etc/mysql/my.cnf
    dir=
fi    

secret=`openssl rand -hex 16`
sed -i -E "s/^APP_SECRET=.{32}$/APP_SECRET=$secret/" /var/www/html/.env

/root/dir.sh > /dev/null 2>&1 &
find /var/lib/mysql -type f -exec touch {} \; && service mysql start

if [[ -f /root/ctf.sql ]]; then
    mysqladmin -u root password "gmlsec123456"
    mysql -e "source /root/ctf.sql" -uroot -pgmlsec123456
    rm -f /root/ctf.sql
fi

service apache2 start
tail -f /var/log/apache2/access.log
