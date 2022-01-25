<?php

use Framework\Http\Request;

chdir(dirname(__DIR__));
require __DIR__.'/../src/Framework/Http/Request.php';

$request = new Request();

$name = $_GET['name'] ?? 'Guest';


header('X-developer: ElisDN');
echo 'hello '.$name;
