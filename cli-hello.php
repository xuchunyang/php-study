<?php

if ($argc < 2) {
    echo "Usage: $argv[0] <name>\n";
    exit(1);
}

var_dump($argv);
print_r($argv);

$name = $argv[1];
echo "Hello, $name!\n";
