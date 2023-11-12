<?php

require_once __DIR__ . '/../vendor/autoload.php';

use function cli\line;
use function cli\prompt;

line('Welcome to the Brain Games!');
$playerName = prompt('May I have your name?');
line('Hello, %s!', $playerName);
