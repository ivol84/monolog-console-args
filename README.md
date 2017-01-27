monolog-cli-processor
============

Cli processor allows to log console command in Monolog.

Installation
------------
@XXX: Fix after adding to composer...

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