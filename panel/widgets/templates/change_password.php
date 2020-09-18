<?php
  return '
  <div class="widget">
    <div class="title"> كلمة المرور </div>
    <form>
      <label>
        <input type="password" name="new_password" placeholder="كلمة المرور الجديدة" />
      </label>

      <label class="details">
        <span>أدخل كلمة المرور لتأكيد التعديل</span>
        <input type="password" name="old_password" value="" placeholder="●●●●●●●●●" />
      </label>

      <button type="submit">تغيير كلمة المرور</button>
      <button type="button" name="close" class="close">إغلاق</button>
    </form>
  </div>';
?>
