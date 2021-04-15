<?php
// https://www.php.net/manual/en/sockets.examples.php

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === false) {
    echo "socket_create() failed: reason: " . socket_strerror(socket_last_error()) . "\n";
} else {
    echo "OK.\n";
}

$result = socket_connect($socket, "localhost", 3000);
if ($result === false) {
    echo "socket_connect() failed: reason: ($result) " . socket_strerror((socket_last_error())) . "\n";
} else {
    echo "OK.\n";
}
socket_write($socket, "hello", 5);
echo "OK.\n";

echo "Reading response:\n\n";
while ($out = socket_read($socket, 2048)) {
    echo $out;
}

echo "Closing socket...";
socket_close($socket);
echo "OK.\n\n";
