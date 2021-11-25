Magento Pre-installation Commands:

sudo apt install php7.4 libapache2-mod-php7.4 php7.4-common php7.4-gmp php7.4-curl php7.4-soap php7.4-bcmath php7.4-intl php7.4-mbstring php7.4-xmlrpc php7.4-mcrypt php7.4-mysql php7.4-gd php7.4-xml php7.4-cli php7.4-zip

Install MySQL & Create User and Database:
CREATE USER 'mysqlnewuser'@'localhost' IDENTIFIED BY 'mysqlnewuser@123';
GRANT ALL PRIVILEGES ON * . * TO 'mysqlnewuser'@'localhost';
FLUSH PRIVILEGES;
CREATE DATABASE cqcmagento;


Steps to install magento 243:
- https://www.mageplaza.com/devdocs/how-install-magento-2-ubuntu.html
- https://devdocs.magento.com/guides/v2.4/install-gde/prereq/prereq-overview.html


composer create-project --repository-url=https://repo.magento.com/ magento/project-community-edition=2.4.3 foldername


akash.nettyfy   
Public Key: asdfsaf 
Private Key: asdf 


https://devdocs.magento.com/guides/v2.4/install-gde/prereq/file-system-perms.html#perms-private


Download Project:
composer create-project --repository-url=https://repo.magento.com/ magento/project-enterprise-edition cqcm2

"username": "asdfsaf",
"password": "asdfsaf"


cd /var/www/html/cqcm2
find var generated vendor pub/static pub/media app/etc -type f -exec chmod g+w {} +
find var generated vendor pub/static pub/media app/etc -type d -exec chmod g+ws {} +
chown -R :www-data .
chmod u+x bin/magento


Change dir and file permission:
find . -type f -exec chmod 644 {} \;
find . -type d -exec chmod 755 {} \;
find ./var -type d -exec chmod 777 {} \;
find ./pub/media -type d -exec chmod 777 {} \;
find ./pub/static -type d -exec chmod 777 {} \;
chmod 777 ./app/etc
chmod 644 ./app/etc/*.xml
chown -R :www-data .
chmod u+x bin/magento



Install Command:
php bin/magento setup:install --base-url=http://cqcm2.com/ --db-host=localhost --db-name=cqcmagento --db-user=cqcm2 --db-password=cqcm2@123 --admin-firstname=admin --admin-lastname=nettyfy --admin-email=admin@gmail.com --admin-user=admin --admin-password=admin@123 --language=en_US --currency=USD --timezone=America/Chicago --use-rewrites=1

php bin/magento setup:install --base-url="http://127.0.0.1/mag242sample/" --db-host="localhost" --db-name="mag242sample" --db-user="root" --admin-firstname="admin" --admin-lastname="admin" --admin-email="admin@admin.com" --admin-user="admin" --admin-password="admin123" --language="en_US" --currency="INR" --timezone="America/Chicago" --use-rewrites="1" --backend-frontname="admin"


chmod 777 var/ pub/static pub/media/


sudo chown -R nettyfy:nettyfy /opt/lampp/htdocs
sudo chown -R nettyfy:nettyfy /etc/hosts


sudo chown -R newuser:oheruser /var/www/html

sudo chown -R root:newuser /var/www/html

sudo chown -R root:root /opt/lampp/htdocs

sudo /opt/lampp/lampp start

remove file
rm -rf lampp


sudo find lampp -type d -exec chmod 755 {} ";"
sudo find lampp -type f -exec chmod 644 {} ";"

_______________________________________________

mysql :

If ERROR 1045 (28000): Access denied for user 'admin'@'localhost' (using password: YES)

- CREATE USER admin@localhost IDENTIFIED BY 'admin@123';
- grant all privileges on *.* to admin@localhost with grant option;


mysql -u newuser -p
mysql -u root -p



sudo vim /etc/elasticsearch/elasticsearch.yml



sudo apt-get install php7.4-mysql


<VirtualHost *:80>
    ServerAdmin admin@domain.com
    DocumentRoot /var/www/html/cqcm2
    ServerName cqcm2.com
    ServerAlias www.cqcm2.com

    <Directory /var/www/html/cqcm2>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Order allow,deny
        allow from all
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

________________________________________

Install apache in ubuntu :

go to:
- https://www.digitalocean.com/community/tutorials/how-to-install-the-apache-web-server-on-ubuntu-18-04-quickstart

for sudo ufw status :  inactive 

sudo ufw enable
sudo ufw default deny

And I then do:

sudo iptables -L

If apache2: Could not open configuration file /etc/apache2/apache2.conf: No such file or directory Action 'stop' failed. :

sudo apt-get purge apache2 
sudo apt-get install apache2 





php composer.phar --working-dir=/var/www/html/ update


sudo apt-get install php7.4-gd php7.4-mcrypt php7.4-curl php7.4-intl php7.4-xsl php7.4-mbstring php7.4-openssl php7.4-zip php7.4-soap php7.4-bcmath

sudo apt install php7.4 libapache2-mod-php7.4 php7.4-common php7.4-gmp php7.4-curl php7.4-soap php7.4-bcmath php7.4-intl php7.4-mbstring php7.4-xmlrpc php7.4-mcrypt php7.4-mysql php7.4-gd php7.4-xml php7.4-cli php7.4-zip


php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
php bin/magento cache:flush
php bin/magento cache:clean
php bin/magento cache:status

php bin/magento indexer:reindex



create module :
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
php bin/magento cache:flush


Change in cunstruct :
php bin/magento setup:upgrade;php bin/magento setup:di:compile;php bin/magento setup:static-content:deploy -f;php bin/magento cache:clean;


php bin/magento module:disable Magento_TwoFactorAuth

____________

dbeaver:

sudo apt update
sudo snap install dbeaver-ce

____________

Development Notes :


You have to replace addAttributeToSelect('*') with addFieldToSelect('*')

addAttributeToFilter() is used to filter EAV collections.

addFieldToFilter() is used to filter Non-EAV collections.

____________

git config --global user.name XXXXXX
git config --global user.email XXXX@gmail.com




Git : username

git init
git config --list
git clone {}
git branch -a // list branch
git checkout branchname
git add -A
git commit -m 'my comments'
git push origin my-branch

git token : ghp_nXXXXXXXXXXXXXXXXxxxxxxxxxxxxxxfIn
