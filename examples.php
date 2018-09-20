<?php
require_once 'vendor/autoload.php';

$logger = new \Chetkov\ConsoleLogger\ConsoleLogger();

$logger->debug('Тест уровня DEBUG');
$logger->info('Тест уровня INFO');
$logger->warning('Тест уровня WARNING');
$logger->error('Тест уровня ERROR');
$logger->critical('Тест уровня CRITICAL');

$styledLogger = new \Chetkov\ConsoleLogger\StyledLogger\StyledLoggerDecorator($logger, new \Chetkov\ConsoleLogger\StyledLogger\LoggerStyle());

$styledLogger->debug('Тест уровня DEBUG');
$styledLogger->info('Тест уровня INFO');
$styledLogger->warning('Тест уровня WARNING');
$styledLogger->error('Тест уровня ERROR');
$styledLogger->critical('Тест уровня CRITICAL');
