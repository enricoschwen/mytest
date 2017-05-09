#!/bin/bash

composer clear-cache
composer validate
composer update
composer dumpautoload --no-ansi --no-dev --no-interaction --no-scripts -o