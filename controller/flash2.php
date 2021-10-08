<?php
//use Tamtamchik\SimpleFlash\Flash;
//use Tamtamchik\SimpleFlash\TemplateFactory;
//use Tamtamchik\SimpleFlash\Templates;

$template = Tamtamchik\SimpleFlash\TemplateFactory::create(Tamtamchik\SimpleFlash\Templates::SEMANTIC);  // get template from factory, e.g. template for Foundation
$flash = new Tamtamchik\SimpleFlash\Flash($template);  // passing to constructor

$flash->warning('It is totally just for display, never do this in real life...');
$flash->info('Info message....');
$flash->error('Error message....');
$flash->success('Success message....');

$output = flash()->display();

include('view/body/flash2.php');
