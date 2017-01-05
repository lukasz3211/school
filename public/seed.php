<?php
require_once __DIR__ . '/../vendor/autoload.php';

use itb\User;

$matt = new User();
$matt->setUsername('matt');
$matt->setPassword('smith');
$matt->setRole(User::ROLE_USER);

$joe = new User();
$joe->setUsername('joe');
$joe->setPassword('bloggs');
$joe->setRole(User::ROLE_USER);

$admin = new User();
$admin->setUsername('admin');
$admin->setPassword('admin');
$admin->setRole(User::ROLE_ADMIN);

User::insert($matt);
User::insert($joe);
User::insert($admin);

$users = User::getAll();

var_dump($users);