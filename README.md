monolog-cli-processor
============
![Build Status](https://travis-ci.org/ivol84/monolog-console-args.svg?branch=master)

Cli processor allows to log console command in Monolog.

Installation
------------
Add library to your [Composer](https://getcomposer.org/doc/00-intro.md) project:
```bash
composer require ivol/monolog-cli-processor
```

Usage
-----

```
<php>
// Autoload here
use Monolog\Logger;
use ivol\Monolog\Processor\CliProcessor;

$handlers = []; // Add handlers
$logger = new Logger('Logger_Name', $handlers, [new CliProcessor()]);
</php>
```
After that all log records in cli mode will be updated with extra cli arg. 

License
-------

exec-wrapper is released under the MIT License.