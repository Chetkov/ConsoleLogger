<?php

use Chetkov\ConsoleLogger\ConsoleLoggerFactory;
use Chetkov\ConsoleLogger\LoggerConfig;
use Chetkov\ConsoleLogger\StyledLogger\LoggerStyle;
use Chetkov\ConsoleLogger\StyledLogger\StyledLoggerDecorator;

require_once 'vendor/autoload.php';

$config = (new LoggerConfig())
    ->setIsShowData(false)
    ->setIsShowLevel(false);
$logger = ConsoleLoggerFactory::create($config);

$logger->emergency('Тест уровня EMERGENCY');
$logger->alert('Тест уровня ALERT');
$logger->critical('Тест уровня CRITICAL');
$logger->error('Тест уровня ERROR');
$logger->warning('Тест уровня WARNING');
$logger->notice('Тест уровня NOTICE');
$logger->info('Тест уровня INFO');
$logger->debug('Тест уровня DEBUG');

$styledLogger = new StyledLoggerDecorator($logger, new LoggerStyle());

$styledLogger->emergency('Тест уровня EMERGENCY');
$styledLogger->alert('Тест уровня ALERT');
$styledLogger->critical('Тест уровня CRITICAL');
$styledLogger->error('Тест уровня ERROR');
$styledLogger->warning('Тест уровня WARNING');
$styledLogger->notice('Тест уровня NOTICE');
$styledLogger->info('Тест уровня INFO');
$styledLogger->debug('Тест уровня DEBUG');
