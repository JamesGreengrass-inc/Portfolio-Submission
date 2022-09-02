<?php 

function write_to_console($data) {
  $console = $data;
  if (is_array($console))
  $console = implode(',', $console);
 
  echo "<script>console.log('Console: " . $console . "' );</script>";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>