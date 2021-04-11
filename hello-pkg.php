<?php

require 'vendor/autoload.php';

use Cowsayphp\Farm;

$cow = Farm::create(\Cowsayphp\Farm\Cow::class);
echo $cow->say("Hello, Cow!");

echo Farm::create(\Cowsayphp\Farm\Dragon::class)->say("Hello, Dragon");
echo Farm::create(\Cowsayphp\Farm\Tux::class)->say("Hello, Tux");
echo Farm::create(\Cowsayphp\Farm\Whale::class)->say("Hello, Whale");
