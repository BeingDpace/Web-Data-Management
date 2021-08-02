# WEB DATA MANAGEMENT
***

## PHASE 5:
***
* HTML 5
* CSS 
* Wordpress
* PHP
* Node.JS
* MYSQL
* Laravel 8.0

## [INSTALLATION REQUIRED]
***
 * PHP 7.x (https://www.php.net/manual/en/install.php)
 * Composer (https://getcomposer.org/download/)
 * XAMPP(https://www.apachefriends.org/download.html)
 * Laravel 8.0
 * Node.js
 * MySQl

From the root folder, run these commands to initialize the database:

    php artisan migrate:fresh
    php artisan db:seed

Also, in order to enable uploaded files, use this command to create a storage link in Laravel:

    php artisan storage:link

Then start a local web server using:

    php artisan serve

To view and edit the database using XAMPP:

    open XAMPP Control Panel
    click Start on Apache Module
    click Start on MySQL Module

### Chat Installation

Make sure you have node.js installed on your system, and then run npm install within your project folder.

 * run `npm install websocket`
 * create a chat database locally, and update /public/chat/db.php with the database credentials
 * run `node node/server.js` to start the server

## USAGE:
***
* All the pages developed using PHP core is migrated to Laravel MVC model.
### Some Useful Commands:
* composer global require laravel/installer
* laravel new example-app (creates new project example-app)
* cd example-app (change directory to that project)
* laravel database migration: php artisan make:migration create_laravel_table
* php artisan make:model Country -rc (to make model, view, controller of countries.blade.php file) - similar for others.
* php artisan route:list (to see available methods and routes for controller)
* php artisan serve (to host in local server)
