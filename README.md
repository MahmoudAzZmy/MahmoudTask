### to run this project

1 - run this commands

-   `composer update`
-   `cp .env.example .env` => to copy .env.example file
-   `php artisan make:command initializeProject` => to Generate APP_KEY & JWT_SECRET at .env

2 - update .env file with your database table
3 - run command `php artisan run:initialize-database`
=> this command will create all tables and will seed all seeders from all modules

4 - to serve project run command `php artisan serve`
5 - go to route `/dash` and login with email='test@test.com' & password='123456'

###

if you add new Module with seeder you can add the command to run all seeders & migrations at one time go to => App\Console\Commands\initializeDatabase then add command that you want to run in commands list 
