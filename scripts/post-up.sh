#!/bin/bash

echo running post install scripts for the app server;
cd /var/www/html

# run npm install if there is not node_modules directory
if [ ! -d "node_modules" ]; then
    npm install
fi

# composer self-update
# composer update
# nginx
