<?php 

//Variables
$dbname = "realisatiequincyvoetbal";
$pw = "";
$un = "root";
$server = "localhost";

try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $un, $pw);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }