

<?php $__env->startSection('title','資料変更確認画面'); ?>

<?php $__env->startSection('content'); ?>

<button onclick="./document_search">TOP画面へ</button>



<table border="1">
  <tr>
    <th nowrap>資料ID</th>
    <th nowrap>資料名</th>
    <th nowrap>廃棄年月日</th>
    <th nowrap>備考</th>
  </tr>

  <tr>
    <td nowrap><?php echo e($register_data->catalog_id); ?></td>
    <td nowrap><?php echo e($register_data->catalog_name); ?></td>
    <td nowrap><?php echo e($register_data->disposal_date); ?></td>
    <td nowrap><?php echo e($register_data->catalog_remark); ?></td>
  </tr>
</table>


  <button type="button" name="search_button" onclick="location.href='./document_search'">検索画面へ</button>


<form class="" action="document_change_complete" method="post">
  <?php echo csrf_field(); ?>
  <input type="hidden" name="catalog_id" value="<?php echo e($register_data->catalog_id); ?>">
  <input type="hidden" name="catalog_number" value="<?php echo e($register_data->catalog_number); ?>">
  <input type="hidden" name="catalog_name" value="<?php echo e($register_data->catalog_name); ?>">
  <input type="hidden" name="disposal_date" value="<?php echo e($register_data->disposal_date); ?>">
  <input type="hidden" name="catalog_remark" value="<?php echo e($register_data->catalog_remark); ?>">
  <input type="submit" class="next_button" value="確認">
</form>
  <!-- <button type="button" name="complete_button" onclick="location.href='./document_change_complete'">確認完了</button> -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\webbookapp\resources\views/document_change_confirming.blade.php ENDPATH**/ ?>