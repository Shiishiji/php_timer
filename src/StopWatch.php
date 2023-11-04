<?php

namespace Shiishiji\Timer;

class StopWatch implements StopWatchInterface
{
    private string $start;
    private string $stop;

    public function __construct(bool $start = false)
    {
        if ($start) {
            $this->start();
        }
    }

    public function start(): void
    {
        $this->start = hrtime(as_number: true);
    }

    public function stop(): void
    {
        $this->stop = hrtime(as_number: true);
    }

    public function getDuration(): string
    {
        return $this->stop - $this->start;
    }
}