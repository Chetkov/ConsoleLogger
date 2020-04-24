<?php

namespace Chetkov\ConsoleLogger;

/**
 * Class ConsoleLogger
 * @package Chetkov\ConsoleLogger
 */
class ConsoleLogger implements Logger
{
    /**@var LoggerConfig */
    private $config;

    /** @var ConsoleWriter */
    private $consoleWriter;

    /**
     * ConsoleLogger constructor.
     * @param LoggerConfig $config
     * @param ConsoleWriter $consoleWriter
     */
    public function __construct(LoggerConfig $config, ConsoleWriter $consoleWriter)
    {
        $this->config = $config;
        $this->consoleWriter = $consoleWriter;
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
    public function log($level, $message, array $context = []): void
    {
        $messageParts = [];
        if ($this->config->isShowDateTime()) {
            $messageParts[] = date($this->config->getDateTimeFormat());
        }

        if ($this->config->isShowLevel()) {
            $messageParts[] = $level;
        }

        $messageParts[] = $message;

        if ($this->config->isShowData()) {
            $messageParts[] = json_encode($context);
        }

        $this->consoleWriter->write(implode($this->config->getFieldDelimiter(), $messageParts));
    }
}
