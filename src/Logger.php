<?php

namespace Chetkov\ConsoleLogger;

use Psr\Log\LoggerInterface;

/**
 * Interface Logger
 * @package Chetkov\ConsoleLogger
 */
interface Logger extends LoggerInterface
{
    public const LEVEL_EMERGENCY = 'EMERGENCY';
    public const LEVEL_ALERT = 'ALERT';
    public const LEVEL_CRITICAL = 'CRITICAL';
    public const LEVEL_ERROR = 'ERROR';
    public const LEVEL_WARNING = 'WARNING';
    public const LEVEL_NOTICE = 'NOTICE';
    public const LEVEL_INFO = 'INFO';
    public const LEVEL_DEBUG = 'DEBUG';
}
