<?php
 $data =[];

try {
 
require 'config/database.php';

if($dsn){
//  echo "connected successfully";
 $sql = "SELECT * FROM lists";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $data = $items;

}
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}