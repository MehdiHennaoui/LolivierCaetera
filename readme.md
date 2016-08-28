# Site de L'olivier & Caetra #

### installation ###

* `git clone : https://github.com/MehdiHennaoui/LolivierCaetera.git`
* `cd LolivierCaetra`
* `composer install`
* `nmp install`
* `php artisan key:generate`
* Créer une base de données et un fichier *.env* sur l'exemple de *.env.example* et l'informer
* `php artisan migrate --seed' pour créer et remplir les tables`
* `gulp init`
* `php artisan serve` le site sera sur http://localhost:8000/ 

### Astuces ###

Pour accéder au coté administration du site tapé url http://localhost:8000/home

Les informations sur le compte admin sont disponible dans database/seeds/UsersTablesSeeder