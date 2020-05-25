

<?php $__env->startSection('title','資料変更画面'); ?>

<?php $__env->startSection('content'); ?>

  <button type="button" name="search_button" onclick="location.href='./after_login_top'">TOP画面</button>


<form action="document_change_confirming" method="post">
<?php echo csrf_field(); ?>
<input type="hidden" name="catalog_number" value="<?php echo e($register_data->catalog_number); ?>">
<table>
  <tr>
    <th>資料ID</th>
    <td><input type="text" name="catalog_id" value="<?php echo e($register_data->catalog_id); ?>"></td>
  </tr>
  <tr>
    <th>資料名</th>
    <td><input type="text" name="catalog_name" value="<?php echo e($register_data->catalog_name); ?>"></td>
  </tr>
  <tr>
    <th>廃棄年月日</th>
    <td><input type="text" name="disposal_date" value="<?php echo e($register_data->disposal_date); ?>"></td>
  </tr>
  <tr>
    <th>備考</th>
    <td><input type="text" name="catalog_remark" value="<?php echo e($register_data->catalog_remark); ?>"></td>
  </tr>
</table>


<input type="submit" value="変更">
</form>


  <button type="button" name="search_button" onclick="location.href='./document_search'">検索画面へ</button>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\webbookapp\resources\views/document_change.blade.php ENDPATH**/ ?>