# ConsoleLogger

```
composer require 'v.chetkov/console-logger:*'
```

#### LoggerConfig
```php
<?php
use Chetkov\ConsoleLogger\LoggerConfig;

$config = new LoggerConfig();
// По умолчанию в конфиге включено:
// - вывод даты/времени
// - вывод уровня сообщения (err, warn, ...)
// - вывод переданных дополнительных данных
// - формат даты/времени 'H:i:s'
// - разделитель ' :: '
// 
// Можно переопределить на свой вкус...

$config
    ->setIsShowDateTime(true)
    ->setIsShowLevel(false)
    ->setIsShowData(false)
    ->setDateTimeFormat('Y-m-d H:i:s')
    ->setFieldDelimiter(' || ');
```

#### ConsoleLogger:
```php
<?php
use Chetkov\ConsoleLogger\ConsoleLoggerFactory;

// Фабрика ожидает на входе LoggerConfig.
// Если он не передан, создастся экземпляр с настройками по умолчанию
$logger = ConsoleLoggerFactory::create();
$logger->error('Тест', ['data' => ['field1' => 'value1', 'field2' => 'value2']]);

//Вывод: 2018-09-21 23:22:57 :: ERROR :: Тест :: {"data":{"field1":"value1","field2":"value2"}}
```

#### StyledLogger:

Переопределение дефолтных настроек стиля логгирования:
```php
<?php
use Chetkov\ConsoleLogger\ConsoleLoggerFactory;
use Chetkov\ConsoleLogger\StyledLogger\LevelStyle;
use Chetkov\ConsoleLogger\StyledLogger\LoggerStyle;
use Chetkov\ConsoleLogger\StyledLogger\StyledLoggerDecorator;

$errorLevelStyle = new LevelStyle(
    LevelStyle::COLOR_WHITE,
    LevelStyle::BACKGROUND_RED
);

$loggerStyle = new LoggerStyle();
$loggerStyle->setErrorStyle($errorLevelStyle);

$logger = ConsoleLoggerFactory::create();
$styledLogger = new StyledLoggerDecorator($logger, $loggerStyle);
$styledLogger->error('Тест', ['data' => ['field1' => 'value1', 'field2' => 'value2']]);
```