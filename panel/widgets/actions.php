<?php
  require_once("./../../config/config.php");

  $actions = [
    "change_email" => "ajax/change_email.php",
  ];

  if ( isset($_POST["action"]) && isset($actions[$_POST["action"]]) )
  {
    $response = include $actions[$_POST["action"]];
    echo json_encode($response);
  }else{
    echo json_encode(
      [
        "type" => "error",
        "close" => "yes",
        "message" => "Action not found"
      ]
    );
  }

?>
