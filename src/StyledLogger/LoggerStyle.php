<?php

namespace Chetkov\ConsoleLogger\StyledLogger;

/**
 * Class LoggerStyle
 * @package Chetkov\ConsoleLogger\StyledLogger
 */
class LoggerStyle
{
    /** @var LevelStyle */
    private $emergencyStyle;

    /** @var LevelStyle */
    private $alertStyle;

    /** @var LevelStyle */
    private $criticalStyle;

    /** @var LevelStyle */
    private $errorStyle;

    /** @var LevelStyle */
    private $warningStyle;

    /** @var LevelStyle */
    private $noticeStyle;

    /** @var LevelStyle */
    private $infoStyle;

    /** @var LevelStyle */
    private $debugStyle;

    /**
     * LoggerStyle constructor.
     */
    public function __construct()
    {
        $this->emergencyStyle = new LevelStyle(LevelStyle::COLOR_YELLOW, LevelStyle::BACKGROUND_RED, [LevelStyle::MODE_BOLD]);
        $this->alertStyle = new LevelStyle(LevelStyle::COLOR_WHITE, LevelStyle::BACKGROUND_YELLOW);
        $this->criticalStyle = new LevelStyle(LevelStyle::COLOR_WHITE, LevelStyle::BACKGROUND_RED, [LevelStyle::MODE_BOLD]);
        $this->errorStyle = new LevelStyle(LevelStyle::COLOR_RED);
        $this->warningStyle = new LevelStyle(LevelStyle::COLOR_YELLOW);
        $this->noticeStyle = new LevelStyle(LevelStyle::COLOR_CYAN);
        $this->infoStyle = new LevelStyle(LevelStyle::COLOR_BLUE);
        $this->debugStyle = new LevelStyle(LevelStyle::COLOR_WHITE);
    }

    /**
     * @return LevelStyle
     */
    public function getEmergencyStyle(): LevelStyle
    {
        return $this->emergencyStyle;
    }

    /**
     * @param LevelStyle $emergencyStyle
     * @return LoggerStyle
     */
    public function setEmergencyStyle(LevelStyle $emergencyStyle): LoggerStyle
    {
        $this->emergencyStyle = $emergencyStyle;
        return $this;
    }

    /**
     * @return LevelStyle
     */
    public function getAlertStyle(): LevelStyle
    {
        return $this->alertStyle;
    }

    /**
     * @param LevelStyle $alertStyle
     * @return LoggerStyle
     */
    public function setAlertStyle(LevelStyle $alertStyle): LoggerStyle
    {
        $this->alertStyle = $alertStyle;
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
    public function getNoticeStyle(): LevelStyle
    {
        return $this->noticeStyle;
    }

    /**
     * @param LevelStyle $noticeStyle
     * @return LoggerStyle
     */
    public function setNoticeStyle(LevelStyle $noticeStyle): LoggerStyle
    {
        $this->noticeStyle = $noticeStyle;
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
}
