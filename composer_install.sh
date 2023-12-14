#!/bin/bash

docker run \
  -v $(pwd):/var/www \
  -w /var/www \
  --rm \
  hyperf/hyperf:8.2-alpine-v3.18-swoole \
  sh -c 'composer install && sh'