<?php
include "./hello-namespace.php";

echo MyProject\PROJECT_NAME . "\n";
MyProject\hello();
\MyProject\hello();

echo \strlen("hello") . "\n";
