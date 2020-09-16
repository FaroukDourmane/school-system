<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main style -->
    <link rel="stylesheet" href="assets/css/main.css">
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
          <ul>
            <li> <a href="#"> <?php echo file_get_contents("assets/svg/stats.svg"); ?> إحصائيات </a> </li>
            <li> <a href="#"> <?php echo file_get_contents("assets/svg/flag.svg"); ?> الإنجازات </a> </li>
            <li> <a href="#"> <?php echo file_get_contents("assets/svg/paper.svg"); ?> طباعة </a> </li>
            <li> <a href="#"> <?php echo file_get_contents("assets/svg/home.svg"); ?> المدارس </a> </li>
            <li> <a href="#"> <?php echo file_get_contents("assets/svg/calendar.svg"); ?> الزيارات </a> </li>
            <li> <a href="#"> <?php echo file_get_contents("assets/svg/university.svg"); ?> المشرفات </a> </li>
          </ul>
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
    <script type="text/javascript" src="assets/js/home-control.js"></script>
  </footer>
</html>
