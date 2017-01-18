# Installation

## Using Docker

Below command will build the image from `Dockerfile` and start the Zend Server (app) container  and the Database (db) container. It will mount the `./src` directory inside the app container and link the db container.
```
docker-compose up
```

After successful run, your application (from `./src`) will be available at: http://localhost:8080/.

# Development

To fully use the development environment provided with Laravel and Zend Server, you need to install Nodejs dependecies, by loggin into the docker container

```
docker exec -ti web_app bash
```

And running `npm install` in `/var/www/html`.

Run `./node_modules/.bin/gulp watch` - to make gulp watch for changes in your assets and run its tasks automatically.

## Building

To build and prepare your assets for production, use Gulp, that is bundled with Laravel skeleton apps. Gulp will be only available after performing the previous step of installing dependecies

```
./node_modules/.bin/gulp
```

For production

```
./node_modules/.bin/gulp --production
```

# App container

After `docker-compose up`, your Zend Server UI will be available at: http://localhost:18081/, with admin/admin default creditentials.

## Components

* Zend Server 9 with Z-Ray (PHP debugging tool)
* `composer` installed
* `laravel` CLI installed
* `php artisan` installed
* `node` Node.js v. v6.9.4
* `npm` v. 3.10.10

## Configuration

To use Z-Ray, you need to naviage to http://localhost:18081/ZendServer/#!/zray/settings/advanced and set the `Z-Ray URL` to `http://localhost:18081/ZendServer`
