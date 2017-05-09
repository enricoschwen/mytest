#!/bin/bash

rm -rf ./vendor/
rm -rf ./composer.lock
composer clear-cache
composer validate
composer install
composer dumpautoload --no-ansi --no-dev --no-interaction --no-scripts -o