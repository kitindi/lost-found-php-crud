<?php
require 'config/database.php';


if($conn){
    $id = $_GET['id'];
    $sql = "DELETE FROM lists WHERE id =:id";
    $stmt = $conn->prepare($sql);
    $stmt ->execute([':id' => $id]);
    if($stmt){
        header('Location: index.php');
    }else{
        echo "Failed to delete";
    }}