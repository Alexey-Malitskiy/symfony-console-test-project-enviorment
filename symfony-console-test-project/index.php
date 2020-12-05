<?php

require __DIR__."/vendor/autoload.php";
require "./app/UserRolesCommand.php";
require "./app/UserRoles.php";
require "./app/CheckUserRolesCommand.php";
require "./app/CheckUserRoles.php";

use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new UserRolesCommand());
$application->add(new CheckUserRolesCommand());
$application->run();
