<?php

namespace Tests\Chetkov\ConsoleLogger;

use Chetkov\ConsoleLogger\ConsoleLoggerFactory;
use Chetkov\ConsoleLogger\StyledLogger\LevelStyle;
use Chetkov\ConsoleLogger\StyledLogger\LoggerStyle;
use Chetkov\ConsoleLogger\StyledLogger\StyledLoggerDecorator;

/**
 * Class StyledLoggerDecoratorTest
 * @package Tests\Chetkov\ConsoleLogger
 */
class StyledLoggerDecoratorTest extends ConsoleLoggerTest
{
    /**
     * StyledLoggerDecoratorTest constructor.
     * @param null|string $name
     * @param array $data
     * @param string $dataName
     */
    public function __construct(?string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $logger = ConsoleLoggerFactory::create();
        $loggerStyle = new LoggerStyle();
        $this->consoleLogger = new StyledLoggerDecorator($logger, $loggerStyle);
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
        $styledLogger = new StyledLoggerDecorator(ConsoleLoggerFactory::create(), $loggerStyle);
        $this->assertInstanceOf(StyledLoggerDecorator::class, $styledLogger);
    }
}
