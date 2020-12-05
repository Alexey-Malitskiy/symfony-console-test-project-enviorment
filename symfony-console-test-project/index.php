<?php

require __DIR__."/vendor/autoload.php";
require "./app/UserRolesCommand.php";
require "./app/UserRoles.php";

use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new UserRolesCommand());
$application->run();
