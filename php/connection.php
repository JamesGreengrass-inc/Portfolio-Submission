<?php

try {
    $db = new PDO ("mysql:host=localhost;dbname=jamesgre_portfolio;port=3306", "jamesgre_jamesgreengrass", "WorkHabits2!");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected to the database!";
} catch(Exception $e) {
    echo "Unable to connect. Error: ";
    echo $e->getMessage();
    exit;
}

?>