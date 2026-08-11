<?php
// HEADERS 
include __DIR__ . '/password.php';

$password = passowordGenerator(12, true, true, true, true);
echo $password;
