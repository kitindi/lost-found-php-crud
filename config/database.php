<?php

$dsn = 'mysql:host=localhost;dbname=items';
$username ='root';
$password = '';

// connect to datanbase 
$conn = new PDO($dsn, $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);