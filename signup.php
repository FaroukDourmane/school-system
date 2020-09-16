<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main style -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/forms.css">
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
          <a href="#">
            <?php echo file_get_contents("assets/svg/plus.svg"); ?>
            تسجيل جديد
          </a>
        </div>

        <img src="assets/svg/rocket.svg" class="rocket" />
      </div>
      <!-- END Login Side -->

      <!-- Content Side -->
      <div class="content-side">
        <div class="list">
          <ul class="right">
            <li> <a href="#"> <img src="assets/svg/home.svg" /> الرئيسية </a> </li>
            <li> <a href="#"> <img src="assets/svg/question.svg" /> من نحن </a> </li>
          </ul>

          <ul class="left">
            <li> <a href="#"> <img src="assets/svg/plus.svg" /> تسجيل جديد </a> </li>
          </ul>
        </div>

        <div class="wrapper">
          <h1>تسجيل مشرفة جديدة</h1>

          <form class="custom-form ltr text-right" action="" method="post">
            <div class="form-col">
              <label class="palceholder-label">
                <input type="text" name="" value="" placeholder="أكتب السجل المدني" />
                <span class="placeholder">السجل المدني</span>
              </label>
            </div>

            <div class="form-col">
              <label class="palceholder-label">
                <input type="text" name="" value="" placeholder="إختر المكتب" />
                <span class="placeholder">المكتب</span>
              </label>
            </div>

            <div class="form-col rtl">
              <label class="palceholder-label">
                <input type="text" name="" value="" placeholder="الإسم الأول" />
                <span class="placeholder">الإسم</span>
              </label>

              <label class="palceholder-label">
                <input type="text" name="" value="" placeholder="إسم العائلة" />
                <span class="placeholder">اللفب</span>
              </label>
            </div>

            <div class="form-col rtl">
              <label class="palceholder-label">
                <input type="password" name="" value="" placeholder="●●●●●●●●●" />
                <span class="placeholder">كلمة المرور</span>
              </label>

              <label class="palceholder-label">
                <input type="password" name="" value="" placeholder="●●●●●●●●●" />
                <span class="placeholder">كلمة المرور</span>
              </label>
            </div>

            <div class="form-col">
              <label>
                <button type="submit" name="">إتمام التسجيل</button>
              </label>
            </div>
          </form>

        </div>
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
        <a href="#" class="signup">
          <?php echo file_get_contents("assets/svg/plus.svg"); ?>
          تسجيل جديد
        </a>
      </div>
    </div>
    <!-- END Footer Container -->
  </body>

</html>
