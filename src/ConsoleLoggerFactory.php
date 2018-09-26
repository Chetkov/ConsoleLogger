<?php

namespace Chetkov\ConsoleLogger;

/**
 * Class ConsoleLoggerFactory
 * @package Chetkov\ConsoleLogger
 */
class ConsoleLoggerFactory
{
    /**
     * @param LoggerConfig|null $config
     * @return ConsoleLogger
     */
    public static function create(LoggerConfig $config = null): ConsoleLogger
    {
        $config = $config ?? new LoggerConfig();
        $consoleWriter = new ConsoleWriter();
        return new ConsoleLogger($config, $consoleWriter);
    }
}
