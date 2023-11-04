# Timer

Timer is a PHP library for dealing with precise time measurements.

## Installation

Use the package manager [composer](https://getcomposer.org) to install Timer.

```bash
composer require shiishiji/timer
```

## Usage

The usage is really straight forward.
Firstly, create an instance of StopWatch class.

```php
$timer = new StopWatch();
```

Secondly, use `start()` method to begin measurement.
Use `stop()` to end measurement.
Lastly `getDuration()` returns string representing measured time in nanoseconds.

```php
$timer->start();
sleep(1); // perform action to be measured
$timer->stop();

$result = $timer->getDuration();
var_dump($result); // prints something like -> string(10) "1000273951"
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

## License

[MIT](https://choosealicense.com/licenses/mit/)
