<?php

namespace Tests\Chetkov\ConsoleLogger;

use Chetkov\ConsoleLogger\ConsoleLogger;
use Chetkov\ConsoleLogger\ConsoleWriter;
use Chetkov\ConsoleLogger\StyledLogger\LevelStyle;
use Chetkov\ConsoleLogger\StyledLogger\LoggerStyle;
use Chetkov\ConsoleLogger\StyledLogger\StyledLoggerDecorator;
use PHPUnit\Framework\TestCase;

/**
 * Class StyledLoggerDecoratorTest
 * @package Tests\Chetkov\ConsoleLogger
 */
class StyledLoggerDecoratorTest extends TestCase
{
    private const MESSAGE = 'Тест';
    private const EXPECTED_REGEXP = '/[\s\S]*' . self::MESSAGE . '[\s\S]*/';

    /**
     * @var StyledLoggerDecorator
     */
    private $styledLogger;

    /**
     * StyledLoggerDecoratorTest constructor.
     * @param null|string $name
     * @param array $data
     * @param string $dataName
     */
    public function __construct(?string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $logger = new ConsoleLogger(new ConsoleWriter());
        $loggerStyle = new LoggerStyle();
        $this->styledLogger = new StyledLoggerDecorator($logger, $loggerStyle);
    }

    public function test__constructor(): void
    {
        $levelStyle = new LevelStyle();
        $loggerStyle = new LoggerStyle();
        $loggerStyle->setDebugStyle($levelStyle);
        $loggerStyle->setInfoStyle($levelStyle);
        $loggerStyle->setWarningStyle($levelStyle);
        $loggerStyle->setErrorStyle($levelStyle);
        $loggerStyle->setCriticalStyle($levelStyle);
        $styledLogger = new StyledLoggerDecorator(new ConsoleLogger(new ConsoleWriter()), $loggerStyle);
        $this->assertInstanceOf(StyledLoggerDecorator::class, $styledLogger);
    }

    public function testDebug(): void
    {
        $this->styledLogger->debug(self::MESSAGE);
        $this->expectOutputRegex(self::EXPECTED_REGEXP);
    }

    public function testInfo(): void
    {
        $this->styledLogger->info(self::MESSAGE);
        $this->expectOutputRegex(self::EXPECTED_REGEXP);
    }

    public function testWarning(): void
    {
        $this->styledLogger->warning(self::MESSAGE);
        $this->expectOutputRegex(self::EXPECTED_REGEXP);
    }

    public function testError(): void
    {
        $this->styledLogger->error(self::MESSAGE);
        $this->expectOutputRegex(self::EXPECTED_REGEXP);
    }

    public function testCritical(): void
    {
        $this->styledLogger->critical(self::MESSAGE);
        $this->expectOutputRegex(self::EXPECTED_REGEXP);
    }
}
