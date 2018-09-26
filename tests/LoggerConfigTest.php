<?php

namespace Tests\Chetkov\ConsoleLogger;

use Chetkov\ConsoleLogger\LoggerConfig;
use PHPUnit\Framework\TestCase;

/**
 * Class LoggerConfigTest
 * @package Tests\Chetkov\ConsoleLogger
 */
class LoggerConfigTest extends TestCase
{
    /**
     * @var LoggerConfig
     */
    private $loggerConfig;

    /**
     * LoggerConfigTest constructor.
     * @param null|string $name
     * @param array $data
     * @param string $dataName
     */
    public function __construct(?string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->loggerConfig = new LoggerConfig();
    }

    public function test__construct(): void
    {
        $loggerConfig = new LoggerConfig();
        $this->assertInstanceOf(LoggerConfig::class, $loggerConfig);
    }

    /**
     * @dataProvider boolProvider
     * @param bool $value
     */
    public function testIsShowDateTime(bool $value): void
    {
        $this->loggerConfig->setIsShowDateTime($value);
        $this->assertSame($value, $this->loggerConfig->isShowDateTime());
    }

    public function testGetDateTimeFormat(): void
    {
        $dateTimeFormat = 'Y-m-d H:i:s';
        $this->loggerConfig->setDateTimeFormat($dateTimeFormat);
        $this->assertSame($dateTimeFormat, $this->loggerConfig->getDateTimeFormat());
    }

    /**
     * @dataProvider boolProvider
     * @param bool $value
     */
    public function testIsShowLevel(bool $value): void
    {
        $this->loggerConfig->setIsShowLevel($value);
        $this->assertSame($value, $this->loggerConfig->isShowLevel());
    }

    /**
     * @dataProvider boolProvider
     * @param bool $value
     */
    public function testIsShowData(bool $value): void
    {
        $this->loggerConfig->setIsShowData($value);
        $this->assertSame($value, $this->loggerConfig->isShowData());
    }

    public function testGetFieldDelimiter(): void
    {
        $delimiter = ' :: ';
        $this->loggerConfig->setFieldDelimiter($delimiter);
        $this->assertSame($delimiter, $this->loggerConfig->getFieldDelimiter());
    }

    /**
     * @return array
     */
    public function boolProvider(): array
    {
        return [
            [true],
            [false],
        ];
    }
}
