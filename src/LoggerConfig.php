<?php

namespace Chetkov\ConsoleLogger;

/**
 * Class LoggerConfig
 * @package Chetkov\ConsoleLogger
 */
class LoggerConfig
{
    /**
     * @var bool
     */
    private $isShowDateTime;

    /**
     * @var string
     */
    private $dateTimeFormat;

    /**
     * @var bool
     */
    private $isShowLevel;

    /**
     * @var bool
     */
    private $isShowData;

    /**
     * @var string
     */
    private $fieldDelimiter;

    /**
     * Config constructor.
     */
    public function __construct()
    {
        $this->isShowDateTime = true;
        $this->dateTimeFormat = 'H:i:s';
        $this->isShowLevel = true;
        $this->isShowData = true;
        $this->fieldDelimiter = ' :: ';
    }

    /**
     * @return bool
     */
    public function isShowDateTime(): bool
    {
        return $this->isShowDateTime;
    }

    /**
     * @param bool $isShowDateTime
     * @return LoggerConfig
     */
    public function setIsShowDateTime(bool $isShowDateTime): LoggerConfig
    {
        $this->isShowDateTime = $isShowDateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateTimeFormat(): string
    {
        return $this->dateTimeFormat;
    }

    /**
     * @param string $dateTimeFormat
     * @return LoggerConfig
     */
    public function setDateTimeFormat(string $dateTimeFormat): LoggerConfig
    {
        $this->dateTimeFormat = $dateTimeFormat;
        return $this;
    }

    /**
     * @return bool
     */
    public function isShowLevel(): bool
    {
        return $this->isShowLevel;
    }

    /**
     * @param bool $isShowLevel
     * @return LoggerConfig
     */
    public function setIsShowLevel(bool $isShowLevel): LoggerConfig
    {
        $this->isShowLevel = $isShowLevel;
        return $this;
    }

    /**
     * @return bool
     */
    public function isShowData(): bool
    {
        return $this->isShowData;
    }

    /**
     * @param bool $isShowData
     * @return LoggerConfig
     */
    public function setIsShowData(bool $isShowData): LoggerConfig
    {
        $this->isShowData = $isShowData;
        return $this;
    }

    /**
     * @return string
     */
    public function getFieldDelimiter(): string
    {
        return $this->fieldDelimiter;
    }

    /**
     * @param string $fieldDelimiter
     * @return LoggerConfig
     */
    public function setFieldDelimiter(string $fieldDelimiter): LoggerConfig
    {
        $this->fieldDelimiter = $fieldDelimiter;
        return $this;
    }
}
