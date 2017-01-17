# Installation

## Using Docker

Below command will build the image from `Dockerfile` and start the Zend Server (app) container  and the Database (db) container. It will mount the `./src` directory inside the app container and link the db container.
```
docker-compose up
```

After successful run, your application (from `./src`) will be available at: http://localhost:8080/.

# App container

After `docker-compose up`, your Zend Server UI will be available at: http://localhost:18081/, with admin/admin default creditentials.

## Components

* Zend Server 9 with Z-Ray (PHP debugging tool)
* `composer` installed
* `laravel` CLI installed
* `php artisan` installed
