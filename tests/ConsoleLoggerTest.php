<?php

namespace Tests\Chetkov\ConsoleLogger;

use Chetkov\ConsoleLogger\ConsoleLogger;
use Chetkov\ConsoleLogger\ConsoleWriter;
use Chetkov\ConsoleLogger\Logger;
use PHPUnit\Framework\TestCase;

/**
 * Class ConsoleLoggerTest
 * @package Tests\Chetkov\ConsoleLogger
 */
class ConsoleLoggerTest extends TestCase
{
    private const MESSAGE = 'Тест';

    /**
     * @var
     */
    private $consoleLogger;

    /**
     * ConsoleLoggerTest constructor.
     * @param null|string $name
     * @param array $data
     * @param string $dataName
     */
    public function __construct(?string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->consoleLogger = new ConsoleLogger(new ConsoleWriter());
    }

    public function testDebug(): void
    {
        $this->consoleLogger->debug(self::MESSAGE);
        $this->expectOutputString($this->generateMessage(Logger::LEVEL_DEBUG));
    }

    public function testInfo(): void
    {
        $this->consoleLogger->info(self::MESSAGE);
        $this->expectOutputString($this->generateMessage(Logger::LEVEL_INFO));
    }

    public function testWarning(): void
    {
        $this->consoleLogger->warning(self::MESSAGE);
        $this->expectOutputString($this->generateMessage(Logger::LEVEL_WARNING));
    }

    public function testError(): void
    {
        $this->consoleLogger->error(self::MESSAGE);
        $this->expectOutputString($this->generateMessage(Logger::LEVEL_ERROR));
    }

    public function testCritical(): void
    {
        $this->consoleLogger->critical(self::MESSAGE);
        $this->expectOutputString($this->generateMessage(Logger::LEVEL_CRITICAL));
    }

    /**
     * @param string $level
     * @return string
     */
    private function generateMessage(string $level): string
    {
        $data = [];
        $currentDateTime = new \DateTime();
        return implode(' :: ', [
                $currentDateTime->format('Y-m-d H:i:s'),
                $level,
                trim(self::MESSAGE),
                json_encode($data)
            ]) . PHP_EOL;
    }
}
