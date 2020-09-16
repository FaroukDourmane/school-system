<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main style -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600;700&display=swap" rel="stylesheet"> -->

    <title>School Management System</title>
  </head>

  <body>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <!-- Login Side -->
      <div class="login-side">
        <h2>تسجيل الدخول</h2>

        <form class="" action="" method="post">
          <input type="text" name="" placeholder="السجل المدني" required />
          <input type="password" name="" placeholder="كلمة المرور" required />

          <button type="submit" name="login">الدخول</button>
        </form>

        <div class="signup-box">
          <h2>تسجيل مشرفة جديدة</h2>
          <a href="#signup" id="getPage">
            <?php echo file_get_contents("assets/svg/plus.svg"); ?>
            تسجيل جديد
          </a>
        </div>

        <img src="assets/svg/rocket.svg" class="rocket" />
      </div>
      <!-- END Login Side -->

      <!-- Content Side -->
      <div class="content-side loading">
        <div class="loadingContainer"></div>

        <div class="list">
          <ul class="right">
            <li> <a href="#home" id="getPage"> <img src="assets/svg/home.svg" /> الرئيسية </a> </li>
            <li> <a href="#"> <img src="assets/svg/question.svg" /> من نحن </a> </li>
          </ul>

          <ul class="left">
            <li> <a href="#signup" id="getPage"> <img src="assets/svg/plus.svg" /> تسجيل جديد </a> </li>
          </ul>
        </div>

        <!-- Ajax Container -->
        <div class="wrapper"> <!-- Content will be added here --> </div>
        <!-- END Ajax container -->


      </div>
      <!-- END Content Side -->
    </div>
    <!-- END Page Wrapper -->

    <!-- Footer Container -->
    <div class="footer-container">
      <div class="copyrights">
        جميع الحقوق محفوظة © مكتب التعليم شمال جدة بنات
      </div>

      <div class="button">
        <a href="#signup" class="signup" id="getPage">
          <?php echo file_get_contents("assets/svg/plus.svg"); ?>
          تسجيل جديد
        </a>
      </div>
    </div>
    <!-- END Footer Container -->
  </body>

  <footer>
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/home-control.js"></script>
  </footer>
</html>
