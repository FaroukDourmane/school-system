<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main style -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/widgets.css">
    <link rel="stylesheet" href="../assets/css/forms.css">
    <title>School Management System - Dashboard</title>
  </head>

  <body>
    <div class="panel-container rtl">
      <!-- Top bar -->
      <div class="top-wrapper">
        <div class="user">
          <div class="avatar"></div>
          <div class="name">
            <span>فاروق دورمان</span>
            <small>مدير المكتب</small>
          </div>

          <a href="#" class="logout"> الخروج <img src="assets/svg/logout.svg" /> </a>
        </div>

        <div class="logo"></div>
      </div>
      <!-- END Top bar -->


      <!-- Dashboard window -->
      <div class="window-container">
        <div class="top-bar">
          <div class="general-options">
            <a href="#" class="burger"> <?php echo file_get_contents("assets/svg/burger.svg"); ?> </a>
            <a href="#" class="toggle-side"> <?php echo file_get_contents("assets/svg/user.svg"); ?> <span>إعدادات الحساب</span> </a>
          </div>

          <?php include "list.php"; ?>
        </div>

        <div class="content-wrapper">
          <div class="side-menu">
            <ul>
              <li> <a href="#" class="openWidget" id="change_email">تغيير البريد الإلكتروني</a> </li>
              <li> <a href="#" class="openWidget" id="change_password">تغيير كلمة المرور</a> </li>
              <li> <a href="#" class="openWidget" id="personal_info">المعلومات الشخصية</a> </li>
            </ul>

            <?php include "list.php"; ?>
          </div>

          <!-- Main Content -->
          <div class="content loading">
            <?php //echo file_get_contents("assets/svg/loader.svg"); ?>
          </div>
          <!-- END Content -->

        </div>
      </div>
      <!-- END Dashboard window -->

      <!-- Panel footer -->
      <div class="footer-container">
        <div class="copyrights">
          كل الحقوق محفوظة
          <small><?php echo date("Y", time()); ?></small>
        </div>

        <div class="title">
          مكتب التعليم شمال جدة بنات
        </div>
      </div>
      <!-- END Panel footer -->
    </div>

  </body>

  <footer>
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/panel-control.js"></script>

    <!-- Widgets -->
    <script type="text/javascript" src="assets/js/widgets-config.js"></script> <!-- Required: General Configurations -->
    <script type="text/javascript" src="assets/js/widgets.js"></script> <!-- Open & Close System -->
    <script type="text/javascript" src="assets/js/widgets-actions.js"></script> <!-- Widgets' forms in action -->
    <!-- END Widgets -->
  </footer>
</html>
