Installation
Clone the repo:
```shell
git clone https://github.com/basyaramuhammad/Weborm.git
```
Install composer packages:
```shell
composer update
```

Copy and rename .env.example to .env, update the environmental variables and set an app key:
```shell
php artisan key:generate
```

After that, run all migrations and seed the database:
```shell
php artisan migrate
```
```shell
php artisan db:seed
```

Or if your database is fresh and you haven't done any work yet, then it's safe to call the commands in a single line:
```shell
php artisan migrate:refresh --seed
```
#### Demo Admin Login
*  Email: admin@example.com
*  Password: 1234

#### Demo Editor Login
*  Email: editor@example.com
*  Password: 1234

Thanks to https://github.com/stisla/stisla

#### Demo User Login
*  Email: user@example.com
*  Password: 1234

-------------------------------------------------------------------------Thanks to https://github.com/stisla/stisla--------------------------------------------------------------
