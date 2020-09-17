<?php
  return '
  <div class="widget">
    <div class="title"> البريد الإلكتروني </div>
    <form>
      <label>
        <input type="email" name="user_email" value="dourmanefarouk@gmail.com" />
      </label>

      <label class="details">
        <span>أدخل كلمة المرور لتأكيد التعديل</span>
        <input type="password" name="user_password" value="" placeholder="●●●●●●●●●" />
      </label>

      <button type="submit">تغيير البريد الإلكتروني</button>
      <button type="button" name="close" class="close">إغلاق</button>
    </form>
  </div>';
?>
