# Requirements
- require minimum PHP 7.2 
- require minimum MySQL 5.6 
- Composer Packge manager 

# Installation
- Go to the root directry and run `composer install`
- Open the `.env` file and setup DB Access details.
- once the setup is done, run `php artisan migrate`
- after that run `php artisan db:seed`

- to run the app, use `php artisan serve`