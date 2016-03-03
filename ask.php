#! /usr/bin/env php

<?php

use Symfony\Component\Console\Application;
use LasseHaslev\Console\Commands\Choose;
use LasseHaslev\Console\Commands\EightBall;

require 'vendor/autoload.php';

// Setup the application
$app = new Application( 'Ask', '0.1' );

// Add choose
$app->add( new Choose );

// Add 8ball
$app->add( new EightBall );

// Run the application
$app->run();
