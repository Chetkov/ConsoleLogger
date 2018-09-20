<?php

namespace Chetkov\ConsoleLogger\StyledLogger;

/**
 * Class LoggerStyle
 * @package Chetkov\ConsoleLogger\StyledLogger
 */
class LoggerStyle
{
    /**
     * @var LevelStyle
     */
    private $debugStyle;

    /**
     * @var LevelStyle
     */
    private $infoStyle;

    /**
     * @var LevelStyle
     */
    private $warningStyle;

    /**
     * @var LevelStyle
     */
    private $errorStyle;

    /**
     * @var LevelStyle
     */
    private $criticalStyle;

    public function __construct()
    {
        $this->debugStyle = new LevelStyle();
        $this->infoStyle = new LevelStyle(LevelStyle::COLOR_BLUE);
        $this->warningStyle = new LevelStyle(LevelStyle::COLOR_YELLOW);
        $this->errorStyle = new LevelStyle(LevelStyle::COLOR_RED);
        $this->criticalStyle = new LevelStyle(LevelStyle::COLOR_WHITE, LevelStyle::BACKGROUND_RED);
    }

    /**
     * @return LevelStyle
     */
    public function getDebugStyle(): LevelStyle
    {
        return $this->debugStyle;
    }

    /**
     * @param LevelStyle $debugStyle
     * @return LoggerStyle
     */
    public function setDebugStyle(LevelStyle $debugStyle): LoggerStyle
    {
        $this->debugStyle = $debugStyle;
        return $this;
    }

    /**
     * @return LevelStyle
     */
    public function getInfoStyle(): LevelStyle
    {
        return $this->infoStyle;
    }

    /**
     * @param LevelStyle $infoStyle
     * @return LoggerStyle
     */
    public function setInfoStyle(LevelStyle $infoStyle): LoggerStyle
    {
        $this->infoStyle = $infoStyle;
        return $this;
    }

    /**
     * @return LevelStyle
     */
    public function getWarningStyle(): LevelStyle
    {
        return $this->warningStyle;
    }

    /**
     * @param LevelStyle $warningStyle
     * @return LoggerStyle
     */
    public function setWarningStyle(LevelStyle $warningStyle): LoggerStyle
    {
        $this->warningStyle = $warningStyle;
        return $this;
    }

    /**
     * @return LevelStyle
     */
    public function getErrorStyle(): LevelStyle
    {
        return $this->errorStyle;
    }

    /**
     * @param LevelStyle $errorStyle
     * @return LoggerStyle
     */
    public function setErrorStyle(LevelStyle $errorStyle): LoggerStyle
    {
        $this->errorStyle = $errorStyle;
        return $this;
    }

    /**
     * @return LevelStyle
     */
    public function getCriticalStyle(): LevelStyle
    {
        return $this->criticalStyle;
    }

    /**
     * @param LevelStyle $criticalStyle
     * @return LoggerStyle
     */
    public function setCriticalStyle(LevelStyle $criticalStyle): LoggerStyle
    {
        $this->criticalStyle = $criticalStyle;
        return $this;
    }
}
