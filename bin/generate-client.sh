#!/usr/bin/env sh

swagger-codegen generate -i https://comments.reynrick.com/api-docs -l php -c config.json
composer update
