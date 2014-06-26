<?php
/**
 * dependencies.php
 * for dependency injection, service locator etc..
 */
$container->bind('sample', 'Application\Console\SampleConsole');

return $console;