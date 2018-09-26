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

$logger->debug('Тест уровня DEBUG');
$logger->info('Тест уровня INFO');
$logger->warning('Тест уровня WARNING');
$logger->error('Тест уровня ERROR');
$logger->critical('Тест уровня CRITICAL');

$styledLogger = new StyledLoggerDecorator($logger, new LoggerStyle());

$styledLogger->debug('Тест уровня DEBUG');
$styledLogger->info('Тест уровня INFO');
$styledLogger->warning('Тест уровня WARNING');
$styledLogger->error('Тест уровня ERROR');
$styledLogger->critical('Тест уровня CRITICAL');
