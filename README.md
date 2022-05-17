Etape pour lancer le projet :

1. cloner le repo :
    https://github.com/GuillaumeMORERO/TRAVEL_AGENCY.git

2. changer le .env_exemple en .env

3. composer install

4. créer une BDD et configurer le .env

5. migrate :
    php artisan migrate

6. seed :
    php artisan db:seed --class=VoyageSeeder
puis
    php artisan db:seed --class=EtapeSeeder

7. Enjoy !
