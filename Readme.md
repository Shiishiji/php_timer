# Timer

Timer is a PHP library for dealing with precise time measurements.

## Installation

Use the package manager [composer](https://getcomposer.org) to install Timer.

```bash
composer install shiishiji/php_timer
```

## Development

First, build image

```bash
docker build -t php_timer .
```

To run tests use docker

```bash
docker run --rm -it php_timer vendor/bin/phpunit tests
```
