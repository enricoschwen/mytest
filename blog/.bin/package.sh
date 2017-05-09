#!/bin/bash

composer update --lock --no-ansi --no-dev --no-interaction --no-progress --no-scripts
composer install --no-ansi --no-dev --no-interaction --no-progress --no-scripts --optimize-autoloader
composer dumpautoload --no-ansi --no-dev --no-interaction --no-scripts -o