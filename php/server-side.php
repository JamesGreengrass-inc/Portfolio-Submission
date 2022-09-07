<?php

include('inc/functions.php');
include('connection.php');

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
    $lname = test_input($_POST["lname"]);
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

  $stmt = $db->prepare("INSERT INTO Portfolio_form_user (First_Name, Last_Name, Email, `Subject`, `Message`) VALUES (?, ?, ?, ?, ?)");
  $stmt -> bindParam($fname, $lname, $email, $subject, $message);

  if($result = $stmt -> execute(array($fname, $lname, $email, $subject, $message))) {
    echo "<h3>data stored in database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("\n$fname\n $lname\n "
        . "$email\n $subject\n $message\n");
  } else {
    echo "ERROR: Hush! Sorry $sql. "
        . PDO::errorInfo($db);
  }

}

?>