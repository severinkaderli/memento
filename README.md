## memento
### What is memento?
memento is a flashcard application for the web. It was designed with mobile devices in mind.
That way you can learn your cards where-ever you are. memento was created with the PHP-Framework
[Laravel](http://laravel.com/). The frontend was done with the help
from [Material Design Lite](https://github.com/google/material-design-lite) by Google.</p>

**Info:** memento is not developed actively anymore. This was just a first project for me to get started with Laravel.

The current version of memento can be accessed via the following link: ~~http://memento.severinkaderli.ch~~

### Current Features
* Login and registering of new users
* Creation, editing and deleting of cardpacks
* Creation and deleting of cards
* CSV-Import and CSV-Export for cards
* Card-learning

###TODO
* Using bower for libraries
* Using a gulp file to minimize everything
* Updating dependencies

### Install instructions
* git clone
* composer install
* php artisan migrate
* Copy.env.example to .env
* bower install
* npm install
* gulp build
