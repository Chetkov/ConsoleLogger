<?php

namespace Chetkov\ConsoleLogger;

/**
 * Class ConsoleLogger
 * @package Chetkov\ConsoleLogger
 */
class ConsoleLogger implements Logger
{
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
        $currentDateTime = new \DateTime();
        echo implode(' :: ', [
            $currentDateTime->format('Y-m-d H:i:s'),
            $level,
            trim($message),
            json_encode($data)
        ]) . PHP_EOL;
    }
}
