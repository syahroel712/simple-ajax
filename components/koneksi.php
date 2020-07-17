<?php
$base_url = 'http://localhost/simple-ajax/';
require "Medoo.php";

use Medoo\Medoo;

$con = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'belajar_ajax',
    'server' => "localhost",
    'username' => "root",
    'password' => ""
]);
