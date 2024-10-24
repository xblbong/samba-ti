# HMPSTIUB

# Requirement
- Php Version > 8.1
- Node JS

# How To Setup
- First you need to duplicate the .env.example file after that you must rename the .env.example to .env
- Second after you rename the .env file you must configure with the database on env file like this
  -DB_CONNECTION=mysql
  -DB_HOST=127.0.0.1
  -DB_PORT=3306
  -DB_DATABASE=hmpstis // its up to you to name the database
  -DB_USERNAME=root
  -DB_PASSWORD=
- Third, you have to create a new database with a database name according to your configuration in .env file

- composer install
- npm install
- php artisan key:generate
- php artisan migrate
- php artisan db:seed

# How to run
- npm run dev
- php artisan serve
