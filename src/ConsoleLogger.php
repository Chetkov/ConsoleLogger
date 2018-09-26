<?php

namespace Chetkov\ConsoleLogger;

/**
 * Class ConsoleLogger
 * @package Chetkov\ConsoleLogger
 */
class ConsoleLogger implements Logger
{
    /**
     * @var LoggerConfig
     */
    private $config;

    /**
     * @var ConsoleWriter
     */
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
     * @param string $message
     * @param array $data
     */
    public function debug(string $message, array $data = []): void
    {
        $this->log(self::LEVEL_DEBUG, $message, $data);
    }

    /**
     * @param string $message
     * @param array $data
     */
    public function info(string $message, array $data = []): void
    {
        $this->log(self::LEVEL_INFO, $message, $data);
    }

    /**
     * @param string $message
     * @param array $data
     */
    public function warning(string $message, array $data = []): void
    {
        $this->log(self::LEVEL_WARNING, $message, $data);
    }

    /**
     * @param string $message
     * @param array $data
     */
    public function error(string $message, array $data = []): void
    {
        $this->log(self::LEVEL_ERROR, $message, $data);
    }

    /**
     * @param string $message
     * @param array $data
     */
    public function critical(string $message, array $data = []): void
    {
        $this->log(self::LEVEL_CRITICAL, $message, $data);
    }

    /**
     * @param string $level
     * @param string $message
     * @param array $data
     */
    private function log(string $level, string $message, array $data = []): void
    {
        $messageParts = [];
        if ($this->config->isShowDateTime()) {
            $currentDateTime = new \DateTime();
            $messageParts[] = $currentDateTime->format($this->config->getDateTimeFormat());
        }

        if ($this->config->isShowLevel()) {
            $messageParts[] = $level;
        }

        $messageParts[] = $message;

        if ($this->config->isShowData()) {
            $messageParts[] = json_encode($data);
        }

        $this->consoleWriter->write(implode($this->config->getFieldDelimiter(), $messageParts));
    }
}
