<?php

require "./vendor/autoload.php";

//require "src/SayHello";

use com\iesebre\dam2\pa201415\paolo\SayHello;
use illuminate\filesystem\Filesystem;

$fs = new Filesystem();

$hello = new SayHello();

$hello->sayHello();

//echo "Hola mon!";

?>