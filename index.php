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
          <a href="signup.php">
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
            <li> <a href="index.php"> <img src="assets/svg/home.svg" /> الرئيسية </a> </li>
            <li> <a href="#"> <img src="assets/svg/question.svg" /> من نحن </a> </li>
          </ul>

          <ul class="left">
            <li> <a href="signup.php"> <img src="assets/svg/plus.svg" /> تسجيل جديد </a> </li>
          </ul>
        </div>

        <div class="wrapper">
          <h1>مكتب التعليم شمال جدة بنات</h1>
          <p class="description">
            تماشياً مع رؤية 2030 لبرنامج التحول الرقمي، والذي يهدف إلى نشر الوعي والمعرفة الرقمية، وتأهيل كوادر وطنية ذات كفاءة عالية للدفع بعملية التحول الرقمي. يسعى مكتب تعليم شمال جدة بنات الى التحول الرقمي في طريقة العمل في المكتب بحيث يقل العمل الرتيب و يزيد وقت التفكير بالتطوير و تسريع طريقة العمل اليومية بحيث يتم استغلال تطور التكنولوجيا الكبير الحاصل لخدمة المكتب بشكل أسرع و أفضل و الزيادة من الكفاءة في خط سير العمل بحيث تقل الأخطاء وتزيد الإنتاجية تم اطلاق برنامج مؤشر الغياب والسلوك. البرنامج يسهل عملية حساب المتوسط الحسابي لنسبة الغياب والسلوك للطالبات في المدارس بعد كل زيارة للمشرفة وطباعة التقارير الخاصة بالنتائج النهائية .
          </p>

          <div class="benifits">
            <h5>مزايا البرنامج</h5>

            <ul>
              <li> <img src="assets/svg/star.svg" /> توفير الوقت والجهد </li>
              <li>
                <img src="assets/svg/star.svg" /> طباعة تقرير حسب النوع
                <ul>
                  <li> <img src="assets/svg/paper-clip.svg" /> زيارات مشرفة معينة للمدارس </li>
                  <li> <img src="assets/svg/paper-clip.svg" /> الزيارات المسجلة لمدرسة معينة </li>
                  <li> <img src="assets/svg/paper-clip.svg" /> تقرير مؤشر التأثير الجماعي على سلوك الطالبات </li>
                </ul>
              </li>
            </ul>
          </div>
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
        <a href="signup.php" class="signup">
          <?php echo file_get_contents("assets/svg/plus.svg"); ?>
          تسجيل جديد
        </a>
      </div>
    </div>
    <!-- END Footer Container -->
  </body>

</html>
