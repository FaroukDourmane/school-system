<?php
  $required_inputs = [ "new_password", "old_password" ];

  foreach ($required_inputs as $key => $value) {
    if ( !isset($_POST[$value]) ) {
      break;
      exit;
    }
  }

  //$user_email = strtolower(mysqli_real_escape_string($Q, $_POST["user_email"]));

  return [
    "type" => "error",
    "message" => "This is a response",
    "close" => "no"
  ];
?>
