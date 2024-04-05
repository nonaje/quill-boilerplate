# Disclaimer
**This is a development version of the Framework, use at your own risk.**

# Quill Framework Boilerplate

Please check the [Quill Framework documentation](https://www.docker.com/get-started/)
to know more about the features it offers and how to use it.

## Installation
The recommended way to use Quill is with
[Docker](https://www.docker.com/get-started/), but you also can run it using [PHP](https://www.php.net/)
and [Composer](https://getcomposer.org/) installed in your machine.

### Instructions

To install it without a local PHP/Composer installation, you will need to have 
[Docker](https://www.docker.com/get-started/) installed.

Replace {APP_NAME} by your preference.
> **RUN** `git clone git@github.com:nonaje/quill-boilerplate.git {APP_NAME}`

> **RUN** `cd {APP_NAME}`

> **RUN** `docker-compose up -d --build`

> **RUN** `docker-compose exec php bash`

> **RUN** `composer i`

To Install it with a local PHP/Composer installation.

Replace {APP_NAME} by your preference.
> **RUN** `composer create-project nonaje/quill {APP_NAME}`

> **RUN** `composer dev`

## Directory composition

### /public
Inside this folder is the entry point for your application (`/public/index.php`).

You can indicate where your application's routes are, your new configuration files,
define the global middlewares that you want your application to use and more
(detailed in the [Quill Framework documentation](https://www.docker.com/get-started/)).

### /app
Inside this folder all your main application files should be placed such as Http Controllers, Middlewares, Services,
Repositories, Interfaces, Domain Logic Classes, etc. You can organize your project however you want.

It's the folder when the magic happens.

### /routes
Inside this folder all your application routes files should be placed.
Sounds pretty obvious right?.

Make sure all files inside the routes folder are PHP scripts that return a function that receives the
interface `Quill\Contracts\Router\RouterInterface`.

After creating a new route file, you must indicate it in the `/public/index.php` file. 

### /config
Inside this folder all your application configuration files should be placed, not much more to say.

Make sure all files inside the config folder are PHP scripts that return an array.

After creating a new config file, you must indicate it in the `/public/index.php` file.

### /docker
All the [Docker](https://www.docker.com/get-started/) related files. 

Feel free to expand/modify it based on your needs.
