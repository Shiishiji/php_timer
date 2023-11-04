<?php

namespace Shiishiji\Timer;
interface StopWatchInterface
{
    public function start(): void;

    public function stop(): void;

    public function getDuration(): string;
}