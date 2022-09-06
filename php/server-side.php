<?php

include('inc/functions.php');

$fnameErr = $lnameErr = $emailErr = $subjectErr = $messageErr = "";
$fname = $lname = $email = $subject = $message = $success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["fname"])) {
    $fnameErr = "First name is required";
  } else {
    $fname = test_input($_POST["fname"]);
    filter_input(INPUT_POST, "fname" , FILTER_SANITIZE_STRING);
  }

  if (empty($_POST["lname"])) {
    $lnameErr = "Last name is required";
  } else {
    $lname = test_input($_POST["fname"]);
    $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  }

  if (empty($_POST["subject"])) {
    $subjectErr = "Subject is required";
  } else {
    $subject = test_input($_POST["subject"]);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
  }

  if (empty($_POST["message"])) {
    $messageErr = "Message is required";
  } else {
    $message = test_input($_POST["message"]);
  }


  if (PDO::prepare("INSERT INTO `jamesgre_portfolio` (`first name`, `last name`, `email`, `subject`, `message`) VALUES ('".mysql_real_escape_string($fname)."','".mysql_real_escape_string($lname)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($subject)."','".mysql_real_escape_string($message)."')")) {
    PDOStatement::execute();
    $success = "Success!";
  } else {
    echo mysql_error();
    exit;
  }

}

?>