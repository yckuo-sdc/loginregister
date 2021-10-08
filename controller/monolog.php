<?php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

echo "monolog...";
// create a log channel

$log = new Logger('name');
$log->pushHandler(new StreamHandler('log/error.log', Logger::WARNING));

// add records to the log
$log->warning(Ip::get().': Foo', ['username' => 'Seldaek']);
$log->error('Bar');
