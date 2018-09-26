<?php

namespace Chetkov\ConsoleLogger;

/**
 * Class ConsoleWriter
 * @package Chetkov\ConsoleLogger
 */
class ConsoleWriter
{
    /**
     * @param string $message
     * @param bool $isLineBreak
     */
    public function write(string $message, bool $isLineBreak = true): void
    {
        echo $message . ($isLineBreak ? PHP_EOL : '');
    }
}
