# ConsoleLogger

```
composer require 'v.chetkov/console-logger:*'
```

#### ConsoleLogger:
```php
<?php
use Chetkov\ConsoleLogger\ConsoleLogger;

$logger = new ConsoleLogger();
$logger->error('Тест', ['data' => ['field1' => 'value1', 'field2' => 'value2']]);

//Вывод: 2018-09-21 23:22:57 :: ERROR :: Тест :: {"data":{"field1":"value1","field2":"value2"}}
```

#### StyledLogger:

Переопределение дефолтных настроек стиля логгирования:
```php
<?php
use Chetkov\ConsoleLogger\StyledLogger\LevelStyle;
use Chetkov\ConsoleLogger\StyledLogger\LoggerStyle;
use Chetkov\ConsoleLogger\StyledLogger\StyledLoggerDecorator;

$errorLevelStyle = new LevelStyle(
    LevelStyle::COLOR_WHITE,
    LevelStyle::BACKGROUND_RED
);

$loggerStyle = new LoggerStyle();
$loggerStyle->setErrorStyle($errorLevelStyle);

$logger = new \Chetkov\ConsoleLogger\ConsoleLogger();
$styledLogger = new StyledLoggerDecorator($logger, $loggerStyle);
$styledLogger->error('Тест', ['data' => ['field1' => 'value1', 'field2' => 'value2']]);
```