ssh root@sebastian-schleemilch.de 'rm -rf /var/www/html/*'
scp -rp dist/html root@sebastian-schleemilch.de:/var/www