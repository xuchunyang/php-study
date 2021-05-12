<?php

$name = "xu chunyang";

echo $name . "\n";

echo strlen($name) . "\n";

echo strlen("徐春阳") . "\n";

var_dump(strcmp($name, "xu chunyang"));
var_dump(strcmp($name, "xu"));

var_dump($name[0]);
var_dump(substr($name, 0, 2));

printf("=> %s, %d\n", $name, 32);

$new_name = strrev($name);
var_dump($new_name);
var_dump($name);

var_dump($name);
