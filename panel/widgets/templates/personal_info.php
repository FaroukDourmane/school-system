<?php
  return '
  <div class="widget">
    <div class="title"> المعلومات الشخصية </div>
    <form>
      <label>
        <input type="text" name="username" value="" placeholder="إسم المستخدم" />
      </label>

      <label>
        <input type="email" name="email" value="" placeholder="البريد الإلكتروني" />
      </label>

      <label>
        <input type="number" name="reference" value="" placeholder="السجل المدني" />
      </label>

      <button type="submit">تعديل البيانات الشخصية</button>
      <button type="button" name="close" class="close">إغلاق</button>
    </form>
  </div>';
?>
