<?php
  require_once("./../../config/config.php");

  $actions = [
    "change_email" => "ajax/change_email.php",
  ];

  if ( isset($_POST["action"]) && isset($actions[$_POST["action"]]) )
  {
    $response = include $actions[$_POST["action"]];
    echo $response;
  }

?>
