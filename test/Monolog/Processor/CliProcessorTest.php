<?php
namespace ivol\tests\Monolog\Processor;

use ivol\Monolog\Processor\CliProcessor;
use Monolog\Handler\TestHandler;
use Monolog\Logger;

class CliProcessorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function logWithProcessor()
    {
        $handler = new TestHandler();
        $log = new Logger('test', [$handler], [new CliProcessor()]);

        $log->alert("Ha-ha");

        $records = $handler->getRecords();
        $this->assertCount(1, $records);
        $this->assertEquals($_SERVER['argv'][0], $records[0]['extra']['cli']);
    }
}