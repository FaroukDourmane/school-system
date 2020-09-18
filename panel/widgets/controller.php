<?php

  // Define available widgets
  $widgets = [
    "change_email" => "templates/change_email.php",
    "change_password" => "templates/change_password.php",
    "personal_info" => "templates/personal_info.php"
  ];

  if ( isset($_POST["request"]) && $_POST["request"] == "widget" && isset($_POST["id"]) )
  {
    $id = $_POST["id"];

    if ( isset($widgets[$id]) && file_exists($widgets[$id]) )
    {
      $type = "success";
      $data = include $widgets[$id];
    }else{
      $type = "error";
      $data = "";
    }

    $response = [
      "type" => $type,
      "content" => $data,
      "action" => $id
    ];

    $response = json_encode($response);
    echo $response;
  }
?>
