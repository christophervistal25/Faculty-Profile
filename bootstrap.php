<?php
require "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;

$ASSET_URL =  str_replace('\\', '/', dirname(__FILE__)) . '/assets';

$capsule = new Capsule;




$capsule->addConnection([
	'driver'   => 'mysql',
	'host'     => '127.0.0.1',
	'database' => 'faculty',
	'username' => 'root',
	'password' => ''
]);


//Make this Capsule instance available globally.
$capsule->setAsGlobal();

// Setup the Eloquent ORM.
$capsule->bootEloquent();
$capsule->bootEloquent();