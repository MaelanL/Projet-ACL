# ProjetACL
projet Belote de Jonathan, Pierre et Maelan

# Installation

## XAMPP

Télécharger xampp 8.2.4 : https://www.apachefriends.org/download.html
(tuto : https://www.youtube.com/watch?v=e6xpv83tC50&list=LL&index=2&t=322s)

## Composer

Installer composer : https://getcomposer.org/download/



## Mise en place du projet 

- Génerer projet laravel : composer create-project laravel/laravel acl-project

- Configuration de la bdd dans le fichier .env :
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=aclDB
DB_USERNAME=root
DB_PASSWORD=

- Installer react : php artisan ui react



# Commandes


php artisan serve

php artisan make:model ClassName -m

php artisan migrate

php artisan make:seeder TableNameSeeder
php artisan db:seed --class=TableNameSeeder
php artisan make:controller TableNameController