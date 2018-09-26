<?php

namespace Tests\Chetkov\ConsoleLogger;

use Chetkov\ConsoleLogger\ConsoleLogger;
use Chetkov\ConsoleLogger\ConsoleLoggerFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class ConsoleLoggerTest
 * @package Tests\Chetkov\ConsoleLogger
 */
class ConsoleLoggerTest extends TestCase
{
    private const MESSAGE = 'Тест';
    private const EXPECTED_REGEXP = '/[\s\S]*' . self::MESSAGE . '[\s\S]*/';

    /**
     * @var ConsoleLogger
     */
    protected $consoleLogger;

    /**
     * ConsoleLoggerTest constructor.
     * @param null|string $name
     * @param array $data
     * @param string $dataName
     */
    public function __construct(?string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->consoleLogger = ConsoleLoggerFactory::create();
    }

    public function testDebug(): void
    {
        $this->consoleLogger->debug(self::MESSAGE);
        $this->expectOutputRegex(self::EXPECTED_REGEXP);
    }

    public function testInfo(): void
    {
        $this->consoleLogger->info(self::MESSAGE);
        $this->expectOutputRegex(self::EXPECTED_REGEXP);
    }

    public function testWarning(): void
    {
        $this->consoleLogger->warning(self::MESSAGE);
        $this->expectOutputRegex(self::EXPECTED_REGEXP);
    }

    public function testError(): void
    {
        $this->consoleLogger->error(self::MESSAGE);
        $this->expectOutputRegex(self::EXPECTED_REGEXP);
    }

    public function testCritical(): void
    {
        $this->consoleLogger->critical(self::MESSAGE);
        $this->expectOutputRegex(self::EXPECTED_REGEXP);
    }
}
