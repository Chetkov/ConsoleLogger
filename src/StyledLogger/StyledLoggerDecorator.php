<?php

namespace Chetkov\ConsoleLogger\StyledLogger;

use Chetkov\ConsoleLogger\Logger;
use Psr\Log\LoggerInterface;

/**
 * Class StyledLoggerDecorator
 * @package Chetkov\ConsoleLogger\StyledLogger
 */
class StyledLoggerDecorator implements Logger
{
    /** @var Logger */
    private $logger;

    /** @var LoggerStyle */
    private $loggerStyle;

    /**
     * StyledLoggerDecorator constructor.
     * @param LoggerInterface $logger
     * @param LoggerStyle $loggerStyle
     */
    public function __construct(LoggerInterface $logger, LoggerStyle $loggerStyle)
    {
        $this->logger = $logger;
        $this->loggerStyle = $loggerStyle;
    }

    /**
     * @inheritDoc
     */
    public function emergency($message, array $context = []): void
    {
        $this->log(self::LEVEL_EMERGENCY, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function alert($message, array $context = []): void
    {
        $this->log(self::LEVEL_ALERT, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function critical($message, array $context = []): void
    {
        $this->log(self::LEVEL_CRITICAL, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function error($message, array $context = []): void
    {
        $this->log(self::LEVEL_ERROR, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function warning($message, array $context = []): void
    {
        $this->log(self::LEVEL_WARNING, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function notice($message, array $context = []): void
    {
        $this->log(self::LEVEL_NOTICE, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function info($message, array $context = []): void
    {
        $this->log(self::LEVEL_INFO, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function debug($message, array $context = []): void
    {
        $this->log(self::LEVEL_DEBUG, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function log($level, $message, array $context = array()): void
    {
        $this->logger->log($level, $this->styleMessage($level, $message), $context);
    }

    /**
     * @param string $level
     * @param string $message
     * @return string
     */
    private function styleMessage(string $level, string $message): string
    {
        switch ($level) {
            case self::LEVEL_EMERGENCY:
                $levelStyle = $this->loggerStyle->getEmergencyStyle();
                break;
            case self::LEVEL_ALERT:
                $levelStyle = $this->loggerStyle->getAlertStyle();
                break;
            case self::LEVEL_CRITICAL:
                $levelStyle = $this->loggerStyle->getCriticalStyle();
                break;
            case self::LEVEL_ERROR:
                $levelStyle = $this->loggerStyle->getErrorStyle();
                break;
            case self::LEVEL_WARNING:
                $levelStyle = $this->loggerStyle->getWarningStyle();
                break;
            case self::LEVEL_NOTICE:
                $levelStyle = $this->loggerStyle->getNoticeStyle();
                break;
            case self::LEVEL_INFO:
                $levelStyle = $this->loggerStyle->getInfoStyle();
                break;
            case self::LEVEL_DEBUG:
                $levelStyle = $this->loggerStyle->getDebugStyle();
                break;
            default:
                $levelStyle = new LevelStyle();
        }

        return "\033[" . $levelStyle->getFontStyle() . 'm' . "\033[" . $levelStyle->getBackgroundStyle() . 'm' . $message . "\033[0m";
    }
}
