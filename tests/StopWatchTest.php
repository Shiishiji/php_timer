<?php

use PHPUnit\Framework\TestCase;
use Shiishiji\Timer\StopWatch;

final class StopWatchTest extends TestCase
{
    private StopWatch $stopWatch;

    protected function setUp(): void
    {
        parent::setUp();

        $this->stopWatch = new StopWatch();
    }

    public function test(): void
    {
        $this->stopWatch->start();
        sleep(1);
        $this->stopWatch->stop();

        $result = $this->stopWatch->getDuration();

        self::assertIsString($result);
        self::assertIsInt((int)$result);
    }
}