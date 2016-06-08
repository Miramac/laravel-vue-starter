# Laravel Vue Starter
> Boilerplate to create a new laravel website with vue and bootstrap.

# Available frontend libraries
* Vue.js
  * vue-router
  * vue-resource
  * vue-strap
* CSS
  * bootstrap 3
  * font-awesome

# Install and run
Clone the repo and install dependencies
````ssh
git clone https://github.com/Miramac/laravel-vue-starter.git
cd laravel-vue-starter
````
Install PHP Packages
````ssh
composer install
````
Install NPM Pagages
````ssh
npm install
````
Run gulp (has to be installed globally ``npm install gulp-cli -g``)
````ssh
gulp
````
Generate a new app key
````ssh
php artisan key:generate
````
# Development
To create a new new build just run ``gulp``.
If you run the gulp watch task (``gulp watch``), browsersync will be available. You probably havt to change the proxy option in the gulp file!

# Project directory structure
By default, the common laravel directory structure is used. 

The new Javascript file is:  ``resources/assets/js/app.js``. Here all routes and root components are defined. 
The place for the Vue.js components in: ``resources/assets/js/components/``

The only defined route in laravel is '/' to the blade file ``default.blade.php`` All other laravel routes are API routes.

(Right now the user authentication module is using laravel routes and blade views, need to be changed...)
