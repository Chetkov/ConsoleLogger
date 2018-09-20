<?php

namespace Chetkov\ConsoleLogger;

/**
 * Interface Logger
 * @package Chetkov\ConsoleLogger
 */
interface Logger
{
    public const LEVEL_DEBUG = 'DEBUG';
    public const LEVEL_INFO = 'INFO';
    public const LEVEL_WARNING = 'WARNING';
    public const LEVEL_ERROR = 'ERROR';
    public const LEVEL_CRITICAL = 'CRITICAL';

    /**
     * @param string $message
     * @param array $data
     */
    public function debug(string $message, array $data = []): void;

    /**
     * @param string $message
     * @param array $data
     */
    public function info(string $message, array $data = []): void;

    /**
     * @param string $message
     * @param array $data
     */
    public function warning(string $message, array $data = []): void;

    /**
     * @param string $message
     * @param array $data
     */
    public function error(string $message, array $data = []): void;

    /**
     * @param string $message
     * @param array $data
     */
    public function critical(string $message, array $data = []): void;
}