<?php
namespace ivol\Monolog\Processor;

/**
 * Allows to log console command
 */
class CliProcessor
{
    function __invoke(array $record)
    {
        if (php_sapi_name() == "cli") {
            $record['extra']['cli'] = $_SERVER['argv'][0];
        }
        return $record;
    }
}