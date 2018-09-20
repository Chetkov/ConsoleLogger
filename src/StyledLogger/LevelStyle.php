<?php

namespace Chetkov\ConsoleLogger\StyledLogger;

/**
 * Class LevelStyle
 * @package Chetkov\ConsoleLogger\StyledLogger
 */
class LevelStyle
{
    public const COLOR_BLACK = '0;30';
    public const COLOR_DARK_GRAY = '1;30';
    public const COLOR_BLUE = '0;34';
    public const COLOR_LIGHT_BLUE = '1;34';
    public const COLOR_GREEN = '0;32';
    public const COLOR_LIGHT_GREEN = '1;32';
    public const COLOR_CYAN = '0;36';
    public const COLOR_LIGHT_CYAN = '1;36';
    public const COLOR_RED = '0;31';
    public const COLOR_LIGHT_RED = '1;31';
    public const COLOR_PURPLE = '0;35';
    public const COLOR_LIGHT_PURPLE = '1;35';
    public const COLOR_BROWN = '0;33';
    public const COLOR_YELLOW = '1;33';
    public const COLOR_LIGHT_GRAY = '0;37';
    public const COLOR_WHITE = '1;37';

    public const BACKGROUND_BLACK = '40';
    public const BACKGROUND_RED = '41';
    public const BACKGROUND_GREEN = '42';
    public const BACKGROUND_YELLOW = '43';
    public const BACKGROUND_BLUE = '44';
    public const BACKGROUND_MAGENTA = '45';
    public const BACKGROUND_CYAN = '46';
    public const BACKGROUND_LIGHT_GRAY = '47';

    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */
    private $backgroundColor;

    /**
     * LevelStyle constructor.
     * @param string $color
     * @param string $backgroundColor
     */
    public function __construct(string $color = self::COLOR_WHITE, string $backgroundColor = self::BACKGROUND_BLACK)
    {
        $this->color = $color;
        $this->backgroundColor = $backgroundColor;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getBackgroundColor(): string
    {
        return $this->backgroundColor;
    }
}
