#!/bin/bash

php artisan queue:work --daemon > queue.log 2>&1 &
