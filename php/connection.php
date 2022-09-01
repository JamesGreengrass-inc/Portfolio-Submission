<?php

try {
    $db = new PDO ("mysql:host=localhost;dbname=jamesgre_portfolio", "jamesgre_jamesgreengrass","WorkHabits2!");
    //$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected to the database!";
} catch(Exception $e) {
    echo "Unable to connect. Error: ";
    echo $e->getMessage();
    exit;
}
?>