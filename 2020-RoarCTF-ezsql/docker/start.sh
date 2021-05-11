#!/bin/bash
sleep 1
service apache2 start
find /var/lib/mysql -type f -exec touch {} \; && service mysql start

flagfile=/var/www/html/ctf.sql
if [ -f $flagfile ]; then
    sed -i "s/flag{test}/$(cat /root/flag.txt)/" $flagfile
    mysqladmin -u root password "gmmml123456"
    mysql -uroot -pgmmml123456 < $flagfile
    rm -f $flagfile
fi
/bin/bash