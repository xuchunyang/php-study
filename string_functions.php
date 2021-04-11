<?php

$s = "Hello world";

var_dump(
    substr($s, 6)
);

print(strlen($s) . "\n");

echo strpos($s, "world") . "\n";

echo strrpos($s, "o") . "\n";

var_dump(trim("  hello   world \n\t\n"));

var_dump(strtoupper($s));
var_dump(strtolower($s));
var_dump(ucwords($s));

var_dump(str_replace("o", "X", "hello world"));

var_dump(is_string($s), is_string(42));

var_dump(
    intval(true),
    intval(false)
);

$values = [
    true,
    false,
    null,
    'abc',
    33,
    '33',
    22.4,
    '22.4',
    '',
    '   ',
    0,
    '0'
];

foreach ($values as $idx => $val) {
    $result = is_string($val) ? "Y" : "N";
    var_dump($val);
    echo "is a string? $result\n\n";
}

$data = gzcompress("fafafahellfafnapfnapnfapnfapnfpa");
var_dump($data);
var_dump(gzuncompress($data));
