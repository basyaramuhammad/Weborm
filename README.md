Weborm Laravel

Installation
Clone the repo:

git clone https://github.com/rehmatworks/stisla-laravel.git
Install composer packages:

composer update
Copy and rename .env.example to .env, update the environmental variables and set an app key:

php artisan key:generate
After that, run all migrations and seed the database:

php artisan migrate
php artisan db:seed
Or if your database is fresh and you haven't done any work yet, then it's safe to call the commands in a single line:

php artisan migrate:refresh --seed
