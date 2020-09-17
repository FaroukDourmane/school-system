<?php  
  $required_inputs = [ "user_email", "user_password" ];

  foreach ($required_inputs as $key => $value) {
    if ( !isset($_POST[$value]) ) {
      break;
      exit;
    }
  }

  $user_email = strtolower(mysqli_real_escape_string($Q, $_POST["user_email"]));
  return $user_email;
?>
