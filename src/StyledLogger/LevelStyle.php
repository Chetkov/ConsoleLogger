<?php

namespace Chetkov\ConsoleLogger\StyledLogger;

/**
 * Class LevelStyle
 * @package Chetkov\ConsoleLogger\StyledLogger
 */
class LevelStyle
{
    public const MODE_NORMAL = '0';
    public const MODE_BOLD = '1';
    public const MODE_UNDERLINED = '4';
    public const MODE_FLASHING = '5';
    public const MODE_INVERTED = '7';
    public const MODE_INVISIBLE = '8';

    public const COLOR_BLACK = '30';
    public const COLOR_RED = '31';
    public const COLOR_GREEN = '32';
    public const COLOR_YELLOW = '33';
    public const COLOR_BLUE = '34';
    public const COLOR_PURPLE = '35';
    public const COLOR_CYAN = '36';
    public const COLOR_WHITE = '37';

    public const BACKGROUND_BLACK = '40';
    public const BACKGROUND_RED = '41';
    public const BACKGROUND_GREEN = '42';
    public const BACKGROUND_YELLOW = '43';
    public const BACKGROUND_BLUE = '44';
    public const BACKGROUND_PURPLE = '45';
    public const BACKGROUND_CYAN = '46';
    public const BACKGROUND_WHITE = '47';

    /** @var string */
    private $fontColor;

    /** @var string */
    private $fontModes;

    /** @var string */
    private $backgroundColor;

    /** @var string */
    private $backgroundModes;

    /**
     * LevelStyle constructor.
     * @param string $fontColor
     * @param string $backgroundColor
     * @param array $fontModes
     * @param array $backgroundModes
     */
    public function __construct(
        string $fontColor = self::COLOR_WHITE,
        string $backgroundColor = self::BACKGROUND_BLACK,
        array $fontModes = [self::MODE_NORMAL],
        array $backgroundModes = [self::MODE_NORMAL]
    ) {
        $this->fontColor = $fontColor;
        $this->backgroundColor = $backgroundColor;
        $this->fontModes = $fontModes;
        $this->backgroundModes = $backgroundModes;
    }

    /**
     * @return string
     */
    public function getFontStyle(): string
    {
        $modes = implode(';', array_filter($this->fontModes));
        return implode(';', array_filter([$modes, $this->fontColor]));
    }

    /**
     * @return string
     */
    public function getBackgroundStyle(): string
    {
        $modes = implode(';', array_filter($this->backgroundModes));
        return implode(';', array_filter([$modes, $this->backgroundColor]));
    }
}
