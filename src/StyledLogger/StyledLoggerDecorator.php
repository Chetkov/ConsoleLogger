<?php

namespace Chetkov\ConsoleLogger\StyledLogger;

use Chetkov\ConsoleLogger\Logger;

/**
 * Class StyledLoggerDecorator
 * @package Chetkov\ConsoleLogger\StyledLogger
 */
class StyledLoggerDecorator implements Logger
{
    /**
     * @var Logger
     */
    private $logger;

    /**
     * @var LoggerStyle
     */
    private $loggerStyle;

    /**
     * StyledLoggerDecorator constructor.
     * @param Logger $logger
     * @param LoggerStyle $loggerStyle
     */
    public function __construct(Logger $logger, LoggerStyle $loggerStyle)
    {
        $this->logger = $logger;
        $this->loggerStyle = $loggerStyle;
    }

    /**
     * @param string $message
     * @param array $data
     */
    public function debug(string $message, array $data = []): void
    {
        $this->logger->debug($this->messageStyle($message, $this->loggerStyle->getDebugStyle()), $data);
    }

    /**
     * @param string $message
     * @param array $data
     */
    public function info(string $message, array $data = []): void
    {
        $this->logger->info($this->messageStyle($message, $this->loggerStyle->getInfoStyle()), $data);
    }

    /**
     * @param string $message
     * @param array $data
     */
    public function warning(string $message, array $data = []): void
    {
        $this->logger->warning($this->messageStyle($message, $this->loggerStyle->getWarningStyle()), $data);
    }

    /**
     * @param string $message
     * @param array $data
     */
    public function error(string $message, array $data = []): void
    {
        $this->logger->error($this->messageStyle($message, $this->loggerStyle->getErrorStyle()), $data);
    }

    /**
     * @param string $message
     * @param array $data
     */
    public function critical(string $message, array $data = []): void
    {
        $this->logger->critical($this->messageStyle($message, $this->loggerStyle->getCriticalStyle()), $data);
    }

    /**
     * @param string $message
     * @param LevelStyle $levelStyle
     * @return string
     */
    private function messageStyle(string $message, LevelStyle $levelStyle): string
    {
        return "\033[" . $levelStyle->getColor() . 'm' . "\033[" . $levelStyle->getBackgroundColor() . 'm' . $message . "\033[0m";
    }
}
