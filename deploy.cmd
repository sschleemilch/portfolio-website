ssh root@sebastian-schleemilch.de 'rm -rf /var/www/html/* && chown www-data:www-data /var/www/*'
scp -rp dist/html root@sebastian-schleemilch.de:/var/www
ssh root@sebastian-schleemilch.de '/etc/init.d/apache2 restart'