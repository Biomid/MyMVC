<?php
require_once __DIR__."/vendor/autoload.php";

use Bio\MyMvc\core\model\greeting;

$test = new greeting("Hello bomj");

echo $test->Say();