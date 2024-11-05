<?php
 

try {
 
require 'config/database.php';

if($dsn){
 
}
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}