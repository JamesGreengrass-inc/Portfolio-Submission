<?php
include('config/config.php');

try {
    $db = new PDO (conf::DB,conf::USER,conf::PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected to the database!";
} catch(Exception $e) {
    echo "Unable to connect. Error: ";
    echo $e->getMessage();
    exit;
}

?>